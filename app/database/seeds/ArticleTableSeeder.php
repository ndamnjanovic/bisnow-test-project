<?php

class ArticleTableSeeder extends DatabaseSeeder {

    public function run()
    {

        Article::create(
            array(
                'content_id' => 4,
                'title' => 'First Article',
                'content' => 'Content of the first article'
            )
        );

        Article::create(
            array(
                'content_id' => 5,
                'title' => 'Second Article',
                'content' => 'Content of the second article'
            )
        );

        Article::create(
            array(
                'content_id' => 6,
                'title' => 'Third Article',
                'content' => 'Content of the third article'
            )
        );
    }

}