<?php
$usuarios = UsuariosController::MostrarUsuariosController();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JkDevArg</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="Vista/recursos/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="Vista/recursos/dist/css/adminlte.min.css">
  <script src="Vista/recursos/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include 'modulos/header.php'; ?>
    <?php include 'modulos/menu.php'; ?>
    <?php
    if (isset($_GET['pagina'])) {
      if ($_GET['pagina'] == "usuarios" || $_GET['pagina'] == "roles") {
        include "paginas/" . $_GET['pagina'] . ".php";
      }
    }
    ?>
    <?php include 'modulos/footer.php'; ?>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <script src="Vista/recursos/plugins/jquery/jquery.min.js"></script>
  <script src="Vista/recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Vista/recursos/dist/js/adminlte.min.js"></script>
  <script src="Vista/recursos/dist/js/demo.js"></script>
</body>

</html>