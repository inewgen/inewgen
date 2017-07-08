<?php

class BlockwordsController extends ApiController
{
    public function __construct()
    {
        $this->pathcache = 'api.0.blockwords';
    }

    public function index()
    {
        $data = Input::all();

        $response = array(
            'data' => $data,
        );

        // Validator
        $rules = array(
            // 'user_id' => 'required|integer|min:1',
            'type'      => 'integer|min:1',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $response = array(
                'message' => $validator->messages()->first()
            );

            return API::createResponse($response, 1003);
        }

        // Get cache value
        $keycache = getKeyCache($this->pathcache . '.index', $data);

        if ($response = getCache($keycache)) {
            return API::createResponse($response, 0);
        }

        $order   = array_get($data, 'order', 'updated_at');
        $sort    = array_get($data, 'sort', 'desc');

        // Set Pagination
        $take = (int) (isset($data['perpage'])) ? $data['perpage'] : 20;
        $take = $take == 0 ? 20 : $take;
        $page = (int) (isset($data['page']) && $data['page'] > 0) ? $data['page'] : 1;
        $skip = ($page - 1) * $take;

        // Filter
        $fild_arr = array(
            'id', 'title', 'description', 'type', 'status', 's'
        );
        
		$filters = array();
		foreach ($fild_arr as $value) {
        	isset($data[$value]) ? $filters[$value] = array_get($data, $value, ''):'';
		}

        $query = Blockwords::filters($filters)
                ->orderBy($order, $sort);
        $count   = (int) $query->count();
        $results = $query->skip($skip)->take($take)->get();
        $results = json_decode($results, true);
        
        if (!$results) {
            return API::createResponse($response, 1004);
        }

        $entries = $results;

        $pagings = array(
            'page'    => $page,
            'perpage' => $take,
            'total'   => $count,
        );

        $response = array(
            'cached'     => false,
            'pagination' => $pagings,
            'record'     => $entries,
        );

        // Save cache value
        saveCache($keycache, $response);

        return API::createResponse($response, 0);
    }
	
	public function show($id = null)
    {
        $data = Input::all();
        $data['id'] = $id;

        // Validator
        $rules = array(
            'id' => 'required|integer|min:1',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $response = array(
                'message' => $validator->messages()->first(),
            );

            return API::createResponse($response, 1003);
        }

        // Get cache value
        $keycache = getKeyCache($this->pathcache . '.show.' . $id, $data);
        
        if ($response = getCache($keycache)) {
            return API::createResponse($response, 0);
        }

		// Filter
		$fild_arr = array(
			'id'
		);
        
		$filters = array();
		foreach ($fild_arr as $value) {
        	isset($data[$value]) ? $filters[$value] = array_get($data, $value, ''):'';
		}

        $query = Blockwords::filters($filters)
                ->get();
        $results = json_decode($query, true);
		
        if (!$results) {
            $response = array();

            return API::createResponse($response, 1004);
        }

        $entries = $results;

        $response = array(
            'cached' => false,
            'record' => $entries
        );

        // Save cache value
        saveCache($keycache, $response);

        return API::createResponse($response, 0);
    }

    public function store()
    {
        $data = Input::all();

        // Validator
        $rules = array(
            'title'       => 'required',
            // 'description' => 'required',
            'type'        => 'required|integer',
            'status'      => 'integer|in:0,1',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $response = array(
                'message' => $validator->messages()->first(),
            );

            return API::createResponse($response, 1003);
        }

		// Parameter
		$date_time = date("Y-m-d H:i:s");
		$insert_allow = array(
			'title' => '', 
			'description' => '',
			'type' => '1', 
			'status' => '1',
			'updated_at' => $date_time,
			'created_at' => $date_time,
		);
		$parameters = array();
		foreach ($insert_allow as $key => $val) {
			$parameters[$key] = array_get($data, $key, $val);
		}

        // Insert
        $query = new Blockwords();
        foreach ($parameters as $key => $value) {
            $query->$key = $value;
        }
        $query->save();

        if (!isset($query) || !is_object($query)) {
            $response = array();

            return API::createResponse($response, 1001);
        }

        $id = (isset($query->id) ? $query->id : null);

        $response = array(
            'id' => $id,
            'record' => $data,
        );

        // Clear cache value
        clearCacheStore($this->pathcache);

        return API::createResponse($response, 0);
    }

    public function update($id = null)
    {
        $data = Input::all();
        $data['id'] = $id;

        // Validator
        $rules = array(
            'id' => 'required|integer|min:1',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $response = array(
                'message' => $validator->messages()->first(),
            );

            return API::createResponse($response, 1003);
        }

        $id        = array_get($data, 'id', null);
        $response  = array();

        // Update
        $update_allow = array(
            'title',
            'description',
            'type',
            'status',
        );

        foreach ($data as $key => $value) {
            if (in_array($key, $update_allow)) {
                isset($data[$key]) ? $parameters[$key] = $value: '';
            }
        }

        if (isset($parameters)) {
            $parameters['updated_at'] = date("Y-m-d H:i:s");

            // Update
            $query = Blockwords::where('id', '=', $id);
              
            if ($query) {
                $query->update($parameters);
                $id = (isset($query->id)?$query->id:null);
            } else {
                return API::createResponse($response, 1004);
            }
        }

        $response = array(
            'record' => $data,
        );

        // Clear cache value
        clearCacheUpdate($this->pathcache);

        return API::createResponse($data, 0);
    }

    public function destroy($id = null)
    {
        $data = Input::all();
        $data['id'] = $id;

        // Validator
        $rules = array(
            'id' => 'required|integer|min:1',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $response = array(
                'message' => $validator->messages()->first(),
            );

            return API::createResponse($response, 1003);
        }

        // Delete
        $query = Blockwords::find($id);
        if ($query) {
            $query->delete();
        }

        if (!$query) {
            $response = array();

            return API::createResponse($response, 1004);
        }

        $response = array(
            'record' => $data,
        );

        // Clear cache value
        clearCacheDestroy($this->$pathcache);

        return API::createResponse($response, 0);
    }
}
