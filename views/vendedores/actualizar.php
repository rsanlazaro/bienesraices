<main class="contenedor seccion">
    <h1>Actualizar Vendedor(a)</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario">

        <?php include 'formulario.php'; ?>

        <input type="submit" value="Guardar cambios" class="boton boton-verde">

    </form>

    <a href="/admin" class="boton boton-verde">Volver</a>

</main>