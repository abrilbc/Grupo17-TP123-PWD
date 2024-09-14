 <?php
    class Archivo{
        private $dir;

        public function __construct() {
            $this->dir = "../../Archivos/";
        }
        public function getDir()
        {
                return $this->dir;
        }
        public function setDir($dir)
        {
                $this->dir = $dir;
        }

        public function validarArchivo($datosAr) {
            $archivo = $datosAr['archivo'];
            $mensaje = "";
            if ($archivo['error'] !== UPLOAD_ERR_OK) {
                $mensaje .= "Error al cargar el archivo.";
            }

            if ($archivo['size'] > 2097152) {
                $mensaje .= "El tamaño del archivo supera los 2 MB.";
            }

            if ($archivo['type'] !== 'text/plain') {
                $mensaje .= "El archivo no es un archivo de texto (.txt).";
            }
            return $mensaje;
            }


            public function subirArchivo($datos) {
                $mensaje = $this->validarArchivo($datos);
            
                if ($mensaje === "") {
                    $archivo = $datos['archivo'];
                    $rutaTemporal = $archivo['tmp_name'];
                    
                    if ($archivo['error'] === UPLOAD_ERR_OK) {
                        $rutaDestino = $this->getDir() . $archivo['name'];
                        
                        if (copy($rutaTemporal, $rutaDestino)) {
                            // Si la copia es exitosa, devuelve la ruta temp
                            return $rutaTemporal;
                        } else {
                            $mensaje .= "ERROR: no se pudo cargar el archivo.";
                        }
                    } else {
                        $mensaje .= "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal.";
                    }
                }
            
                return $mensaje;
            }
    }
?>