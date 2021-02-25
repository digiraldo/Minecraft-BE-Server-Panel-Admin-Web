<?php
session_start();
if ($_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3) {
  header("location: ../../");
}

$active_tablero = "";
$active_whitelist = "";
$active_permisos = "";
$active_admin = "active";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";

require 'roles.php';
$roles = obtenerRol();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administradores</title>
  <?php include "../includes/scripts.php" ?>

</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="">Roles</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>

  <div class="container">

    <p>
      <a href="agregar.php" type="button" class="btn btn-primary">
        <i class="fas fa-user-plus"></i> Añadir Rol <span class="badge badge-light"><?php echo count($rolesJ); ?></span>
      </a>
    </p>

    <table id="tablaRoles" class="table table-striped table-bordered table-responsive" style="width:100%">
      <thead class="thead-inverse">
        <tr>
          <th width="3%">Imágen</th>
          <th>Usuario</th>
          <th>Rol</th>
          <th width="13%" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($roles as $rol) : ?>
          <tr>
            <td>
              <a scope="row" href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/<?php echo $rol['img']; ?>' />">
                <img class="rounded-circle" width="35px" height="35px" src="../includes/img/perfil/<?php echo $rol['img']; ?>" /></a>
            </td>
            <td>
              <a href="# " data-toggle="tooltip" data-placement="right" title="
              <i class='fas fa-atlas'></i> Pais: <?php echo $rol['pais']; ?><br/>
              <i class='fas fa-city'></i> Ciudad: <?php echo $rol['ciudad']; ?><br/>
              <i class='fas fa-user-tag'></i> <?php echo $rol['nombre']; ?><br/>
              ">
                <?php echo $rol['usuario']; ?></a>
            </td>
            <td>
              <a href="# " data-toggle="tooltip" data-placement="right" title="
              <i class='fas fa-gamepad'></i> Gamertag: <?php echo $rol['gamertag']; ?><br/>
              <i class='fas fa-address-book'></i>  <?php echo $rol['contacto']; ?><br/>
              <i class='fas fa-calendar-alt'></i> Creado: <?php echo $rol['fecha']; ?>
              ">
                <?php echo $rol['rol']; ?></a>
            </td>
            <td>
              <a href="ver_rol.php?id=<?php echo $rol['id'] ?>" data-toggle="tooltip" data-placement="top" title="Ver" type="submit" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
              <a href="editar.php?id=<?php echo $rol['id'] ?>" data-toggle="tooltip" data-placement="top" title="Editar" type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <form style="display: inline-block" method="POST" action="eliminar.php">
                <input type="hidden" name="id" value="<?php echo $rol['id'] ?>">
                <button data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
        <?php endforeach;; ?>
      </tbody>
    </table>

  </div><!-- Fin Container -->

  <?php include '../includes/footer.php' ?>
  <?php //include '../includes/modal.php' 
  ?>

</body>

</html>