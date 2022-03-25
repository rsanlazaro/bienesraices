<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController
{
    public static function index(Router $router)
    {
        $propiedades = Propiedad::get(3);
        $inicio = true;
        $router->render('/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }
    public static function nosotros(Router $router)
    {
        $view = $_SERVER['REQUEST_URI'];
        $router->render($view);
    }
    public static function propiedades(Router $router)
    {
        $propiedades = Propiedad::all();
        $view = $_SERVER['PATH_INFO'];
        $router->render($view, [
            'propiedades' => $propiedades
        ]);
    }
    public static function propiedad(Router $router)
    {
        $id = validarORedireccionar('/');
        $propiedad = Propiedad::find($id);
        if (is_null($propiedad)) {
            header('location: /');
        }
        $view = $_SERVER['PATH_INFO'];
        $router->render($view, [
            'propiedad' => $propiedad
        ]);
    }
    public static function blog(Router $router)
    {
        $view = $_SERVER['PATH_INFO'];
        $router->render($view);
    }
    public static function entrada(Router $router)
    {
        $view = $_SERVER['PATH_INFO'];
        $router->render($view);
    }
    public static function contacto(Router $router)
    {
        $mensaje = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $respuestas = $_POST['contacto'];

            // Configurar SMTP y PHPMailer
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '2502e3cf702101';
            $mail->Password = 'bf36626d7e9fad';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Contenido del email
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'Bienesraices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html>';
            $contenido .= '<p> Tienes un nuevo mensaje: </p>';
            $contenido .= '<p> Nombre: ' . $respuestas['nombre'] . '</p>';

            if ($respuestas['contacto'] == 'telefono') {
                $contenido .= '<p> Eligió ser contactado por teléfono </p>';
                $contenido .= '<p> Teléfono: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p> Fecha: ' . $respuestas['fecha'] . '</p>';
                $contenido .= '<p> Hora: ' . $respuestas['hora'] . '</p>';
            } elseif ($respuestas['contacto'] == 'email') {
                $contenido .= '<p> Eligió ser contactado por email </p>';
                $contenido .= '<p> E-mail: ' . $respuestas['email'] . '</p>';
            }
            $contenido .= '<p> Mensaje: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p> Vende o compra: ' . $respuestas['tipo'] . '</p>';
            $contenido .= '<p> Precio o presupuesto: $' . $respuestas['precio'] . '</p>';
            $contenido .= '</html>';
            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';

            // Enviar el email
            if ($mail->send()) {
                $mensaje = "Mensaje enviado correctamente";
            } else {
                $mensaje = "El mensaje no se pudo enviar...";
            }
        }
        $view = $_SERVER['PATH_INFO'];
        $router->render($view, [
            'mensaje' => $mensaje
        ]);
    }
}
