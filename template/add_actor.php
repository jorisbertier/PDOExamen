<?php
$successMessage = '';
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = "L'Acteur a bien été envoyé en base de données.";
}
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

<?php include_once '../navbar.php' ?>

<div class="text-center w-100 d-flex align-items-center justify-content-center mt-5">
    <div class="mx-auto w-50">
        <?php if (!empty($successMessage)) : ?>
            <small><?php echo $successMessage; ?></small>
        <?php endif; ?>
        <h1 class="mb-5">Ajouter un acteur</h1>
        <form action="../actor_treat.php" method="post">
            <div class="raw d-flex m-4">
                <label class="col-4" for="first-name">Prénom :</label>
                <input class="col-8" type="text" id="first-name" name="first-name"><br>
            </div>
            <div class="raw d-flex m-4">
                <label class="col-4" for="last-name">Nom :</label>
                <input class="col-8" type="text" id="last-name" name="last-name" required><br>
            </div>
            <input class="btn btn-primary m-2" type="submit" value="Ajouter">
        </form>
    </div>
</div>
</body>
</html>