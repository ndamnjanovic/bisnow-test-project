<?php

class StoryData extends Eloquent {

    protected $connection = 'mysql1';

    protected $table = 'story_data';

    protected $fillable = array('story_id', 'type', 'value');

    public function story()
    {
        return $this->hasOne('StoryData');
    }

}