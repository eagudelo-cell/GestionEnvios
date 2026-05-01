<?php
include("db.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM envios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<link rel="stylesheet" href="styles.css">

<div class="container">
<h2>Editar Envío</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Código:
    <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>">

    Descripción:
    <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>">

    Destino:
    <input type="text" name="destino" value="<?php echo $row['destino']; ?>">

    <button type="submit">Actualizar</button>
</form>
</div>