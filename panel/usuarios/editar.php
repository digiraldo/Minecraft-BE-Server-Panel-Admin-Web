<?php
include "../includes/scripts.php";

require __DIR__.'/usuarios.php';

    if (!isset($_GET['name'])) {
        include "../includes/no_encontrado.php";
        exit;
    }
$usuarioName = $_GET['name'];
$usuarioN = obtenerUsuarioPorName($usuarioName);
//echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

    if (!$usuarioN) {
        include "../includes/no_encontrado.php";
        exit;
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>

  </head>
  <body>


  <div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-edit"></i> Usuario: <b><?php echo $usuarioN['name'] ?></b></h5>
        <div class="section">
        <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
        <tbody>
            <tr>
                <th scope="col">Nombre:</th>
                <td><?php echo $usuarioN['name'] ?></td>
            </tr>
            <tr>
                <th scope="col">Nivel de Permiso:</th>
                <td><?php echo $usuarioN['permission'] ?></td>
            </tr>
            <tr>
                <th scope="col">Id xuid:</th>
                <td><?php echo $usuarioN['xuid'] ?></td>
            </tr>
        </tbody>
        </table>
        </div>
    </div>
    <a href="index.php" type="submit" class="btn btn-danger">Cerrar</a>
</div>
</div>





  </body>
</html>
