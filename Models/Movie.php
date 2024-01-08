<?php

class Movie 
{
    public $title;
    public $genre;
    public $lang;
    public $vote;

    function __construct($_title, $_genre, $_lang, $_vote)
    {
        $this->title = $_title;
        $this->title = $_genre;
        $this->title = $_title;
        $this->vote = $_vote;
    }

    public function avgVote()
    {
        return array_sum($this->vote) / count($this->vote);
    }
}