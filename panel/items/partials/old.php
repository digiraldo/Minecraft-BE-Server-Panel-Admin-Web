<div class="col-md-6">
    <label id="inputGamertag" name="class" class="form-label">Clase:  <?php echo $item['class'] ?></label>
    <select class="form-select" id="validationCustom04" value="<?php echo $item['class'] ?>"  required>
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
    <label id="class" class="form-label">Clase:  <?php echo $item['class'] ?></label>
    <select class="form-select" name="class" id="class" value="<?php echo $item['class'] ?>" >
      <option value="<?php echo $item['class']?>" selected><?php echo $item['class']?></option>
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






  https://gist.github.com/internoma/5614419

<div class="col-md-6">
<label for="class" class="form-label">Clase:  <?php echo $item['class'] ?></label>
<select class="form-select" name="class" id="class" type="hidden" value="<?php echo $item['class'] ?>"  required>

<script type="text/javascript">

$(document).on('ready',function (){
     
    $.getJSON('../../config/idclass.json', function(data) {
        $.each(data, function(key, value) {
            $("#class").append('<option name="' + key + '">' + value + '</option>');
        }); // close each()
    }); // close getJSON()

});

</script>
<div class="invalid-feedback">
      Please select a valid state.
</div>
</div>


<!-- ------------------------ Index ------------------------ -->

<?php 
require 'items.php';

$items = getItems();
/* echo '<pre>'; var_dump($items); echo '</pre>'; */
/*  */

include 'partials/header.php';
?>

    <table class="table table-dark table-striped table-bordered display"  id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Img</th>
          <th scope="col">Item</th>
          <th scope="col">Acción</th>
        </tr>
      </thead>
      <tbody>
      <?php if(!empty($items)){ $count = 0; foreach($items as $item){ $count++; ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <th scope="row"><a scope="row" href="" data-bs-toggle="tooltip"  data-bs-html="true" title="<img class='rounded-lg' width='150px'  src='<?php echo $item['img']; ?>' />">
                        <img class="rounded-circle" width="50px" height="50px" src="<?php echo $item['img']; ?>" /></a>
          </th>         
          <th scope="row"><a href="# " data-bs-toggle="tooltip"  data-bs-html="true" title="
                        <i class='fas fa-language'></i>  <?php echo $item['en']; ?> <br>
                        <i class='fas fa-spell-check'></i>  <?php echo $item['class']; ?> <br>
                        <i class='fas fa-list-alt'></i>  <?php echo $item['id']; ?>
                        ">
                        <?php echo $item['es']; ?></a>
          </th>
          <th scope="row">
            <a href="view.php?id=<?php echo $item['id'] ?>" class="btn btn-warning" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Ver"><i class="fa-solid fa-eye"></i></a>
            <a href="update.php?id=<?php echo $item['id'] ?>" class="btn btn-info" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Editar"><i class="fas fa-edit"></i></a>
            <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Eliminar"><i class="fa-solid fa-trash-can"></i></a>
          </th>
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="6">No hay Item(s)</td></tr>
          <?php } ?>
      </tbody>
    </table>

    <?php include 'partials/footer.php'; ?>



    <?php if (isset($item['extension'])): ?>
        <img class="rounded-circle" style="width: 50px" src="<?php echo "../includes/img/items/${item['img']}.${item['extension']}" ?>" alt="">
    <?php endif; ?>



<!--      ----------------- update -----------------     -->
<?php
if (isset($_FILES['img'])) {
      if (!is_dir(__DIR__ . "/../includes/img/items2")) {
        mkdir(__DIR__ . "/../includes/img/items2");
      }
      // Obtener la extensión de archivo del nombre de archivo
      $itemImgName = $_FILES['img']['name'];
      // Busque el punto en el nombre del archivo
      $dotPosition = strpos($itemImgName, '.');
      // Tome la subcadena desde la posición del punto hasta el final de la cadena
      $extencion = substr($itemImgName, $dotPosition + 1);

      move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ . "/../includes/img/items2/$itemId.$extencion");
      
      $item['extension'] = $extencion;
      updateItem($item, $itemId);
    }







    if (isset($_FILES['img'])) {
      if (!is_dir(__DIR__ . "/../includes/img/items2")) {
        mkdir(__DIR__ . "/../includes/img/items2");
      }
      // Obtener la extensión de archivo del nombre de archivo
      $itemImgName = $_FILES['img']['name'];
      $directorio = "/../includes/img/items2/";

      // Busque los dos puntos en el nombre del id de minecraft
      $pointsPosition = strpos($itemId, ':');
      // Tome la subcadena desde la posición de los dos puntos hasta el final de la cadena
      $nameId = substr($itemId, $pointsPosition + 1);


      // Busque el punto en el nombre del archivo subido
      $dotPosition = strpos($itemImgName, '.');
      // Tome la subcadena desde la posición del punto hasta el final de la cadena del archivo
      $extencion = substr($itemImgName, $dotPosition + 1);

      /* move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ . $directorio . $itemImgName); */
      move_uploaded_file($_FILES['img']['tmp_name'], __DIR__ . "/../includes/img/items2/$nameId.$extencion");
      echo '<pre>'; var_dump($directorio.$nameId.'.'.$extencion); echo '</pre>';
      
      $item['extension'] = $extencion;
      $item['img'] = $nameId.'.'.$extencion;
      updateItem($item, $itemId);
    }
?>