<?php include("db.php"); ?>

<link rel="stylesheet" href="styles.css">

<div class="container">
<h1>Lista de Envíos</h1>

<a href="create.php">Nuevo envío</a>

<table>
<tr>
    <th>ID</th>
    <th>Código</th>
    <th>Descripción</th>
    <th>Destino</th>
    <th>Acciones</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM envios");

while($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['codigo']; ?></td>
    <td><?php echo $row['descripcion']; ?></td>
    <td><?php echo $row['destino']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>
</div>
