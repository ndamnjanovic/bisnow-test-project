<?php

class HomeController extends BaseController {

    private $contentService;

    public function __construct(ContentService $contentService)
    {
        $this->contentService = $contentService;
    }

    /**
    *
    * Index action displays listing of all available contents
    * (both articles and stories)
    *
    * @return View
    */
    public function index()
    {
        $contents = $this->contentService->getAllContents();


        $this->layout->content = View::make('index', array(
            'contents' => $contents
        ));

    }


}
