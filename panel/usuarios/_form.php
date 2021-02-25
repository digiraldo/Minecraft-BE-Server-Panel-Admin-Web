<?php

include "../includes/footer.php";

?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="card col-md-auto">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nuevo</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Registrado</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="card-header">
                        <h3>
                            <?php if ($usuarioN['name']) : ?>
                                <i class="fas fa-user-check"></i> Editar: <b><?php echo $usuarioN['name'] ?></b>
                            <?php else : ?>
                                <i class="fas fa-user-plus"></i> Añadir Usuario
                            <?php endif ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" role="form" enctype="multipart/form-data">
                            <legend></legend>
                            <div class="form-group">
                                <label for="validationServer01">Nombre</label>
                                <input type="text" name="name" value="<?php echo $usuarioN['name'] ?>" class="form-control <?php echo $errores['name'] ? 'is-invalid' : '' ?>" id="validationServer01" aria-describedby="validationServer01Feedback" required>
                                <div id="validationServer01Feedback" class="invalid-feedback">
                                    <?php echo $errores['name'] ?>
                                </div>
                            </div>
                            <?php if ($usuarioN['name']) : ?>
                                <div class="form-group">
                                    <label for="my-input">Id xuid</label>
                                    <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid" disabled>
                                <?php else : ?>
                                <?php endif ?>
                                </div>
                                <?php if ($usuarioN['name']) : ?>
                                    <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
                                <?php endif ?>
                                <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>


                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <div class="card-header">
                        <h3>
                            <?php if ($usuarioN['name']) : ?>
                                <i class="fas fa-user-check"></i> Editar: <b><?php echo $usuarioN['name'] ?></b>
                            <?php else : ?>
                                <i class="fas fa-user-plus"></i> Añadir Usuario
                            <?php endif ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" role="form" enctype="multipart/form-data">
                            <legend></legend>

                            <div class="form-group">
                                    <label for="inputGamertag">Nombre:</label>
                                        <select id="inputGamertag" name="gamertag" class="form-control">
                                            <option value="<?php echo $usuarioN['name'] ?>" selected><?php echo $usuarioN['name'] ?></option>
                                            <?php 
                                            $usuarios = obtenerUsuarios();
                                            foreach ($usuarios as $rol): ?>
                                            <?php
                                            echo "<option value=".$rol['gamertag']." select>".$rol['nombre']."</option>";                          
                                            ?>
                                            <?php endforeach;; ?>
                                        </select>
                                </div>
                            <?php if ($usuarioN['name']) : ?>
                                <div class="form-group">
                                    <label for="my-input">Id xuid</label>
                                    <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid" disabled>
                                <?php else : ?>
                                <?php endif ?>
                                </div>
                                <?php if ($usuarioN['name']) : ?>
                                    <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
                                <?php endif ?>
                                <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- "visitor", "member", "operator" -->






<div class="container-fluid"><!-- Container Usuario Gamertag -->
<?php if ($usuarioN['name']) { ?><!-- Actualizar Usuario Gamertag ##################-->


<?php }else{ ?><!-- Añadir Usuario Gamertag ########################################-->

    <div class="card text-center text-white bg-dark">
  <div class="card-header">
    <h3><i class="fas fa-user-plus"></i> Añadir Usuario</h3>
  </div>
  <div class="card-body">
    <p class="card-text"><!-- Inicio Nuevo o Seleccionar -->
    
    

    <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist"><!-- Inicio Nav -->
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nuevo</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Registrado</a>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <form action="" method="POST" role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
  <div class="form-group">
  <div class="col-auto">
    <label for="name">Nombre</label>
    <input type="text" class="form-control <?php echo $errores['name'] ? 'is-invalid' : '' ?>" id="name" placeholder="Gamertag" required>
    <div class="invalid-tooltip">
    <?php echo  $errores['name'] ?>
    </div>
  </div>
  </div>

  <button class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
  <a href="index.php" type="submit" class="btn btn-success"><i class="fas fa-times"></i> Cancelar</a>
  </form>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <form action="" method="POST" role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
  <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
  <a href="index.php" type="submit" class="btn btn-success"><i class="fas fa-times"></i> Cancelar</a>
  </form>
  </div>
</div>

    </p><!-- Fin Nuevo o Seleccionar -->

  </div>
  <div class="card-footer text-muted">
  <i class="fas fa-users"></i> Usuarios Añadidos: <?php echo count($usr); ?>
  </div>
</div>
   
<?php } ?><!-- Fin de Usar o Añadir Usuario Gamertag ###############################-->
</div><!-- Fin Container Usuario Gamertag -->




<form action="" method="POST" role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
  <div class="form-group">
  <div class="col-auto">
    <label for="name">Nombre</label>
    <input type="text" class="form-control <?php echo $errores['name'] ? 'is-invalid' : '' ?>" id="name" placeholder="Gamertag" required>
    <div class="invalid-tooltip">
    <?php echo  $errores['name'] ?>
    </div>
  </div>
  </div>

  <button type="submit" id="name" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
  <a href="index.php" type="submit" class="btn btn-success"><i class="fas fa-times"></i> Cancelar</a>
  </form>