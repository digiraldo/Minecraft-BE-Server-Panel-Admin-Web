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