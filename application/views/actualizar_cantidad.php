<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cantidad</title>
</head>
<body>

<h2>Actualizar Cantidad</h2>

<form action="<?= base_url('Cosas_controller/actualizar_cantidad') ?>" method="post">
    <input type="hidden" name="id" value="<?= $cosa->id ?>">
    <label for="cantidad">Nueva Cantidad:</label>
    <input type="number" min=0 name="nueva_cantidad" value="<?= $cosa->cantidad ?>" required>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
