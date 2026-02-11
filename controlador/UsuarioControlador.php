<?php 
require_once __DIR__ . '/../dao/UsuarioDao.php';

class UsuarioControlador{
    public function procesarLogin($usuario, $clave){
        $usuarioDao = new UsuarioDao();
        $userObj = $usuarioDao->Autenticar($usuario, $clave);
        
     if ($userObj) {
                // Autenticación exitosa 
                $_SESSION['usuario'] = $userObj->usuario;
                header("Location: index.php?accion=menu");
                
            } else {
                // Autenticación fallida
                header("Location: index.php?accion=login&error=1");
            }
            exit();
    }
}
?>