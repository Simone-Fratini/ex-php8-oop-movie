<?php

class Movie
{
    public $title;
    public $director;
    public $genres;
    public $year;
    public $duration;
    public $poster;
    public $rating;

    public function __construct($_title, $_director, $_genres, $_year, $_duration, $_poster, $_rating)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = new Genres($_genres);  // Crea un nuovo oggetto Genres dalla stringa
        $this->year = $_year;
        $this->duration = $_duration;
        $this->poster = $_poster;
        $this->rating = $_rating;
    }

    public function getMovieDuration()
    {
        $time = $this->duration;
        $hours = floor($time / 60);
        $minutes = $time % 60;
        $timeString = $hours . "h e " . $minutes . " minuti";
        return $timeString;
    }

    public function addGenre(Genres $genre)
    {
        $this->genres[] = $genre;
    }

    // Restituisce l'array dei generi
    public function getGenres()
    {
        return $this->genres->genres;
    }
}
