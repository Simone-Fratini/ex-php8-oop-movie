<?php

class Movie
{
    public $title;
    public $director;
    public $genra;
    public $year;
    public $duration;
    public $poster;
    public $rating;

    public function __construct($_title, $_director, Genre $_genra, $_year, $_duration, $_poster, $_rating)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genra = $_genra;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->poster = $_poster;
        $this->rating = $_rating;
    }
}
