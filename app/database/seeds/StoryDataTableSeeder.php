<?php

class StoryDataTableSeeder extends DatabaseSeeder {

    public function run()
    {
        StoryData::create(
            array(
                'story_id' => 1,
                'type' => 'First Story',
                'value' => 'Content of the first story'
            )
        );

        StoryData::create(
            array(
                'story_id' => 2,
                'type' => 'Second Story',
                'value' => 'Content of the second story'
            )
        );

        StoryData::create(
            array(
                'story_id' => 3,
                'type' => 'Third Story',
                'value' => 'Content of the third story'
            )
        );
    }

}