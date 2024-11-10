<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= assets() ?>/css/styles.css">
    <link rel="icon" href="<?= assets()?>/fonts/logo.svg" type="image/x-icon">
    <link href="<?= assets()?>/libs/bootstrap-v5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= assets()?>/libs/bootstrap-icons-v1.11.3/bootstrap-icons.min.css">

    <title>Sistema Matricula</title>
</head>

<body class="bg-light d-flex flex-column justify-content-center align-items-center vh-100">

    <header class="m-5">
        Bienvenido al sistema de matriculas I.E. 20165 Nuestra Señora de Lourdes
    </header>

    <div class="background-image" style="background-image: url('<?= assets() ?>/images/backgrounds/school-background.jpg')">
    </div>
    <img class="" src="<?= assets() ?>/fonts/logo.svg" width="110px" alt="">
    <div class="bg-white rounded-3 p-4 m-5 shadow" style="max-width: 400px;">
        <h3 class="h3">Sistema de Matrícula</h3>
        <p>Inicio de Sesión</p>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Documento de Identidad</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="icon-input-form  bi bi-person-vcard-fill"></i> </span>
                <input type="text" class="form-control" placeholder="DNI" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="mb-3">
            <label for="basic-url" class="form-label">Contraseña</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> <i class="icon-input-form bi bi-unlock-fill"></i> </span>
                <input id="password" type="password" class="form-control" placeholder="Passowrd" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>


        <button type="button" class="btn btn-warning"> <i class="bi bi-box-arrow-in-right"></i>Iniciar Sesión</button>

    </div>

    <footer class=" bg-dark text-white text-center py-3 fixed-bottom">
        Power by Practicas Pre Profesionales UNDC - 2024
    </footer>

    <script src="<?= assets()?>/libs/bootstrap-v5.3.3/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>