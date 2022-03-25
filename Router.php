<?php

namespace MVC;

class Router {

    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn){
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas(){

        session_start();

        $auth = $_SESSION['login'] ?? null;

        $rutas_protegidas = ['/admin', '/propiedades/crear', '/propiedades/actualizar', '/propiedades/eliminar', '/vendedores/crear', '/vendedores/actualizar', '/vendedores/eliminar'];

        $urlActual = $_SERVER['REDIRECT_URL'] === '' ? '/' : $_SERVER['REDIRECT_URL'];
        // $urlActual = $_SERVER['PATH_INFO'] ?? '/'; "REDIRECT_URL"

        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($metodo === 'GET'){
            $fn = $this->rutasGET[$urlActual] ?? null;
        }elseif($metodo === 'POST'){
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        if(in_array($urlActual, $rutas_protegidas) && !$auth){
            header('location: /');
        }

        if($fn){
            // La URL existe y hay una función asociada}
            call_user_func($fn, $this);
        }else{
            echo "ERROR 404";
        }
    }

    // Muestra una vista
    public function render($view, $datos = []) {

        // echo "<pre>";
        // var_dump($view);
        // echo "</pre>";
        // exit;

        foreach($datos as $key => $value){
            $$key = $value;
        }
        ob_start(); // Inicia almacenamiento en memoria
        include_once __DIR__ . "/views$view.php";

        $contenido = ob_get_clean(); // Guardado en memoria

        include_once __DIR__ . "/views/layout.php";
    }
}