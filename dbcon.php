<?php

// Variables de conexión a la base de datos principal (para escritura)
$primaryServer = "clientes.cr0ukcks4si5.us-east-2.rds.amazonaws.com"; // Endpoint principal
$username = "admin";
$password = "karen123";
$database = "clientes";

// Variables de conexión a la réplica (para lectura)
$replicaServer = "clientes-replica.cr0ukcks4si5.us-east-2.rds.amazonaws.com"; // Endpoint de réplica

// Conexión principal (escrituras)
$con = new mysqli($primaryServer, $username, $password, $database);
if ($con->connect_error) {
    die("Conexión fallida al servidor principal: " . $con->connect_error);
}

// Conexión a la réplica (lecturas)
$replicaCon = new mysqli($replicaServer, $username, $password, $database);
if ($replicaCon->connect_error) {
    die("Conexión fallida al servidor réplica: " . $replicaCon->connect_error);
}

// Cerrar conexiones al finalizar 
//$con->close();
//$replicaCon->close();

?>

