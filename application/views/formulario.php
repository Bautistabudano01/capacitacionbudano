<form action="<?php echo base_url('Cosas_controller/guardar'); ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" required>

    <button type="submit">Guardar</button>
</form>
