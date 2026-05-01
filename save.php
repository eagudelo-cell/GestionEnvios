<?php
include("db.php");

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$destino = $_POST['destino'];

$conn->query("INSERT INTO envios (codigo, descripcion, destino)
VALUES ('$codigo', '$descripcion', '$destino')");

header("Location: index.php");
?>