<?php
$conn = new mysqli("mysql-edwinagudelo.alwaysdata.net", "root", "", "gestion_envios");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>