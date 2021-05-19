<?php
session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
{
  header("location: ../../");
}

//$cont = 'SELECT * FROM name';
//$sentencia= $pdo->prepare($cont);
//$sentencia->execute();
//$totalUsuarios=$sentencia->rowCount();

//print_r($totalUsuarios);

$active_tablero = "";
$active_whitelist = "active";
$active_permisos = "";
$active_admin = "";
$active_mundo = "";
$active_backups = "";
$active_propiedades = "";
$active_logs = "";
$title = "Minecraft SRV | Simple Invoice";

//require 'usuarios.php';
//$usuarios = obtenerUsuarios();
require '../tablero/info.php';



?>

<!doctype html>
<html lang="es">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuarios</title>
  <?php include "../includes/scripts.php" ?>

</head>

<body>

  <?php include '../includes/navbar.php' ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="">Usuarios</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
  </nav>


<?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1) : ?>
  <!-- Tabla -->
  <div class="container">
    <p>
      <a class="btn btn-primary" href="agregar.php"><i class="fas fa-user-plus"></i> Añadir Usuario <span class="badge badge-light"><?php echo count($usuarios); ?></span></a>
    </p>

    <div class="section">
      <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Id XuId</th>
            <th scope="col">Gamertag</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>

            <td>
              <?php if (!empty($usuario['xuid'])) : ?>
                <a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fab fa-xbox'></i>  <?php echo $usuario['name']; ?>" type="button" class="btn btn-success"><?php echo $usuario['xuid'] ?></a>                    
                  <?php else : ?>
                <a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fab fa-xbox'></i>  <?php echo $usuario['name']; ?>" type="button" class="btn btn-danger">No Ingresó al Mundo</a>     
                  <?php endif ?>
              </td>

              <td>
                <a href="# " data-toggle="tooltip" data-placement="right" title="<i class='fas fa-id-card'></i>  <?php echo $usuario['xuid']; ?>">
                  <?php echo $usuario['name']; ?></a>
              </td>
              <!--<td><?php echo $usuario['permission'] ?></td> -->

              <!-- Botones en Acciones -->
              <td>

                <a href="ver.php?name=<?php echo $usuario['name'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Ver" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></a>
                <a href="editar.php?name=<?php echo $usuario['name'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Editar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-pencil-alt"></i></a>

                <form style="display: inline-block" method="POST" action="eliminar.php">
                  <input type="hidden" name="name" value="<?php echo $usuario['name'] ?>">
                  <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                </form>

                <!-- <a href="eliminar.php?name=<?php echo $usuario['name'] ?>" value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></a> -->

              </td>
            </tr>
          <?php endforeach;; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php elseif ($_SESSION['id_rol'] == 2) : ?> 
  <!-- Tabla -->
  <div class="container">

    <p>
      <a class="btn btn-primary" href="agregar.php"><i class="fas fa-user-plus"></i> Añadir Usuario <span class="badge badge-light"><?php echo count($usuarios); ?></span></a>
    </p>

    <div class="section">
      <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th scope="col">Id XuId</th>
            <th scope="col">Gamertag</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>

              <td>
              <?php if (!empty($usuario['xuid'])) : ?>
                <a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fab fa-xbox'></i>  <?php echo $usuario['name']; ?>" type="button" class="btn btn-success"><?php echo $usuario['xuid'] ?></a>                    
                  <?php else : ?>
                <a href="# " data-toggle="tooltip" data-placement="left" title="<i class='fab fa-xbox'></i>  <?php echo $usuario['name']; ?>" type="button" class="btn btn-danger">No Ingresó al Mundo</a>     
                  <?php endif ?>
              </td>

              <td>
                <a href="# " data-toggle="tooltip" data-placement="right" title="<i class='fas fa-id-card'></i>  <?php echo $usuario['xuid']; ?>">
                  <?php echo $usuario['name']; ?></a>
              </td>
              <!--<td><?php echo $usuario['permission'] ?></td> -->

              <!-- Botones en Acciones -->
              <td>

                <a href="ver.php?name=<?php echo $usuario['name'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Ver" type="submit" class="btn btn-warning btn-sm" name="accion"><i class="fas fa-eye"></i></a>
                <!-- 
                <a href="editar.php?name=<?php echo $usuario['name'] ?>" value="Seleccionar" data-toggle="tooltip" data-placement="top" title="Editar" type="submit" class="btn btn-info btn-sm" name="accion"><i class="fas fa-pencil-alt"></i></a>
                -->
                <form style="display: inline-block" method="POST" action="eliminar.php">
                  <input type="hidden" name="name" value="<?php echo $usuario['name'] ?>">
                  <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                </form>
                
              </td>
            </tr>
          <?php endforeach;; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php else : ?>  

  <!-- Tabla -->
  <div class="container">

    <div class="section">
      <table id="tablaUsuarios" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th width="3%" scope="col">Usr</th>
            <th scope="col">Gamertag</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td>
              <?php if ($usuario['xuid']) : ?>                   
                <a href="#" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Jugador Activo"><i class="fab fa-xbox"></i></a>   
                  <?php else : ?>
                <a href="#" type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="No ha ingresado al Mundo"><i class="fab fa-xbox"></i></a>      
                  <?php endif ?>                     
              </td>
              <td>
                <a href="# " data-toggle="tooltip" data-placement="right" title="<i class='fab fa-microsoft'></i> Usuario Microsoft">
                <?php echo $usuario['name']; ?></a>
              </td>
              <!--<td><?php echo $usuario['permission'] ?></td> -->

            </tr>
          <?php endforeach;; ?>
        </tbody>
      </table>
    </div>
  </div>
  
<?php endif ?>

  <?php include '../includes/footer.php' ?>
  <!-- php include '../includes/modal.php'?> -->


</body>

</html>


<!--

<a href="ver.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
<a href="editar.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
<a href="eliminar.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-danger">View</a>


-->