<?php 
require_once __DIR__ . '/../dao/UsuarioDao.php';

class UsuarioControlador{
    public function procesarLogin($usuario, $clave){
        $usuarioDao = new UsuarioDao();
        $userObj = $usuarioDao->Autenticar($usuario, $clave);
        
     if ($userObj) {
                // Autenticación exitosa 
                $_SESSION['idusuario'] = $userObj->id;
                $_SESSION['usuario'] = $userObj-> usuario;
                $_SESSION['success'] = "Bienvenido a HealthCore";
                header("Location: index.php?accion=inicio");

                
            } else {
                // Autenticación fallida
                $_SESSION['error'] = "Usuario o contraseña incorrectos";
                header("Location: index.php?accion=login");
            }
            exit();
    }
}
?>