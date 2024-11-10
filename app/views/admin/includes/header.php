<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Matricula - 20165</title>
    <link rel="icon" href="<?= assets() ?>/fonts/logo-20165.ico" type="image/x-icon">

    <?php include "imports.php"; ?>
</head>

<body>
    <div class="d-flex">
        <!-- Menú lateral -->

        <div class="sidebar-container">

            <input id="active-expand" type="checkbox" checked>

            <?php include "navbar.php" ?>

        </div>

        <!-- Contenido principal -->
        <div class="main-content-right flex-grow-1 p-3">
            <img class="image-background-main" src="<?= assets() ?>/images/backgrounds/school-background.jpg" alt="">
            
            <h2><?= $data['title']?></h2>
            <p> <?= $data['sub-title']?></p>