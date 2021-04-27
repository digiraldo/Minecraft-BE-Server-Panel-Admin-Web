<?php
//session_start();
//if ($_SESSION['id_rol'] != 0 && $_SESSION['id_rol'] != 1 && $_SESSION['id_rol'] != 2 && $_SESSION['id_rol'] != 3)
//{
//  header("location: ../../");
//}

include "../includes/footer.php";
?>
<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 -->

<div class="container">
  <div class="card card text-center text-white bg-dark">
    <div class="card-header">
      <?php if ($usuarioN['name']) : ?>
        <h5 class="modal-title" id="modalAdminLabel"><i class="fas fa-user-edit"></i> Editar: <b><?php echo $usuarioN['name'] ?></b></h5>
      <?php else : ?>
        <h5 class="modal-title" id="modalAdminLabel"><i class="fas fa-user-plus"></i> Añadir Usuario</h5>
      <?php endif ?>
    </div>

    <?php if ($usuarioN['name']) : ?>

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
          <div class="form-group">
            <label for="my-input">Id xuid</label>
            <?php if ($usuarioN['xuid']) : ?>
              <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="<?php echo $usuarioN['xuid'] ?>" class="form-control" type="text" name="xuid" disabled>
            <?php else : ?>
              <input id="my-input" data-toggle="tooltip" data-placement="top" title="No Editable" value="No Ingreso al Mundo" class="form-control" type="text" name="xuid" disabled>
            <?php endif ?>
      </div>
      </div>
          <div class="card-footer">
          <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-edit"></i> Guardar</button>
          <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>
          </div>
        </form>

    <?php else : ?>


      <?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1) : ?>
      <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nuevo</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Registrado</a>
        </li>
      </ul>


      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="" class="needs-validation" novalidate>

              <div class="form-row align-items-center">
                <!-- Inicio Form Row -->
                <div class="col">
                  <label for="name">Nombre de Usuario</label>
                  <input type="text" name="name" class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>" id="name" value="<?php echo $usuarioN['name']; ?>" required>
                  <div class="invalid-tooltip">
                    <?php echo $errors['name']; ?>
                  </div>
                </div>
              </div><!-- Fin Form Row -->
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
            <a href="index.php" type="submit" class="btn btn-primary"><i class="fas fa-times"></i> Cancelar</a>
          </div>
          </form>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

          <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="" class="needs-validation" novalidate>
              <div class="form-row align-items-center">
                <!-- Inicio Form Row -->
                <div class="col">
                  <label for="gamertag">Seleccionar Nombre de Usuario</label>
                  <select class="custom-select <?php echo $errors['name'] ? 'is-valid' : '' ?>" name="name" id="gamertag-dropdown" required>


                  </select>
                  <div class="valid-tooltip">
                    Seleccione usuario registrado
                  </div>
                </div>

              </div><!-- Fin Form Row -->

          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
            <a href="index.php" type="submit" class="btn btn-info"><i class="fas fa-times"></i> Cancelar</a>
          </div>
          </form>

        </div>

      </div>

      <?php else : ?> 

        <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Usuario Registrado</a>
        </li>
      </ul>


      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="" class="needs-validation" novalidate>
              <div class="form-row align-items-center">
                <!-- Inicio Form Row -->
                <div class="col">
                  <label for="gamertag">Seleccionar Nombre de Usuario</label>
                  <select class="custom-select <?php echo $errors['name'] ? 'is-valid' : '' ?>" name="name" id="gamertag-dropdown" required>


                  </select>
                  <div class="valid-tooltip">
                    Seleccione usuario registrado
                  </div>
                </div>

              </div><!-- Fin Form Row -->

          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-warning my-1"><i class="fas fa-user-plus"></i> Añadir</button>
            <a href="index.php" type="submit" class="btn btn-info"><i class="fas fa-times"></i> Cancelar</a>
          </div>
          </form>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">



        </div>

      </div>
<?php endif ?>



    <?php endif ?>

  </div>
</div>


<script src="../includes/js/select_rol.js"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
-->