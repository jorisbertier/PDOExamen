<?php
include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\MovieRepository;

$movieRepository = new MovieRepository();

if(isset ($_POST['title-search'])) {
    $title = $_POST['title-search'];
    $movies = $movieRepository->findByTitle([
        'title' => $title,
        ]);

        // foreach($musics as $music){
        //     echo $music['title'];
        //     echo '<br>';
        // }
    // header('location: /template/album.php?success=1');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Random</title>
</head>
<body>

<?php include_once 'navbar.php' ?>

<h1>Tous les albums</h1>
<ul>
<?php foreach ($movies as $movie) : ?>
    <li><?= $movie['title'] ?></li>
<?php endforeach ?>
</ul>
</body>
</html>
