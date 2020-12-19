<?php 



?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($usuarioN['name']): ?>
                    <i class="fas fa-user-check"></i> Editar: <b><?php echo $usuarioN['name'] ?></b>
                <?php else: ?>
                    <i class="fas fa-user-plus"></i> Añadir Usuario
                <?php endif ?>
            </h3>
        </div>
            <div class="card-body">
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    <legend></legend>

                        <div class="form-group">
                          <label for="validationServer01">Nombre</label>
                          <input type="text" name="name" value="<?php echo $usuarioN['name'] ?>"
                          class="form-control <?php echo $errores['name'] ? 'is-invalid' : '' ?>" 
                          id="validationServer01" aria-describedby="validationServer01Feedback" required>
                          <div id="validationServer01Feedback" class="invalid-feedback">
                          <?php echo $errores['name'] ?>
                          </div>
                        </div>

                        <div class="form-group">
                        <label for="validationServer04">Nivel de Permsio</label>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                                <label class="input-group-text" for="validationServer04"><i class="fas fa-address-book"> <?php echo $usuarioN['permission'] ?></b></i></label>
                            </div>
                        <select name="permission" class="custom-select <?php echo $errores['permission'] ? 'is-valid' : '' ?>" 
                        id="validationServer04" aria-describedby="validationServer04Feedback" required>
                          <option value="member" selected>Seleccionar...</option>
                          <option value="visitor">Visitante</option>
                          <option value="member">Miembro</option>
                          <option value="operator">Operador</option>
                        </select>
                        <div id="validationServer04Feedback" class="valid-feedback">
                        <?php echo $errores['permission'] ?>.
                        </div>
                        </div>



                    <div class="form-group">
                        <label for="my-input">Id xuid</label>
                        <input id="my-input" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid">
                    </div>


                    <?php if ($usuarioN['name']): ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
                    <?php endif ?>

                    
                    <!--<a href="" type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>-->
                    <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>

                <!--    <form style="display: inline-block" method="POST" action="eliminar.php">
                    <input type="hidden" name="name" value="<?php echo $usuario['name'] ?>">
                    <button value="btnEliminar" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return Confirmar('Realmente desea eliminar a este Jugador del Servidor servername? :(');" type="submit" class="btn btn-danger btn-sm" name="accion"><i class="fas fa-trash-alt"></i></button>
                    </form>
                 -->
                </form>
            </div>
        
    </div>

</div>

<!-- "visitor", "member", "operator" -->