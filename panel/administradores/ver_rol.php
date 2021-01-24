<?php
include "../includes/scripts.php";

require __DIR__.'/administradores.php';

    if (!isset($_GET['usuario'])) {
        include "../includes/rol_no_encontrado.php";
        exit;
    }
$RolUser = $_GET['usuario'];
$RolU = obtenerRolPorName($RolUser);
//echo '<pre>'; var_dump($usuarioN); echo '</pre>'; exit;

    if (!$RolU) {
        include "../includes/rol_no_encontrado.php";
        exit;
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información Rol</title>

  </head>
  <body>


  <div class="container">
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-edit"></i> Usuario: <b><?php echo $RolU['usuario'] ?></b></h5>
        <div class="section">
        <table id="tablaRoles" class="table table-striped table-bordered" style="width:100%">
        <tbody>
            <tr>
                <th scope="col">Usuario:</th>
                <td><?php echo $RolU['usuario'] ?></td>
            </tr>
            <tr>
                <th scope="col">Rol:</th>
                <td><?php echo $RolU['rol'] ?></td>
            </tr>
            <tr>
                <th scope="col">Contacto:</th>
                <td><?php echo $RolU['contacto'] ?></td>
            </tr>
            <tr>
                <th scope="col">Pais:</th>
                <td><?php echo $RolU['pais'] ?></td>
            </tr>
            <tr>
                <th scope="col">Ciudad:</th>
                <td><?php echo $RolU['ciudad'] ?></td>
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