<?php

class Production
{
    public $title;
    public $language;
    public $vote;


    function __construct(
        string $title,
        string $language,
        float $vote,
    ){
        $this->title = $title;
        $this->language = $language;
        $this->vote = transformVoteToInteger($vote);

    }
 
}

 function transformVoteToInteger(float $num): int {
    // Trasforma il voto in un numero intero da 1 a 10
    return max(1, min(10, round($num) * 2));
}