<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\MovieRepository;
use App\Repository\ActorRepository;

$movies = new MovieRepository;
$allMovies = $movies->findAll();

$actors = new ActorRepository;
$allActors = $actors->findAll();
// var_dump($allMovies);

// foreach($allMovies as $movie) {
//         echo $movie['title'];
//         echo '<br>';
// }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajouter un film</title>
</head>
<body>

<?php include_once 'navbar.php' ?>

<div class="text-center w-100 d-flex align-items-center justify-content-center">
    <div class="mx-auto w-75">
        <h1 class="mb-5">Liste des films</h1>
        <?php foreach ($allMovies as $movie) : ?>
            <div class="nav-item"> <?= $movie['title'] ?> </div>
        <?php endforeach ?> 
    </div>
</div>
<div class="text-center w-100 d-flex align-items-center justify-content-center">
    <div class="mx-auto w-75">
        <h1 class="mb-5">Liste des Acteurs</h1>
        <?php foreach ($allActors as $actor) : ?>
            <div class="nav-item"> <?= $actor['first_name'] ?> <?= $actor['last_name'] ?> </div>
        <?php endforeach ?> 
    </div>
</div>
</body>
</html>
