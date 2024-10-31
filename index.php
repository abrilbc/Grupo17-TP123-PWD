<?php
include_once 'Vista/Estructura/header.php';
?>
<div class="container my-5">
    <div class="row text-center mb-4">
        <h2 class="text-success">Trabajos Pr&aacute;cticos</h2>
        <p class="text-muted">Seleccionar uno de los trabajos pr&aacute;cticos para acceder a m&aacute;s detalles</p>
    </div>
    <div class="row d-flex justify-content-center">
        <?php 
        $trabajos = [
            ["Trabajo Pr&aacute;ctico 1", "PHP - HTML <br> Formularios y validación con JavaScript", "TP1/"],
            ["Trabajo Pr&aacute;ctico 2", "Validación de formularios usando alguna librería o framework JavaScript (JQuery, etc)", "TP2/"],
            ["Trabajo Pr&aacute;ctico 3", "Subir Archivos al Servidor", "TP3/"],
            ["Trabajo Pr&aacute;ctico 4", "PHP - MySQL PDO", "TP4/"],
            ["Trabajo Pr&aacute;ctico 5", "Autenticación/Seguridad App", "#"],
            ["TP FINAL", "Proyecto final", "#"],
            ["LIBRERÍAS", "Investigación de Librerías: MeDoo - Laminas/Hydrator", "https://github.com/shodrig0/TP-Librerias-ClasesUtiles", true]
        ];

        foreach ($trabajos as $trabajo) {
            $tipoEnlace = isset($trabajo[3]) && $trabajo[3] ? 'target="_blank"' : '';
            echo '
            <div class="col-md-5 col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-header bg-success text-white text-center">
                        <h5 class="my-1">'.$trabajo[0].'</h5>
                    </div>
                    <div class="card-body rounded text-center bg-white">
                        <p class="card-text" style="font-size: 16px;">'.$trabajo[1].'</p>
                        <a href="'.$trabajo[2].'" '.$tipoEnlace.' class="btn btn-outline-success w-75 fs-6 fw-bold">IR</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>
<?php
include_once 'Vista/Estructura/footer.php';
?>