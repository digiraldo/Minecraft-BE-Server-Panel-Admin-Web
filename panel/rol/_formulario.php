<?php
include "data.php";
include "../includes/footer.php";
?>

<div class="container">
  <div class="card">
    <div class="card-header">
      <?php if ($rolU['id']) : ?>
        <h5 class="modal-title" id="modalAdminLabel"><i class="fas fa-user-plus"></i> Actualizar: <b><?php echo $rolU['usuario'] ?></b></h5>
      <?php else : ?>
        <h5 class="modal-title" id="modalAdminLabel"><i class="fas fa-user-plus"></i> Añadir Rol</h5>
      <?php endif ?>
    </div>
    <div class="card-body">

      <form method="POST" enctype="multipart/form-data" action="" class="needs-validation" novalidate>

        <div class="form-row align-items-center">
          <!-- Inicio Form Row -->

          <div class="col-md-6 mb-3">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control <?php echo $errors['usuario'] ? 'is-invalid' : '' ?>" id="usuario" value="<?php echo $rolU['usuario']; ?>" required>
            <div class="invalid-tooltip">
              <?php echo $errors['usuario']; ?>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" class="form-control <?php echo $errors['clave'] ? 'is-invalid' : '' ?>" id="clave" value="<?php echo $rolU['clave']; ?>;?>" required>
            <div class="invalid-tooltip">
              <?php echo $errors['clave']; ?>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control <?php echo $errors['nombre'] ? 'is-invalid' : '' ?>" id="nombre" value="<?php echo $rolU['nombre']; ?>" required>
            <div class="invalid-tooltip">
              <?php echo $errors['nombre']; ?>
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="gamertag">Gamertag</label>
            <input type="text" name="gamertag" class="form-control <?php echo $errors['gamertag'] ? 'is-invalid' : '' ?>" id="gamertag" value="<?php echo $rolU['gamertag']; ?>" required>
            <div class="invalid-tooltip">
              <?php echo $errors['gamertag']; ?>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="rol">Rol</label>
            <select class="custom-select  <?php echo $errors['gamertag'] ? 'is-valid' : '' ?>" name="rol" id="rol" required>
              <?php if ($rolU['id']) : ?>
                <option value="<?php echo $rolU['rol']; ?>"><?php echo $rolU['rol']; ?></option>
              <?php else : ?>
                <option value="Usuario"><?php echo $rolU['rol']; ?></option>
              <?php endif ?>
              <option value="Administrador">Administrador</option>
              <option value="Editor">Editor</option>
              <option value="Usuario">Usuario</option>
            </select>
            <div class="valid-tooltip">
              Rol Usuario por defecto
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="contacto">Contacto</label>
            <input type="text" name="contacto" class="form-control" id="contacto" value="<?php echo $rolU['contacto']; ?>" required>
            <div class="valid-tooltip">
              Contacto
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="pais">País</label>
            <input type="text" name="pais" class="form-control" id="pais" value="<?php echo $rolU['pais']; ?>" required>
            <div class="valid-tooltip">
              País de residencia
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="ciudad">Ciudad</label>
            <input type="text" name="ciudad" class="form-control" id="ciudad" value="<?php echo $rolU['ciudad']; ?>" required>
            <div class="valid-tooltip">
              ciudad
            </div>
          </div>

          <div class="form-group col-md-12  mb-3">
            <label for="">Imágen:</label>
            <?php if ($rolU['id']) { ?>
              <img class="border border-secondary rounded border mx-auto d-block" src="../includes/img/perfil/<?php echo $rolU['img']; ?>" width="250" name="Imagen">
            <?php } else { ?>
              <img class="border border-secondary rounded border mx-auto d-block" src="../includes/img/perfil/usuario.png" width="250" name="Imagen">
              <br />
            <?php } ?>

            <!-- Mostrar imagen en el Modal
<input type="file" class="form-control" accept="image/*" name="img" value="<?php echo $textImagenU; ?>" placeholder="" id="textImagenU" requiere="">
-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                  <?php if ($rolU['id']) { ?>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/<?php echo $rolU['img']; ?>' border='0' name='Imagen' /><br/>Imágen Actual">
                      <img class="rounded-circle" width="25px" height="25px" src="../includes/img/perfil/<?php echo $rolU['img']; ?>" /></a>
                  <?php } else { ?>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/usuario.png' border='0' name='Imagen' /><br/>Imágen Predeterminada">
                      <img class="rounded-circle" width="25px" height="25px" src="../includes/img/perfil/usuario.png" /></a>
                  <?php } ?>
                </label>
              </div>
              <form method="get">
                <select type="file" name="img" class="custom-select" id="inputGroupSelect01" onchange="cambiarA(this)">
                  <option value="<?php echo $rolU['img']; ?>">Seleccionar Imagen</option>
                  <option value="0">Araña</option>
                  <option value="1">Araña Cueva</option>
                  <option value="2">Cerdo</option>
                  <option value="3">Creeper</option>
                  <option value="4">Enderman</option>
                  <option value="5">Esqueleto</option>
                  <option value="6">Granjero</option>
                  <option value="7">Lobo</option>
                  <option value="8">Oveja</option>
                  <option value="9">Steve</option>
                  <option value="10">Usuario</option>
                  <option value="11">Vaca</option>
                  <option value="12">Zombie</option>
                </select>

            </div>
            <small id="imgHelp" class="form-text text-muted">Seleccionar Imágen para el Perfil.</small>
          </div>

        </div><!-- Fin Form Row -->


        <div class="modal-footer">

          <?php if ($rolU['id']) : ?>
            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
          <?php else : ?>
            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
          <?php endif ?>
          <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>

        </div>
      </form>
    </div>
  </div>
</div>