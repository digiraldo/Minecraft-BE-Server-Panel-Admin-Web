<a href="index.php" type="button" class="btn btn-info" id="">Cerrar</a>

<?php include "../includes/scripts.php"; $mostrarToast=true; ?>

<div id="toast3" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
  <div class="toast-header">
    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      <rect width="100%" height="100%" fill="#ff0000"></rect>
    </svg>
    <strong class="mr-auto">Alerta</strong>
    <small>Error de Id</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="toast-body">
    <strong>Rol no Encontrado!</strong> No tiene permisos ...
  </div>
</div>


<?php if ($mostrarToast) { ?>
  <script>
    $(document).ready(function() {
      $('.toast').toast('show');
    });
  </script>
<?php } ?>