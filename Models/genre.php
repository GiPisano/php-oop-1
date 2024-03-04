
<?php

class genre
{
    public $genre;
    public $description;


    function __construct(
        string $genre,
        string $description,
    ){
        $this->genre = $genre;
        $this->description = $description;
    }
 
}
