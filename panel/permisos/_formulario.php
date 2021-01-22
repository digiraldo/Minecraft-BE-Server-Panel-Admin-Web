<?php 

include "../includes/footer.php";
require '../usuarios/usuarios.php';
$usuarios = obtenerUsuarios();

?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
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
                   
                        <!--
                        <div class="form-group">
                          <label for="validationServer01">Nombre</label>
                          <input type="text" name="name" value="<?php echo $permisoP['name'] ?>"
                          class="form-control <?php echo $errores['name'] ? 'is-invalid' : '' ?>" 
                          id="validationServer01" aria-describedby="validationServer01Feedback" required>
                          <div id="validationServer01Feedback" class="invalid-feedback">
                          <?php echo $errores['name'] ?>
                          </div>
                        </div>
                        -->
                        
                        <div class="form-group col-md-6">
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
                        


                <?php if ($permisoP['name']): ?>
                    <div class="form-group col-md-6">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="<?php echo $permisoP['xuid'] ?>" class="form-control" type="text" name="xuid" disabled>
                <?php else: ?>
                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" placeholder="Inserte Código" value="" class="form-control" type="text" name="xuid">
                        <small id="passwordHelpBlock" class="form-text text-muted">
                        Ingrese el código Decimal generado de Xbox XUID Grabber.
                        </small>                       
                <?php endif ?>
                      
                        </div>
                        <p>
                        <iframe width="560" height="315" src="https://www.cxkes.me/xbox/xuid" 
                        frameborder="0" allowfullscreen" 
                        allowfullscreen></iframe>
                        </p>
                    <?php if ($permisoP['name']): ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
                    <?php endif ?>

                    
                    <!--<a href="" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>-->
                    <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>

                <!--    <form style="display: inline-block" method="POST" action="eliminar.php">
                    <input type="hidden" name="name" value="<?php echo $permiso['name'] ?>">
                    <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                    </form>
                 -->


                </form>
            </div>
        
    </div>

</div>

<!-- "visitor", "member", "operator" -->