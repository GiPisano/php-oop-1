<?php

require_once __DIR__ . "/Production.php";

Class TVSerie extends Production 
{
    public $season;

    function __construct(
        string $title,
        string $language, 
        float $vote, 
        Genre $genre,
        int $seasons,){
            parent::__construct($title, $language, $vote, $genre);
            $this->season = $seasons;
        }
}