<?php 

include_once '../../../Vista/Estructura/header.php';
include_once '../../../configuracion.php';

use controller\AbmRol;

$datos = darDatosSubmitted();

$objAbmRol = new AbmRol();
$msj = '';
$rolEliminado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($datos['id'])) {
    $rolEliminado = $objAbmRol->buscarRol($datos['id']);

    if ($rolEliminado) {
        $resp = $objAbmRol->eliminarRol();

        if ($resp === 'Éxito') {
            $msj = 'Rol eliminado con éxito.';
            $msjTipo = 'success';
        } else {
            $msj = 'Hubo un error eliminando el Rol seleccionado.';
            $msjTipo = 'danger';
        }
    } else {
        $msj = 'No se encontró el rol a eliminar.';
        $msjTipo = 'warning';
    }
}

?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Eliminar Rol</h1>

    <?php if (!empty($msj)): ?>
        <div class="alert alert-<?php echo $msjTipo; ?> text-center" role="alert">
            <?php echo htmlspecialchars($msj); ?>
        </div>
    <?php endif; ?>

    <?php if ($msjTipo === 'success' && $rolEliminado): ?>
        <div class="alert alert-info text-center">
            <strong>Rol eliminado:</strong> 
            <?php echo 'ID: ' . htmlspecialchars($rolEliminado->getId()) . ', Nombre: ' . htmlspecialchars($rolEliminado->getNombre()); ?>
        </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center">
        <a href="../eliminarRol.php" class="btn btn-secondary btn-lg mt-3">Volver</a>
    </div>
</div>

<?php
include_once '../../../Vista/Estructura/footer.php';
?>
