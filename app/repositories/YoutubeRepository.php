<?php

use App\Repositories\CachedRepository;

class YoutubeRepository implements YoutubeRepositoryInterface
{

    public function __construct(CachedRepository $cachedRepository)
    {
        $this->cachedRepository = $cachedRepository;
        $this->pathcache = 'web.0.youtube';
    }

    public function get($parameters)
    {
        // $keycache = getKeyCache($this->pathcache . '.get', $parameters);

        // Get cache
        // $response = $this->cachedRepository->get($keycache);
        // if ($response) {
        //     return $response;
        // }

        if (isset($_GET['nocache'])) {
            $parameters['nocache'] = $_GET['nocache'];
        }

        $client   = new Client(Config::get('url.inewgen-api'));
        $results  = $client->get('youtube', $parameters);
        $response = json_decode($results, true);

        // Save cache
        // $this->cachedRepository->put($keycache, $response);

        return $response;
    }

    public function create($parameters)
    {
        // $keycache = getKeyCache($this->pathcache . '.get', $parameters);

        // Get cache
        // $response = $this->cachedRepository->get($keycache);
        // if ($response) {
        //     return $response;
        // }

        // if (isset($_GET['nocache'])) {
        //     $parameters['nocache'] = $_GET['nocache'];
        // }

        $client   = new Client(Config::get('url.inewgen-api'));
        $results  = $client->post('youtube', $parameters);
        $response = json_decode($results, true);

        // Save cache
        // $this->cachedRepository->put($keycache, $response);

        return $response;
    }
}
