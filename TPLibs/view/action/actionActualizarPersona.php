<?php

require_once '../../../configuracion.php';
require_once '../../controller/AbmPersona.php';
require_once '../../model/Persona.php';

use controller\AbmPersona;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['legajo'])) {
    $objAbmPersona = new AbmPersona();
    $resultado = $objAbmPersona->modificarPersona();
    if ($resultado === 'Éxito') {
        $msj = 'Persona actualizada con éxito.';
        $msjTipo = 'success';
    } else {
        $msj = 'Error al actualizar persona.';
        $msjTipo = 'danger';
    }
}

include_once '../Estructura/header.php';
?>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Actualizar Persona</h1>
    
    <?php if (isset($msj)): ?>
        <div class="alert alert-<?php echo $msjTipo; ?> text-center" role="alert">
            <?php echo htmlspecialchars($msj); ?>
        </div>
    <?php endif; ?>
    
    <div class="d-flex justify-content-center">
        <a href="../buscarPersona.php" class="btn btn-secondary btn-lg mt-3">Volver</a>
    </div>
</div>

</html>