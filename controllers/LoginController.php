<?php

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginController
{
    public static function login(Router $router)
    {
        $errores = Admin::getErrores();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);
            $errores = $auth->validar();

            if (empty($errores)) {
                $resultado = $auth->existeUsuario();

                if ($resultado->num_rows) {
                    $autenticado = $auth->comprobarPassword($resultado);
                    if ($autenticado) {
                        $auth->autenticar();
                    } else {
                        $errores[] = "El password es incorrecto";
                    }
                } else {
                    $errores[] = "El usuario no existe";
                }
            }
        }

        $view = $_SERVER['REQUEST_URI'];
        $router->render($view, [
            'errores' => $errores
        ]);
    }
    public static function logout()
    {
        session_start();
        $_SESSION = [];
        header('location: /');
    }
}
