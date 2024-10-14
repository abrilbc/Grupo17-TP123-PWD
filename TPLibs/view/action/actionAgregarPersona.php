<?php

require_once '../../../configuracion.php';
require_once '../../controller/AbmPersona.php';
require_once '../../model/Persona.php';

use controller\AbmPersona;

$objAbmPersona = new AbmPersona();
$msj = '';
$msjTipo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = darDatosSubmitted();

    $resp = $objAbmPersona->agregarPersona();
    if ($resp === 'Éxito') {
        $msj = 'Persona agregada con éxito.';
        $msjTipo = 'success';
    } elseif ($resp === 'Error') {
        $msj = 'Ya existe alguien con este legajo.';
        $msjTipo = 'danger';
    } else {
        $msj = 'Error al agregar persona.';
        $msjTipo = 'danger';
    }
}

include_once '../Estructura/header.php';
?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Agregar Persona</h1>

    <?php if (!empty($msj)): ?>
        <div class="alert alert-<?php echo $msjTipo; ?> text-center" role="alert">
            <?php echo htmlspecialchars($msj); ?>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center">
        <a href="../agregarPersona.php" class="btn btn-secondary btn-lg mt-3">Volver</a>
    </div>
</div>
