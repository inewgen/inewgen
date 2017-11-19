<?php
class YoutubeController extends BaseController
{
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

        $script = $theme->scopeWithLayout('youtube.jscript_index', $view)->content();
        $theme->asset()->container('inline_script')->usePath()->writeContent('custom-inline-script', $script);

        return $theme->scopeWithLayout('youtube.index', $view)->render();
    }
}
