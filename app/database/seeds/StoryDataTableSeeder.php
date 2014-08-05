<?php

class StoryDataTableSeeder extends DatabaseSeeder {

    public function run()
    {
        StoryData::create(
            array(
                'story_id' => 1,
                'type' => 'tag',
                'value' => 'sports'
            )
        );

        StoryData::create(
            array(
                'story_id' => 2,
                'type' => 'tag',
                'value' => 'television'
            )
        );

        StoryData::create(
            array(
                'story_id' => 3,
                'type' => 'tag',
                'value' => 'music'
            )
        );
    }

}