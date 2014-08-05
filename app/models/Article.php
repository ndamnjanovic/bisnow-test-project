<?php

class Article extends Eloquent {

    protected $connection = 'mysql2';

    protected $table = 'articles';

    protected $fillable = array('content_id', 'title', 'content');

    public function content()
    {
        return $this->belongsTo('Content');
    }

}