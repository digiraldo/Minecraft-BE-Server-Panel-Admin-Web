<?php
include 'partials/header.php';

require __DIR__.'/items.php';

if (!isset($_GET['id'])) {
    /* echo "No Encontrado"; */
    include "partials/no_encontrado.php";
    exit;
}
$itemId = $_GET['id'];

$item = getItemsById($itemId);
echo '<pre>'; var_dump($item); echo '</pre>';
if (!$item) {
    /* echo "No Encontrado"; */
    include "partials/no_encontrado.php";
    exit;
}

/* echo '<pre>'; var_dump($class); echo '</pre>'; */
/* echo '<pre>'; var_dump($_SERVER); echo '</pre>'; */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /* updateItem($_POST); */
    echo '<pre>'; var_dump($_POST); echo '</pre>';
    /* echo '<pre>'; var_dump(explode("~",$_POST["class"])); echo '</pre>'; */
}

?>

<div class="card text-white bg-dark">
  <div class="card-header  text-center">
    <h4><i class="fa-solid fa-pen-to-square"></i> Editar: <b><?php echo $item['es'] ?></b></h4>
  </div>
  <div class="card-body">
    <h5 class="card-title  text-center">
    <a scope="row" href="" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='<?php echo $item['img']; ?>' />">
        <img width="80px" height="80px" src="<?php echo $item['img']; ?>" />
        </a>
    </h5>

<form class="row g-3 needs-validation" method="POST" enctype="multipart/form-data" action="">

  <div class="form-file col-md-12">
    <label for="img" class="form-label">Imagen: <p><?php echo $item['img'] ?></p></label>
    <input type="file" class="form-control" name="img" id="img" value="<?php echo $item['img'] ?>">
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
    <label for="class" class="form-label">Clase:  <?php echo $item['class'] ?></label>
    <select class="form-select" name="class" id="class" type="hidden" value="<?php echo $item['class'] ?>"  required>
      <option value="<?php echo $item['class'] ?>" selected>
        <?php if (empty($item['class'])) {
            echo "Seleccionar...";
        } else {
            echo $item['class'];
        }
        ?></option>
        <?php 
            /* $class = getClass(); */
            foreach ($class as $clas): 
        ?>
        <?php
            echo "<option value=".$clas['clase']." select>".$clas['clase']."</option>";                          
        ?>
        <?php endforeach;; ?>
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
    <input type="text" class="form-control" name="idm" id="idm" value="<?php echo $item['idm'] ?>" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-md-6">
    <label for="data" class="form-label">Minecraft Value</label>
    <input type="text" class="form-control" name="data" id="data" value="<?php echo $item['data'] ?>" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <br>
<div class="text-center">
   <a href="../pag/" class="btn btn-primary text-center"><i class="fa-solid fa-rectangle-xmark"></i> Cerrar</a>
   <a href="../pag/" class="btn btn-danger text-center"><i class="fa-solid fa-floppy-disk"></i> Guardar</a>
   <button  class="btn btn-warning text-center"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
</div>
</form>


  </div>
  <div class="card-footer text-muted text-center">
  Id: <?php echo $item['id'] ?>
  </div>
</div>

<?php include 'partials/footer.php'; ?>