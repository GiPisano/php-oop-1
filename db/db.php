<?php

require_once __DIR__ . "/../Models/Genre.php";
require_once __DIR__ . "/../Models/Movie.php";
require_once __DIR__ . "/../Models/TVSerie.php";


$onepiece = new Production(
    'One piece', 
    'Japanese', 
    4.9,
    new genre(['Anime', 'fantasy'], 'One Piece is a renowned Japanese anime and manga created by Eiichiro Oda. The story follows the adventures of Monkey D. Luffy, a young pirate with the goal of becoming the Pirate King and finding the legendary treasure known as the One Piece. Luffy leads an eclectic crew of pirates known as the Straw Hat Pirates, each with unique abilities and personal goals.'),
);

$bojackHorseman = new Production(
    'Bojack Horseman', 
    'English', 
    4.7,
    new genre(['Tragicomedy'], 'BoJack Horseman is an animated series that follows the faded Hollywood star BoJack Horseman as he grapples with personal demons, relationships, and the challenges of a post-fame life. Through dark humor and thoughtful storytelling, the show explores themes of celebrity culture, mental health, and the pursuit of happiness. With a unique blend of wit and emotional depth, BoJack Horseman stands out as a poignant and unconventional animated series.'),
);

$interstellar = new Movie(
    'Interstellar',
    'English',
    3.87,
    new genre(['Movie'], 'Interstellar is an epic science fiction film directed by Christopher Nolan, following the journey of a group of astronauts led by Cooper (Matthew McConaughey) in search of a new habitable planet to save humanity. The plot weaves elements of space travel, relativity theory, and interdimensional exploration, providing a thrilling and emotional glimpse into the human and scientific challenges tied to Earth\'s fate. With a blend of stunning space visuals and a captivating soundtrack, the film offers a fascinating perspective on the possibilities of interstellar travel.'),
    '773,8 millions of dollars',
    '2h 49m'
);

$thebear = new TVSerie(
    'The Bear',
    'English',
    5.5,
    new genre(['SerieTV'], 'A young chef from the refined world of haute cuisine returns to Chicago to take over his family\'s Italian sandwich shop after the suicide of his older brother. The brother\'s tragic demise leaves behind debts, a dilapidated kitchen, and an undisciplined staff. The narrative explores themes of personal growth, rediscovering family roots, and the challenge of reviving a declining culinary venture.'),
   2,
);



$productions = [
    $onepiece,
    $bojackHorseman,
    $interstellar,
    $thebear
];

