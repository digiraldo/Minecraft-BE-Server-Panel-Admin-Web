<?php 

session_start();
if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2)
{
  header("location: ../../");
}

include "../includes/footer.php";
require '../usuarios/usuarios.php';
$usuarios = obtenerUsuarios();

?>

<div class="container px-lg-5">
<div class="row justify-content-md-center">
<div class="card col-md-auto">

    <div class="card-body">
            <h3>
                <?php if ($permisoP['name']): ?>
                    <i class="fas fa-user-check"></i> Editar: <b><?php echo $permisoP['name'] ?></b>
                <?php else: ?>
                    <i class="fas fa-user-plus"></i> Añadir Permiso
                <?php endif ?>
            </h3>
        </div>
            <div class="card-body">
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    <legend></legend>
                   
                        <?php if ($permisoP['name']): ?>
                        <div class="form-group">
                        <label for="validationServer02">Nombre</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="validationServer04"><i class="fas fa-address-book"> <?php echo $permisoP['name'] ?></b></i></label>
                        </div>
                        </div>

                        <?php else: ?>

                        <div class="form-group">
                        <label for="validationServer02">Nombre</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="validationServer04"><i class="fas fa-address-book"> <?php echo $permisoP['name'] ?></b></i></label>
                        </div>
                        <select name="name" class="custom-select <?php echo $errores['name'] ? 'is-valid' : '' ?>" 
                        id="validationServer02" aria-describedby="validationServer02Feedback" required>
                        <option selected>Seleccionar...</option>
                        <?php foreach ($usuarios as $usuario): ?>
                        <?php
                        echo "<option value=".$usuario['name']." select>".$usuario['name']."</option>";                       
                        $xuidp = $usuario['xuid'] = $usuario['xuid'];                           
                        ?>
                        <?php endforeach;; ?>
                        </select>
                        <div id="validationServer04Feedback" class="valid-feedback">
                        <?php echo $errores['name'] ?>.
                        </div>
                        </div>
                        <?php endif ?>

                        <?php if ($permisoP['name']): ?>
                        <div class="form-group">
                        <label for="validationServer04">Nivel de Permiso</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="validationServer04"><i class="fas fa-id-card"> <?php echo $permisoP['spain'] ?></b></i></label>
                        </div>
                        <select name="permission" class="custom-select <?php echo $errores['permission'] ? 'is-valid' : '' ?>" 
                        id="validationServer04" aria-describedby="validationServer04Feedback" required>
                          <option value="operator" selected>Seleccionar...</option>
                          <option value="visitor">Visitante</option>
                          <option value="member">Miembro</option>
                          <option value="operator">Operador</option>                       
                        </select>
                        <div id="validationServer04Feedback" class="valid-feedback">
                        <?php echo $errores['permission'] ?>
                        </div>
                        </div>
                        <?php else: ?>
                        <div class="form-group">
                        <label for="validationServer02">Nivel de Permiso</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" name="permission" class="custom-select value="operator" for="validationServer04"><i class="fas fa-id-card"> Operador</b></i></label>
                        </div>
                        </div>
                        <?php endif ?>



                <?php if ($permisoP['name']): ?>
                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="<?php echo $permisoP['xuid'] ?>" class="form-control" type="text" name="xuid" disabled>
                <?php else: ?>
                    <div class="form-group">
                        <label for="validationServer02">Id xuid</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="validationServer04"><i class="fas fa-address-book"> <?php echo $permisoP['name'] ?></b></i></label>
                        </div>
                        <select name="xuid" class="custom-select <?php echo $errores['xuid'] ? 'is-valid' : '' ?>" 
                        id="validationServer02" aria-describedby="validationServer02Feedback" required>
                        <option selected>Seleccionar...</option>
                        <?php foreach ($usuarios as $usuario): ?>
                        <?php
                        echo "<option value=".$usuario['xuid']." select>".$usuario['name']."</option>";                                                 
                        ?>
                        <?php endforeach;; ?>
                        </select>
                        <div id="validationServer04Feedback" class="valid-feedback">
                        <?php echo $errores['permission'] ?>.
                        </div>
                        </div>
                    
                    
                    
                    
                    <!--
                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" placeholder="Inserte Código" value="" class="form-control" type="text" name="xuid">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        Ingrese el código Decimal generado de Xbox XUID Grabber.
                        </small>                       
                 
                    </div>
                    
                        <p>
                        <iframe width="645" height="400" src="https://www.cxkes.me/xbox/xuid" frameborder="0" allowfullscreen></iframe>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        Seleccionar Decimal antes de Resolve.
                        </small>
                        </p>
                    -->
                <?php endif ?> 

                    <?php if ($permisoP['name']): ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
                    <?php endif ?>
                        <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>

                </form>
            </div>

 
    </div>
    </div>

</div>

<!-- "visitor", "member", "operator" -->