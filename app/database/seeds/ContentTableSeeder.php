<?php

class ContentTableSeeder extends DatabaseSeeder {

    public function run()
    {
        Content::create(
            array(
                'type' => 'story',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );

        Content::create(
            array(
                'type' => 'story',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );

        Content::create(
            array(
                'type' => 'story',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );

        Content::create(
            array(
                'type' => 'article',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );

        Content::create(
            array(
                'type' => 'article',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );

        Content::create(
            array(
                'type' => 'article',
                'date' => Carbon\Carbon::now()->toDateTimeString()
            )
        );
    }

}