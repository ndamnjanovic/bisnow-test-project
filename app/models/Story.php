<?php

class Story extends Eloquent {

    protected $connection = 'mysql1';

    protected $table = 'story';

    protected $fillable = array('content_id', 'title', 'content');

}