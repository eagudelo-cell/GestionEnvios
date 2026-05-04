<?php
$conn = new mysqli(
    "mysql-edwinagudelo.alwaysdata.net",
    "edwinagudelo",
    "clase1234",
    "edwinagudelo_gestioncompartida1"
);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>