<div class="card text-white bg-dark">
  <div class="card-header  text-center">
    <h4>
        <?php if ($item['id']) : ?>
            <i class="fa-solid fa-pen-to-square"></i> Editar: <b><?php echo $item['es'] ?></b>
        <?php else : ?>
            <i class="fa-solid fa-file-circle-plus"></i> Crear nuevo Item
        <?php endif ?>
    </h4>
        
  </div>
  <div class="card-body">
    <h5 class="card-title  text-center">
    <?php if ($item['id']) : ?>
      <a scope="row" href="" data-bs-toggle="tooltip" data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='../includes/img/items/<?php echo $item['img']; ?>' />">
        <img class="rounded-circle" width="80px" height="80px" src="../includes/img/items/<?php echo $item['img']; ?>" />
      </a>
    <?php else : ?>
        <img class="" width="50px" height="50px" src="../includes/img/admin_minecraft.png" />
    <?php endif ?>

    </h5>

<form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data" action="">
    <!-- class="row g-3 needs-validation" -->

    <div class="col-md-12">
        <label for="img" class="form-label">Imagen: <?php echo $item['extension']; ?></label>
        <input type="file" class="form-control" name="img" id="img" value="<?php echo $item['img']; ?>">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-md-6">
        <label for="en" class="form-label">English</label>
        <input type="text" class="form-control" name="en" id="en" value="<?php echo $item['en'] ?>" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="es" class="form-label">Español</label>
        <input type="text" class="form-control" name="es" id="es" value="<?php echo $item['es'] ?>" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="col-md-6">
        <label id="class" class="form-label">Clase: <?php echo $item['class'] ?></label>
        <select class="form-select" name="class" id="class" value="<?php echo $item['class'] ?>">
            <option value="<?php echo $item['class'] ?>" selected>
            <?php if (empty($item['class'])) {
                echo "Seleccionar...";
            } else {
                echo $item['class'];
            }
            ?></option>
            <option value="Piedras preciosas, cristales y perlas">Piedras preciosas, cristales y perlas</option>
            <option value="Materiales">Materiales</option>
            <option value="Minerales">Minerales</option>
            <option value="Bloques">Bloques</option>
            <option value="Alimentos que se recogen">Alimentos que se recogen</option>
            <option value="Cuernos de cabra">Cuernos de cabra</option>
            <option value="Troncos">Troncos</option>
            <option value="Troncos Pelados">Troncos Pelados</option>
            <option value="Madera Pelada">Madera Pelada</option>
            <option value="Flores">Flores</option>
            <option value="Plantas-Semillas">Plantas-Semillas</option>
            <option value="Plantas de Nether">Plantas de Nether</option>
            <option value="Coral">Coral</option>
            <option value="Bloques de setas">Bloques de setas</option>
            <option value="Plantones-Retoños">Plantones-Retoños</option>
            <option value="Hojas">Hojas</option>
        </select>
        <div class="invalid-feedback">
            Please select a valid state.
        </div>
    </div>
    <div class="col-md-6">
        <label for="id" class="form-label">Id</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-laptop-code"></i></span>
            <input type="text" class="form-control" name="id" id="id" value="<?php echo $item['id'] ?>" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="idm" class="form-label">Id Minecraft</label>
        <input type="text" class="form-control" name="idm" id="idm" value="<?php echo $item['idm']; ?>">
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-md-6">
        <label for="data" class="form-label">Minecraft Value</label>
        <input type="text" class="form-control" name="data" id="data" value="<?php echo $item['data']; ?>">
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <br>
    <div class="text-center">
        <a href="../items/" class="btn btn-primary text-center"><i class="fa-solid fa-rectangle-xmark"></i> Cerrar</a>
        <button class="btn btn-danger text-center"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
    </div>
</form>

</div>
  <div class="card-footer text-muted text-center">
    Id: <?php echo $item['id'] ?>
  </div>
</div>

<?php include 'partials/footer.php'; ?>