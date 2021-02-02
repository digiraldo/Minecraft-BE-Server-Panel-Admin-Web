<?php


//$cont = 'SELECT * FROM name';
//$sentencia= $pdo->prepare($cont);
//$sentencia->execute();
//$totalUsuarios=$sentencia->rowCount();

//print_r($totalUsuarios);

    $active_tablero="";
    $active_whitelist="active";
    $active_permisos="";
    $active_admin="";
    $active_mundo="";
    $active_backups="";
    $active_propiedades="";
    $active_logs="";	
    $title="Minecraft SRV | Simple Invoice"; 

    //require 'usuarios.php';
    //$usuarios = obtenerUsuarios();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <?php include "../includes/scripts.php" ?>

  </head>
  <body>

  <?php include '../includes/navbar.php'?>

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../tablero/">Inicio</a></li>
    <li class="breadcrumb-item"><a href="">Usuarios</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo fechaC(); ?> </li>
    </ol>
</nav>



<!-- Modal 
<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="modalUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="modalUsuarioLabel"><i class="fas fa-users-cog"></i> Jugadores</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
      <button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion"><i class="fas fa-plus"></i> Agregar</button>
        <button value="btnModificar" <?php echo $accionModificar;?> class="btn btn-warning" type="submit" name="accion"><i class="fas fa-edit"></i> Modificar</button>
        <button value="btnEliminar" onclick="return Confirmar('Realmente desea borrar este Usuario? :( ');" <?php echo $accionEliminar;?> class="btn btn-danger" type="submit" name="accion"><i class="fas fa-trash-alt"></i> Eliminar</button>
        <button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion"><i class="fas fa-times"></i> Cancelar</button>
      </div>
    </div>
  </div>
</div> -->






    <!-- Tabla -->
    <div class="container">
    <!-- Button trigger modal -->
    <!-- <p>
      <a type="button" class="btn btn-primary" href="agregar.php" data-toggle="modal" data-target="#modalUsuario"><i class="fas fa-user-plus"></i>
        Agregar Usuario
      </a>
    </p> -->
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
              <?php foreach ($usuarios as $usuario): ?>
                <tr>
                  

                  <td>
                  <a href="# " data-toggle="tooltip" data-placement="left"
                  title="<i class='fas fa-user-tag'></i>  <?php echo $usuario['name']; ?>">
                  <?php if ($usuario['xuid']): ?>
                    <?php echo $usuario['xuid'] ?>
                  <?php else: ?>
                    <?php echo $usuario['name'] ?>
                  <?php endif ?>


                  
                  </td>

                  <td>
                  <a href="# " data-toggle="tooltip" data-placement="right" 
                  title="<i class='fas fa-id-card'></i>  <?php echo $usuario['xuid']; ?>">
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


    
<?php include '../includes/footer.php'?>
<!-- php include '../includes/modal.php'?> -->




  </body>
</html>


<!--

<a href="ver.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
<a href="editar.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
<a href="eliminar.php?id=<?php echo $usuario['id'] ?>" class="btn btn-sm btn-outline-danger">View</a>


-->