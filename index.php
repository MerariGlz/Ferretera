<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>
<!--a href="inicia.php" class="btn btn-danger">Salir</!--a-->
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset();
      } ?>

      <div class="">
        <h1>¡HOLA BIENVENIDOS!</h1>

        <div class="mt-4">
          <!-- Botón "Deudas" -->
          <a href="tablas/deuda.php" class="btn btn-primary btn-lg mr-2">Deudas</a>
          <br></br>
          <!-- Botón "Pagos" -->
          <a href="tablas/pagos.php" class="btn btn-primary btn-lg mr-2">Pagos</a>
          <br></br>
          <a href="tablas/proveedor.php" class="btn btn-primary btn-lg mr-2">Proveedores</a>
          <br></br>
          <!-- Botón "Pagos" -->
          <a href="tablas/agregarproveedor.php" class="btn btn-success btn-lg mr-2">Agregar Proveedor</a>
          <br></br>
          <!-- Botón "Pagos" -->
          <a href="tablas/agregardeuda.php" class="btn btn-success btn-lg mr-2">Agregar Deuda</a>

        </div>
      </div>
      <div hidden class="form-group">
        <p>mahm</p>

      </div>
      <?php include('includes/footer.php'); ?>