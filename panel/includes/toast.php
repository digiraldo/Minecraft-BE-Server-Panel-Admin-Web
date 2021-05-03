<?php
//require 'scripts2.php';
require '../propiedades/editar.php';
?>

<?php if ($data[20]['data'] == "true") { ?>
  
  <script>
  toastr.<?php echo $data[20]['type']; ?>('<?php echo $data[20]['txt']; ?>', '<?php echo $data[20]['name']; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "1000",
  "timeOut": "20000",
  "extendedTimeOut": "2000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "slideDown",
  "hideMethod": "slideUp"
  }
  )
  </script> 
  
    <?php } ?>
  

    <?php if ($data[21]['data'] == "true") { ?>
  
  <script>

  toastr.<?php echo $data[21]['type']; ?>('<?php echo $data[21]['txt']; ?>', '<?php echo $data[21]['name']; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "1000",
  "timeOut": "21000",
  "extendedTimeOut": "2000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "slideDown",
  "hideMethod": "slideUp"
  }
  )
  </script> 
  
    <?php } ?>

<!---->
<a href="../propiedades/reglas.php"></a>


<?php if (empty($data[18]['name']) && $data[23]['data'] == "true") : ?>

<?php if ($_SESSION['id_rol'] == 0 || $_SESSION['id_rol'] == 1 || $_SESSION['id_rol'] == 2) { ?>
    <script>
toastr.error('Insertar título y establecer las normas del juego o mundo en Editar.<br /><br /><a href="../propiedades/reglas.php" type="button" class="btn btn-dark btn-sm"><i class="fas fa-pen-square"></i> Editar</a>', 'Insertar Título', {
"closeButton": true,
"debug": false,
"newestOnTop": true,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "500",
"hideDuration": "1000",
"timeOut": "22000",
"extendedTimeOut": "22000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "slideDown",
"hideMethod": "slideUp"
}
)
</script> 
<?php } ?>

<?php else : ?>

<?php endif ?>