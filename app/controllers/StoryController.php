<?php

class StoryController extends BaseController {

    private $contentService;

    public function __construct(ContentService $contentService)
    {
        $this->contentService = $contentService;
    }

   /**
    *
    * Returns form used for submiting new story to application
    *
    */
    public function create()
    {
        $this->layout->content = View::make('newStoryForm');
    }

    /**
    *
    * Stores new story to database
    *
    */
    public function store()
    {

        $inputs = Input::only('title', 'content', 'storyType', 'storyTypeValue');
        $result = $this->contentService
                                ->storeStory($inputs);
        $errorOcurred = is_a($result, 'Illuminate\Validation\Validator');

        if($errorOcurred){
            return Redirect::to('/story/create')
                            ->withErrors($result)
                            ->withInput();
        } else {
            $contents = $this->contentService->getAllContents();

            return Redirect::to('/')->with('message', 'Story succesfully saved');
        }
    }

}