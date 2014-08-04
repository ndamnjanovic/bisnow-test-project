<?php

class Content extends Eloquent {

    protected $connection = 'mysql1';

    protected $table = 'content';

    protected $fillable = array('type', 'date');

    public function article()
    {
        return $this->hasOne('Article');
    }

    public function story()
    {
        return $this->hasOne('Story');
    }

}