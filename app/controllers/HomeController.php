<?php

class HomeController extends BaseController {

    private $contentService;

    public function __construct(ContentService $contentService)
    {
        $this->contentService = $contentService;
    }


    public function index()
    {
        $contents = $this->contentService->getAllContents();

        return View::make('index', array(
            'contents' => $contents
        ));
    }

}
