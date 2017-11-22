<?php

interface YoutubeRepositoryInterface
{

    public function get($parameters);
    
    public function create($parameters);

    public function detail($parameters);
}
