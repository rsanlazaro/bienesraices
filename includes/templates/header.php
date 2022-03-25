<?php 

if(!isset($_SESSION)){
  session_start();
} 

$auth = $_SESSION['login'] ?? null;


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes raí</title>
    <!-- <link rel="preload" href="/public/build/css/app.css" as="style"> -->
    <link rel="preload" href="/public/build/js/bundle.min.js" as="script">
    <link rel="stylesheet" href="/public/build/css/app.css" />
  </head>
  <body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>" >
      <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/" class="logo">
            <img src="/public/build/img/logo.svg" alt="Logotipo de bienes raíces" />
          </a>
          <div class="mobile-menu">
            <img src="/public/build/img/barras.svg" alt="burger">
          </div>
          <div class="derecha">
            <nav class="navegacion">
              <a href="/nosotros">Nosotros</a>
              <a href="/anuncios">Anuncios</a>
              <a href="/blog">Blog</a>
              <a href="/contacto">Contacto</a>
              <a href="/<?php echo $auth ? 'admin' : 'login'; ?>">
                <?php echo $auth ? "Administrador" : "Iniciar sesión";?>
              </a>
            </nav>
            <img src="/public/build/img/dark-mode.svg" alt="dark mode" class="dark-mode-boton">
          </div>
        </div>
        <?php echo $inicio ? '<h1>Venta de casas y departamentos exclusivos de lujo</h1>' : ''; ?>
      </div>
    </header>