<?php

require_once __DIR__ . "/../Models/genre.php";

$onepiece = new Production(
    'One piece', 
    'Japanese', 
    4.9,
    new genre('adventure', 'One Piece is a renowned Japanese anime and manga created by Eiichiro Oda. The story follows the adventures of Monkey D. Luffy, a young pirate with the goal of becoming the Pirate King and finding the legendary treasure known as the One Piece. Luffy leads an eclectic crew of pirates known as the Straw Hat Pirates, each with unique abilities and personal goals.')

);

$bojackHorseman = new Production(
    'Bojack Horseman', 
    'English', 
    4.7,
    new genre('dramedy', 'BoJack Horseman is an animated series that follows the faded Hollywood star BoJack Horseman as he grapples with personal demons, relationships, and the challenges of a post-fame life. Through dark humor and thoughtful storytelling, the show explores themes of celebrity culture, mental health, and the pursuit of happiness. With a unique blend of wit and emotional depth, BoJack Horseman stands out as a poignant and unconventional animated series.')
);

$productions = [
    $onepiece,
    $bojackHorseman,
];


