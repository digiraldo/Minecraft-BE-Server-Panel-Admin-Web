<?php
//require 'scripts.php';
require '../propiedades/editar.php';
?>

<style>
  .bs-alertas {
    margin: 30px;
  }
</style>
<script>
  $(document).ready(function() {
    $(".toast").toast();
  });
</script>

<div class="bs-alertas">
  <!-- Elemento de envoltura -->
  <div style="position: absolute; min-height: 300px;">
    <!-- Pocición toasts -->
    <div style="position: absolute; top: 0; right: 1; min-width: 300px;">
      <?php if ($data[20]['data'] == "true") { ?>
        <div class="toast text-white bg-<?php echo $data[20]['type']; ?>" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
          <div class="toast-header text-dark bg-outline-<?php echo $data[20]['type']; ?>">
            <strong class="mr-auto"><?php echo $data[20]['logo']; ?> Alerta!</strong>
            <small class="text-muted"><?php echo $data[20]['name']; ?></small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body"><b><?php echo $data[20]['txt']; ?></b></div>
        </div>
      <?php } ?>

      <?php if ($data[21]['data'] == "true") { ?>
        <div class="toast text-white bg-<?php echo $data[21]['type']; ?>" role="alert" aria-live="assertive" aria-atomic="true" data-delay="11000">
          <div class="toast-header text-dark bg-outline-<?php echo $data[21]['type']; ?>">
            <strong class="mr-auto"><?php echo $data[21]['logo']; ?> Alerta!</strong>
            <small class="text-muted"><?php echo $data[21]['name']; ?></small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
          </div>
          <div class="toast-body"><b><?php echo $data[21]['txt']; ?></b></div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>