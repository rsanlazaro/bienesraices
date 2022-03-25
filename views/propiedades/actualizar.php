<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" enctype="multipart/form-data">
        <?php include 'formulario.php' ?>

        <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">

    </form>

    <a href="/admin" class="boton boton-verde">Volver</a>

</main>