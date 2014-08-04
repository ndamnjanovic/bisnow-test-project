<?php

class StoryTableSeeder extends DatabaseSeeder {

    public function run()
    {
        Story::create(
            array(
                'content_id' => 1,
                'title' => 'First Story',
                'content' => 'Content of the first story'
            )
        );

        Story::create(
            array(
                'content_id' => 2,
                'title' => 'Second Story',
                'content' => 'Content of the second story'
            )
        );

        Story::create(
            array(
                'content_id' => 3,
                'title' => 'Third Story',
                'content' => 'Content of the third story'
            )
        );
    }

}