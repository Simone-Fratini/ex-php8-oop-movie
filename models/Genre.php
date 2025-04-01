<?php

class Genres
{

    public $genres = [];

    public function __construct($_genre)
    {
        $genresArray = explode(',', $_genre);

        foreach ($genresArray as $genra) {
            $this->genres[] = $genra;
        }
    }
}
