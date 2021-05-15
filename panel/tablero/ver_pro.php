<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3 && $_SESSION['id_rol'] != 4)
{
  header("location: ../../");
}

include "../includes/scripts.php";
include "../includes/footer.php";

    //require __DIR__.'../propiedades/editar.php';
    include "../propiedades/editar.php";
    include "info.php";
?>



<!doctype html>
<html lang="es">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Propiedades</title>

  </head>
  <body>


  <div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?php echo $data[12]['icon']; ?> <?php echo $data[13]['name']; ?> <b><?php echo $data[13]['spain']; ?></b></h5>
        <div class="section">
        <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
        <tbody>
            <tr>
                <th scope="col">Versión:</th>
                <td>Minecraft Bedrock <?php echo $versionsrv; ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[0]['name']; ?></th>
                <td><?php echo $data[0]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[1]['name']; ?></th>
                <td><?php echo $data[1]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[2]['name']; ?></th>
                <td><?php echo $data[2]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[3]['name']; ?></th>
                <td><?php echo $data[3]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[4]['name']; ?></th>
                <td><?php echo $data[4]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[5]['name']; ?></th>
                <td><?php echo $data[5]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[6]['name']; ?></th>
                <td><?php echo $online; ?> de <?php echo $data[6]['spain']; ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[7]['name']; ?></th>
                <td><?php echo $data[7]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[8]['name']; ?></th>
                <td><?php echo $data[8]['spain'] ?></td>
            </tr>
            <tr>
                <th scope="col"><?php echo $data[9]['name']; ?></th>
                <td><?php echo $data[9]['spain'] ?></td>
            </tr>
            <!--
            <tr>
                <th scope="col"><?php echo $data[10]['name']; ?></th>
                <td><?php echo $data[10]['icon'] ?> <?php echo $data[10]['btn'] ?></td>
            </tr>
            -->
            <tr>
                <th scope="col"><?php echo $data[12]['name']; ?></th>
                <td><?php echo $data[12]['spain'] ?> Puerto: <?php echo $data[8]['spain'] ?></td>
            </tr>
        </tbody>
        </table>
        </div>
    </div>
    <a href="index.php" type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-tachometer-alt'></i> Panel Principal">Cerrar</a>
    <?php if ($_SESSION['id_rol'] == 4) : ?>
    <?php else : ?>
    <a href="../propiedades" type="submit" class="btn btn-info" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="<i class='fas fa-cogs'></i> Propiedades">Editar</a>
    <?php endif ?>
</div>
</div>





  </body>