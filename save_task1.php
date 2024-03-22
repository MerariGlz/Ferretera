<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $query = "INSERT INTO proveedor (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Proveedor agregado';
  $_SESSION['message_type'] = 'success';
  header('Location: tablas/proveedor.php');
}
