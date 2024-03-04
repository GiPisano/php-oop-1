<?php

require_once __DIR__ . "/Models/Production.php";

$onepiece = new Production('One piece', 'Japanese', '4.9');
$bojackHorseman = new Production('Bojack Horseman', 'English', '4.7');

var_dump($onepiece, $bojackHorseman);