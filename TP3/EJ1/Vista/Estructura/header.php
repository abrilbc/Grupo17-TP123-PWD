<?php
$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$host = $_SERVER['HTTP_HOST'];
$rutaProyecto = "/Grupo17-TP123-PWD";

$baseURL = $protocolo . $host . $rutaProyecto;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos Prácticos - Grupo 17</title>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo $baseURL . "/TP2/EJ4/Vista/js/validacion.js"; ?>"></script>

    <link rel="stylesheet" href="<?php echo $baseURL . "/Vista/css/style.css"; ?> ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Roboto" class="bg-white">
<header class="bg-white text-center shadow mb-5">
    <div class="container-fluid" >
        <div class="row align-items-center justify-content-around">
            <div class="col-3">
                <nav>
                    <ul class="nav justify-content-around list-unstyled">
                        <li class="nav-item"><a href="<?php echo $baseURL; ?>/TP1" class="nav-link">TP 1</a></li>
                        <li class="nav-item"><a href="<?php echo $baseURL; ?>/TP2" class="nav-link">TP 2</a></li>
                        <li class="nav-item"><a href="<?php echo $baseURL; ?>/TP3" class="nav-link current-nav-link"">TP 3</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-5">
                <a href="<?php echo $baseURL; ?>"><div class="header" style="background: url('<?php echo $baseURL; ?>/Vista/assets/img/banner_tps_white.png') no-repeat center center; background-size: contain; height: 90px;"></div></a>
            </div>
            <div class="col-3">
                <nav>
                    <ul class="nav justify-content-around list-unstyled">
                        <li class="nav-item"><a href="<?php echo $baseURL; ?>/TP4" class="nav-link">TP 4</a></li>
                        <li class="nav-item"><a href="tp5.html" class="nav-link">TP 5</a></li>
                        <li class="nav-item"><a href="tp6.html" class="nav-link">FINAL</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>