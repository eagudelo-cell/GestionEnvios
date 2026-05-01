<link rel="stylesheet" href="styles.css">

<div class="container">
<h2>Nuevo Envío</h2>

<form action="save.php" method="POST">
    Código:
    <input type="text" name="codigo" required>

    Descripción:
    <input type="text" name="descripcion">

    Destino:
    <input type="text" name="destino" required>

    <button type="submit">Guardar</button>
</form>
</div>