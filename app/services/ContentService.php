<?php

class ContentService {

    /**
     * Rules for validating Content
     *
     * @var array
     */
    private $validateContentRules = array(
        'type' => 'required'
    );

    /**
     * Rules for validating Story
     *
     * @var array
     */
    private $validateStoryRules = array(
        'title' => 'required',
        'content' => 'required'
    );

    /**
     * Rules for validating StoryData
     *
     * @var array
     */
    private $validateStoryDataRules = array(
        'type' => 'required',
        'value' => 'required'
    );

    /**
    *
    * Returns both type of contents (articles and stories)
    *
    */
    public function getAllContents()
    {
        return Content::with('story', 'article')->get();
    }

    /**
    *
    * Stores new story to database
    *
    */
    public function storeStory($inputs)
    {
        $storyInputs = array('title' => $inputs['title'], 'content' => $inputs['content']);
        $storyDataInputs = array('type' => $inputs['storyType'], 'value' => $inputs['storyTypeValue']);

        $validation = $this->validateInput($storyInputs, $storyDataInputs);

        if(is_a($validation, 'Illuminate\Validation\Validator')) {
            return $validation;
        }

        $content = new Content;
        $content->type = 'story';
        $content->save();

        $story = new Story($storyInputs);
        $story = $content->story()->save($story);

        $storyData = new StoryData($storyDataInputs);
        $storyData = $story->storyData()->save($storyData);

        return $storyData;
    }

    private function validateInput($storyInputs, $storyDataInputs)
    {
        $storyValidator = Validator::make(
            $storyInputs,
            $this->validateStoryRules
        );

        $storyDataValidator = Validator::make(
            $storyDataInputs,
            $this->validateStoryDataRules
        );

        if($storyValidator->fails()) {
            return $storyValidator;
        }
        if($storyDataValidator->fails()) {
            return $storyDataValidator;
        }

        return true;
    }

}