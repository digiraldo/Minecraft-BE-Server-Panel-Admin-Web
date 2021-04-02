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
          <?php if ($rolU['id']) : ?>
            <div class="col-md-6 mb-3">
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" class="form-control <?php echo $errors['clave'] ? 'is-invalid' : '' ?>" id="clave" value="<?php echo $rolU['clave']; ?>" autocomplete="new-password" placeholder="" required>
            <div class="invalid-tooltip">
                Ingrese la Contraseña 
            </div>
          </div>
          <?php else : ?>
          <div class="col-md-6 mb-3">
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" class="form-control <?php echo $errors['clave'] ? 'is-invalid' : '' ?>" id="clave" value="" autocomplete="new-password" placeholder="****" required>
            <div class="invalid-tooltip">
                <?php echo $errors['clave']; ?> 
            </div>
          </div>
          <?php endif ?>

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
                <option value="<?php echo $rolU['rol']; ?>"><?php echo $rolU['rol']; ?></option>
            </select>
            <div class="valid-tooltip">
              Rol Inscrito por defecto
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
                    <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/<?php echo $rolU['img']; ?>' border='0' name='Imagen' /><br/>Imágen Actual: <?php echo $rolU['n_img']; ?>">
                      <img class="rounded-circle" width="25px" height="25px" src="../includes/img/perfil/<?php echo $rolU['img']; ?>" /></a>
                  <?php } else { ?>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='../includes/img/perfil/usuario.png' border='0' name='Imagen' /><br/>Imágen Predeterminada">
                      <img class="rounded-circle" width="25px" height="25px" src="../includes/img/perfil/usuario.png" /></a>
                  <?php } ?>
                </label>
              </div>
              <form method="get">
                <select type="file" name="img" class="custom-select" id="inputGroupSelect01" onchange="cambiarA(this)">
                  <option value="<?php echo $rolU['id_img']; ?>">Actual: <?php echo $rolU['n_img']; ?></option>
                  <option value="13">Alex</option>
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

          <?php if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2) : ?>
          <a href="../tablero/" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>
          <?php else : ?>
            <a href="../rol/" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>
            <?php endif ?>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
        var _img = new Array();
        _img[0] = new Image();
        _img[0].src = "../includes/img/perfil/arana.png";
        _img[1] = new Image();
        _img[1].src = "../includes/img/perfil/arana_cueva.png";
        _img[2] = new Image();
        _img[2].src = "../includes/img/perfil/cerdo.png";
        _img[3] = new Image();
        _img[3].src = "../includes/img/perfil/creeper.png";
        _img[4] = new Image();
        _img[4].src = "../includes/img/perfil/enderman.png";
        _img[5] = new Image();
        _img[5].src = "../includes/img/perfil/esqueleto.png";
        _img[6] = new Image();
        _img[6].src = "../includes/img/perfil/granjero.png";
        _img[7] = new Image();
        _img[7].src = "../includes/img/perfil/lobo.png";
        _img[8] = new Image();
        _img[8].src = "../includes/img/perfil/oveja.png";
        _img[9] = new Image();
        _img[9].src = "../includes/img/perfil/steve.png";
        _img[10] = new Image();
        _img[10].src = "../includes/img/perfil/usuario.png";
        _img[11] = new Image();
        _img[11].src = "../includes/img/perfil/vaca.png";
        _img[12] = new Image();
        _img[12].src = "../includes/img/perfil/zombie.png";
        _img[13] = new Image();
        _img[13].src = "../includes/img/perfil/alex.png";

        function cambiarA(_obj) {
            if (!_obj) return;
            var _index = _obj.selectedIndex;
            if (!_index) return;
            var _item = _obj[_index].value;
            if (!_item) return;
            if (_item < 0 || _item >= _img.length) return;
            document.images["Imagen"].src = _img[_item].src;
        }


        $('.alert').alert()

        function Confirmar(Mensaje) {
            return (confirm(Mensaje)) ? true : false
        }
    </script>