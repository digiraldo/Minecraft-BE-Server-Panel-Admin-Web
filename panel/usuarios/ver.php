<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
header("location: ../../");
}

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
<html lang="es">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informacion Usuario</title>

  </head>
  <body>


  <div class="container">
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
                <th scope="col">Id xuid:</th>
                <?php if ($usuarioN['xuid']) : ?>
                    <td><?php echo $usuarioN['xuid'] ?></td>
                <?php else : ?>
                <td>No ha ingresado al Mundo</td>  
                <?php endif ?>

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
