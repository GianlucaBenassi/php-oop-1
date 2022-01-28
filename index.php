<?php
    include_once __DIR__ . "./classes/Movie.php";

    $movies = [
        new Movie("Spider-Man: No Way Home","Jon Watts",2021,148,10.00),
        new Movie("Matrix Resurrections","Lana Wachowski",2021,148,8.50),
        new Movie("Il Signore degli Anelli: La Compagnia dell'Anello","Peter Jackson",2001,178,10.00),
        new Movie("Dune","Denis Villeneuve",2021,155,12.50),
        new Movie("Space Jam: New Legends","Malcolm D. Lee",2021,115,9.00),
        new Movie("Don't Look Up","Adam McKay",2021,145,8.50)
    ];

    var_dump($movies);

?>