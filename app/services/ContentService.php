<?php

class ContentService {

    public function getAllContents()
    {
        return Content::with('story')->get();
    }

}