
    <?php
    include_once('../Vista/Estructura/header.php');
    ?>
    <main class="container">
        <div class="card col-12 text-center shadow">
            <div class="container text-center">
                <div class="col d-flex text-center flex-column align-items-center justify-content-center p-5 ">

                    <form onsubmit="return validar()" action="./Action/actionNuevoAuto.php" class="d-flex flex-column gap-3" style="width:80%" method="POST" id="miForm">
                        <h3>Agregar un auto nuevo</h3>

                        <input class="form-control p-3" type="text" id="Patente" name="Patente" placeholder="Patente (ej. ADC 153)">
                        <span id="autoPatente"></span>

                        <input class="form-control p-3" type="text" id="Marca" name="Marca" placeholder="Marca (ej. Honda)">
                        <span id="autoMarca"></span>

                        <input class="form-control p-3" type="text" id="Modelo" name="Modelo" placeholder="Año">
                        <span id="autoModelo"></span>

                        <input class="form-control p-3" type="text" id="DniDuenio" name="DniDuenio" placeholder="12345678">
                        <span id="dniPersona"></span>
                        <div class="d-flex flex-column align-items-center">
                            <input class="btn btn-success p-2 fs-5 m-2 w-50" type="submit" style="width:20%" value="Agregar">
                            <a onclick="history.back()" class="btn btn-secondary fs-5 w-50 m-2">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="./Js/jquery-v3_7_1.js"></script>
    <script src="./Js/validacionNuevoAuto.js"></script>
</body>

</html>