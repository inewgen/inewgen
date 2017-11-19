<?php
class YoutubeController extends BaseController
{
    public function __construct(
        YoutubeRepositoryInterface $youtubeRepository)
    {
        $this->youtubeRepository = $youtubeRepository;
    }

    /**
     * The layout that should be used for responses.
     */
    //protected $layout = 'layouts.master';

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $data = Input::all();

        $theme = Theme::uses('margo')->layout('easy');
        $theme->setTitle('iNewGen :: Clips VDO');
        $theme->setDescription('Clips VDO description');

        $view = array(
            'data' => $data
        );

        $parameters = array(
            'perpage' => '100',
            'status' => '1',
        );

        $results = $this->youtubeRepository->get($parameters);
        $view['youtube'] = array_get($results, 'data.record', array());

        $script = $theme->scopeWithLayout('youtube.jscript_index', $view)->content();
        $theme->asset()->container('inline_script')->usePath()->writeContent('custom-inline-script', $script);

        return $theme->scopeWithLayout('youtube.index', $view)->render();
    }

    public function add()
    {
        $data = Input::all();

        $theme = Theme::uses('margo')->layout('easy');
        $theme->setTitle('iNewGen :: Clips VDO');
        $theme->setDescription('Clips VDO description');

        $view = array(
            'data' => $data
        );

        $parameters = array(
            'perpage' => '100',
            'status' => '1',
        );

        $results = $this->youtubeRepository->get($parameters);
        $view['youtube'] = array_get($results, 'data.record', array());

        $script = $theme->scopeWithLayout('youtube.jscript_add', $view)->content();
        $theme->asset()->container('inline_script')->usePath()->writeContent('custom-inline-script', $script);

        return $theme->scopeWithLayout('youtube.add', $view)->render();
    }

    public function create()
    {
        $data = Input::all();
        $url = array_get($data, 'url', '');
        $code_split = explode('v=', $url);
        $code = array_get($code_split, '1', '');

        $parameters = array(
            'code' => $code,
            'name' => array_get($data, 'name', ''),
            'artist' => array_get($data, 'artist', ''),
            'url' => $url,
            'description' => array_get($data, 'description', ''),
            'user_id' => array_get($data, 'user_id', '1'),
            'type' => array_get($data, 'type', '1'),
            'status' => array_get($data, 'status', '1')
        );

        $results = $this->youtubeRepository->create($parameters);
        // alert($results);die();
        return Redirect::to('/youtube/add');
    }

    public function update($id)
    {
        $parameters = array(
            'status' => 0
        );

        $results = $this->youtubeRepository->update($id, $parameters);
        // alert($results);die();
        return Redirect::to('/youtube');
    }
}
