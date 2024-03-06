<?php

require_once __DIR__ . "/Production.php";

Class Movie extends Production 
{
    public $profits;
    public $duration;

    function __construct(
        string $title,
        string $language, 
        float $vote, 
        Genre $genre,
        string $profits,
        string $duration){
            parent::__construct($title, $language, $vote, $genre);
            $this->profits = $profits;
            $this->duration = $duration;
        }
}