<?php

require_once __DIR__ . "/Models/Production.php";
require_once __DIR__ . "/db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center m-5">PHP OOP</h1>
        <table class="table table-dark table-hover">
            <thead>
                <th scope="col">Title</th>
                <th scope="col">Language</th>
                <th scope="col">Vote</th>
                <th scope="col">Genre</th>
                <th scope="col">Description</th>
            </thead>
            <tbody>
                <?php foreach($productions as $production): ?>
                <tr>
                <td>
                    <?= $production->title ?>
                </td>
                <td>
                    <?= $production->language ?>
                </td>
                <td>
                    <?= $production->vote ?>
                </td>
                <td>
                    <?= $production->genre->genre ?>
                </td>
                <td>
                    <?= $production->genre->description ?>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>