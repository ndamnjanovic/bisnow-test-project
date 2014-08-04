<?php

class Article extends Eloquent {

    protected $connection = 'mysql2';

    protected $table = 'article';

    protected $fillable = array('content_id', 'title', 'content');

}