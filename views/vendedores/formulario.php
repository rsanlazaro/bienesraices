<fieldset>
    <legend>Información general</legend>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre" value="<?php echo sanitizar($vendedor->nombre); ?>">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido" value="<?php echo sanitizar($vendedor->apellido); ?>">
    <label for="telefono">Telefóno:</label>
    <input type="number" id="telefono" name="vendedor[telefono]" placeholder="Teléfono" value="<?php echo sanitizar($vendedor->telefono); ?>">
</fieldset>