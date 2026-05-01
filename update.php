<?php
include("db.php");

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$destino = $_POST['destino'];

$conn->query("UPDATE envios 
SET codigo='$codigo', descripcion='$descripcion', destino='$destino'
WHERE id=$id");

header("Location: index.php");
?>