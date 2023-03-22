<?php

include_once __DIR__ . "/../models/movie.php";
include_once __DIR__ . "/../models/genre.php";


// $comedy = new Genre("Comedy");
// $science_fiction = new Genre("Science fiction");
// $adventure = new Genre("Adventure");



//   objects array
    $array_movies = [
        new Movie ("Ritorno al futuro", 1985, "comedy" ),
        // [$comedy, $science_fiction]
        new Movie ("Avatar", 2009, "science_fiction" )
        // [$adventure, $science_fiction]
    ];