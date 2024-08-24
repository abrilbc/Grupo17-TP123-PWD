<?php


class ControlUsuario {
    
    private $colUsuarios;

    public function __construct($usuarios){
   
        $this->colUsuarios = $usuarios;
    }


    public function getColUsuarios(){
        return $this->colUsuarios;
    }

   
    public function setColUsuarios($colUsuarios){
        $this->colUsuarios = $colUsuarios;

    }

    
    public function verificarUsuario($datos){
        $nombre = $datos['usuario'];
        $contrasenia = $datos['contrasenia'];

        $mensaje= "Error: Usuario o contraseña incorrectos.";
        // Verificación de usuario y contraseña
            foreach ($this->getColUsuarios() as $usuario) {
            if ($usuario['usuario'] === $nombre && $usuario['clave'] === $contrasenia) {
                $mensaje = "¡Bienvenidx, ".$nombre."!";
                break;
            }
            }

        return $mensaje;
    }
}


?>