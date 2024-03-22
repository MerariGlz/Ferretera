<?php

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "UPDATE deuda SET estatus = 0 WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }

    $_SESSION['message'] = 'PAGADO!!!';
    $_SESSION['message_type'] = 'success';
    header('Location: tablas/deuda.php');
}
