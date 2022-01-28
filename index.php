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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Movie list</h1>

    <div class="row">

        <?php foreach($movies as $movie) {?>
            <div class="card">
                <h2><?php echo $movie->getTitle() ?></h2>
                <h3>Direttore: <?php echo $movie->getDirector() ?></h3>
                <span>Anno: <?php echo $movie->getYear() ?></span>
                <span>Durata: <?php echo $movie->getDuration() ?></span>
                <span>Prezzo: <?php echo $movie->getPrice() ?>&euro;</span>
                <span>Prezzo scontato per minori di 14: <?php echo $movie->getDiscount() ?>&euro;</span>
            </div>
        <?php } ?>

    </div>


</body>
</html>