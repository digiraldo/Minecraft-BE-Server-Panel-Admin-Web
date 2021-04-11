
<?php 
require 'scripts2.php';
require '../propiedades/editar.php'; 
?>

<?php if ($data[20]['data'] == "true") { ?>
  
<script>
toastr.<?php echo $data[20]['type']; ?>( '<?php echo $data[20]['txt']; ?>', '<?php echo $data[20]['name']; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "1000",
  "timeOut": "20000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
)
</script> 

  <?php } ?>

  <?php if ($data[21]['data'] == "true") { ?>

<script>
toastr.<?php echo $data[21]['type']; ?>( '<?php echo $data[21]['txt']; ?>', '<?php echo $data[21]['name']; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "500",
  "hideDuration": "1000",
  "timeOut": "21000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
)
</script> 

  <?php } ?>