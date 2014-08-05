<?php

class Story extends Eloquent {

    protected $connection = 'mysql1';

    protected $table = 'stories';

    protected $fillable = array('content_id', 'title', 'content');

    public function content()
    {
        return $this->belongsTo('Content');
    }

    public function storyData()
    {
        return $this->hasOne('StoryData');
    }

}