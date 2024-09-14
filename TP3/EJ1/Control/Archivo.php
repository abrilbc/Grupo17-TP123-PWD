<?php
class Archivo{
    private $archivo;
    private $tamanioMaximo;
    private $dir;

    public function __construct() {
        $this->archivo = null;
        $this->tamanioMaximo = 2097152; // 2MB
        $this->dir = '../../Archivos/';
    }
    public function getArchivo()
    {
        return $this->archivo;
    }

    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    }
    public function getTamanioMaximo()
    {
        return $this->tamanioMaximo;
    }
    public function setTamanioMaximo($tamanioMaximo)
    {
        $this->tamanioMaximo = $tamanioMaximo;
    }
    public function getDir()
    {
        return $this->dir;
    }
    public function setDir($dir)
    {
        $this->dir = $dir;
    }
    public function validar() {
        $mensaje = "";
        if ($this->getArchivo()['archivo']['error'] != UPLOAD_ERR_OK) {
            $mensaje = "No se recibió ningún archivo, o el archivo es demasiado grande para ser procesado por el servidor.";
        }

        $archivo = $this->getArchivo()['archivo'];
        if ($archivo['size'] > $this->getTamanioMaximo()) {
            $mensaje .= "El tamaño del archivo supera los 2MB.<br />";
        }

        // Validar tipo de archivo
        $tipoArchivo = $archivo['type'];
        if ($tipoArchivo != 'application/pdf' && $tipoArchivo != 'application/msword') {
            $mensaje .= "El tipo de archivo no es válido. Solo se permiten archivos .doc o .pdf<br />";
        }

        return $mensaje;
    }

    public function subirArchivo($datos) {
        $this->setArchivo($datos);

        $mensaje = $this->validar();
        if ($mensaje === "") { // Si no hubo errores en la validación
            $archivo = $this->getArchivo()['archivo'];

            if ($archivo["error"] === 0) {
                $rutaDestino = $this->getDir() . $archivo['name'];
                if (!copy($archivo['tmp_name'], $rutaDestino)) {
                    $mensaje .= "ERROR: no se pudo cargar el archivo.<br />";
                } else {
                    $mensaje .= "El archivo " . $archivo["name"] . " se ha copiado con éxito.<br />";
                    $mensaje .= "<a href='".$rutaDestino."'>Ver archivo</a>";
                }
            } else {
                $mensaje .= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal.<br />";
            }
        }

        return $mensaje;
    }
    
}
?>