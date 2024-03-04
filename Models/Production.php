<?php

// require_once __DIR__ . "/genre.php";
class Production
{
    public $title;
    public $language;
    public $vote;

    public $genre;

    function __construct(
        string $title,
        string $language,
        float $vote,
        Genre $genre,
    ){
        $this->title = $title;
        $this->language = $language;
        $this->vote = transformVoteToInteger($vote);
        $this->genre = $genre;

    }
 
}

 function transformVoteToInteger(float $num): int {
    // Trasforma il voto in un numero intero da 1 a 10
    return max(1, min(10, round($num) * 2));
}