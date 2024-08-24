<?php
class Archivo{
    private $archivo;
    private $tamanioMaximo;
    private $dir;

    public function __construct() {
        $this->archivo = null;
        $this->tamanioMaximo = 2097152; // 2MB
        $this->dir = '../Archivos/';
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
    private function validar($archivo) {
        $mensaje = "";
        if ($this->getArchivo()['error'] !== UPLOAD_ERR_OK) {
            $mensaje = "Error al cargar el archivo.";
        }

        // Validar tamaño del archivo
        if ($this->getArchivo()['size'] > $this->tamanioMaximo) {
            $mensaje = "El tamaño del archivo supera los 2 MB.";
        }

        // Validar tipo de archivo
        if ($this->getArchivo()['type'] !== 'text/plain') {
            $mensaje = "El archivo no es un archivo de texto (.txt).";
        }
        return $mensaje;
    }

    public function subirArchivo($datos) {
        $this->setArchivo($datos['archivo']);
        $mensaje = $this->validar($this->getArchivo());
        if ($mensaje === "") { // Verifica si no hubo errores en la validación
            $archivo = $this->getArchivo();
            if ($archivo["error"] === 0) {
                $rutaDestino = $this->getDir() . basename($archivo['name']);
                if (!copy($archivo['tmp_name'], $rutaDestino)) {
                    $mensaje .= "ERROR: no se pudo cargar el archivo.";
                } else {
                    $mensaje = $this->mostrarContenidoArchivo($rutaDestino);
                }
            } else {
                $mensaje .= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal.";
            }
        } else {
            return $mensaje;
        }

        
    }
    public function mostrarContenidoArchivo($rutaArchivo) {
            echo $rutaArchivo;
            $retorna = "";
            if (file_exists($rutaArchivo)) {
                $contenido = file_get_contents("'".$rutaArchivo."'");
                $retorna = htmlspecialchars($contenido); // Devuelve el contenido del archivo
            } else {
                $retorna = "El archivo no existe en " . $rutaArchivo;
            }
            return $retorna;
        }
    
}
?>