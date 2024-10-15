<?php

require_once '../../../configuracion.php';
require_once '../../controller/AbmPersona.php';
require_once '../../model/Persona.php';

use controller\AbmPersona;

$objAbmPersona = new AbmPersona();
$msj = '';
$msjTipo = '';
$personaAgregada = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = darDatosSubmitted();
    

    $resp = $objAbmPersona->agregarPersona();
    if ($resp === 'Éxito') {
        $msj = 'Persona agregada con éxito.';
        $msjTipo = 'success';
        $persona = new AbmPersona();
        $datosPersona = $persona->buscarPersona($datos['legajo']);
        $personaAgregada = $datosPersona; // Guardamos los datos de la persona 
        $carrera = $personaAgregada->getObjCarrera();
        $rol = $personaAgregada->getObjRol();
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

    <?php if ($personaAgregada): ?>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Datos de la Persona Agregada</h5>
                <p><strong>Legajo:</strong> <?php echo htmlspecialchars($personaAgregada->getLegajo()); ?></p>
                <p><strong>Nombre y Apellido:</strong> <?php echo htmlspecialchars($personaAgregada->getNombre()); ?></p>
                <p><strong>Carrera:</strong> <?php echo htmlspecialchars($carrera->getNombre()); ?></p>
                <p><strong>Rol:</strong> <?php echo htmlspecialchars($rol->getNombre()); ?></p>
            </div>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center">
        <a href="../agregarPersona.php" class="btn btn-secondary btn-lg mt-3">Volver</a>
    </div>
</div>

<?php
include_once '../../../Vista/Estructura/footer.php';
?>