<?php

require_once __DIR__ . "/Production.php";
class Genre
{
    public $genres;
    public $description;


    function __construct(
        array $genres,
        string $description,
    ){
        $this->genres = $genres;
        $this->description = $description;
    }
 
}
