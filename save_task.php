<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $idProveedor = $_POST['proveedor'];
  $deuda = $_POST['deuda'];
  $fechadeuda = $_POST['fechadeuda'];
  $query = "INSERT INTO deuda (idProveedor, deuda, fechadeuda) VALUES ('$idProveedor', '$deuda', '$fechadeuda')";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Deuda agregada';
  $_SESSION['message_type'] = 'success';
  header('Location: tablas/deuda.php');
}
