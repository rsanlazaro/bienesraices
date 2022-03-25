<main class="contenedor seccion contenido-centrado contenido-pagina">
    <h1 data-cy="heading-login">Iniciar sesión</h1>

    <?php foreach ($errores as $error) : ?>
        <div data-cy="alerta-login" class="alerta error"><?php echo $error;?></div>
    <?php endforeach; ?>

    <form data-cy="formulario-login" class="formulario" method="POST">
        <fieldset>
            <legend>Email y password</legend>
            <label for="email">email</label>
            <input type="email" name="email" placeholder="Tu email" id="email" />
            <label for="password">password</label>
            <input type="password" name="password" placeholder="Tu password" id="password" />
        </fieldset>

        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>