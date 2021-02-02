<?php

    $active_tablero="";
    $active_whitelist="";
    $active_permisos="";
    $active_admin="active";
    $active_mundo="";
    $active_backups="";
    $active_propiedades="";
    $active_logs="";	
    $title="Minecraft SRV | Simple Invoice"; 

    //require 'administradores.php'

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

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Administradores</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>

<div class="container">
<!-- Button trigger modal -->
<?php //include 'agregar.php' ?>
<?php include '_formulario.php' ?>
<p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdmin">
<i class="fas fa-user-plus"></i> Añadir Rol
</button>
</p>
<div class="section">
<table id="tablaRoles" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        
        <?php foreach ($roles as $rol): ?>
            <tr>
                <td>
                <a href="# " data-toggle="tooltip" data-placement="right" 
                  title="
                  <i class='fas fa-atlas'></i> Pais: <?php echo $rol['pais']; ?><br/>
                  <i class='fas fa-city'></i> Ciudad: <?php echo $rol['ciudad']; ?><br/>
                  ">
                  <?php echo $rol['usuario']; ?></a>
                </td>
                <td>
                <a href="# " data-toggle="tooltip" data-placement="right" 
                  title="
                  <i class='fas fa-gamepad'></i> Gamertag: <?php echo $rol['gamertag']; ?><br/>
                  <i class='fas fa-address-book'></i>  <?php echo $rol['contacto']; ?>
                  ">
                  <?php echo $rol['rol']; ?></a>
                </td>
                <td>                
                <a href="ver_rol.php?usuario=<?php echo $rol['usuario'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Ver" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></a>
                <a href="editar.php?usuario=<?php echo $rol['usuario'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Editar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-pencil-alt"></i></a>
                  
                <form style="display: inline-block" method="POST" action="eliminar.php">
                <input type="hidden" name="usuario" value="<?php echo $rol['usuario'] ?>">
                <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
            <?php endforeach;; ?>
            </tbody> 
    </table>
</div>
</div>

<?php //include "../administradores/agregar.php"; ?>
<?php include '../includes/footer.php'?>
<?php include '../includes/modal.php'?>
    
  </body>
</html>