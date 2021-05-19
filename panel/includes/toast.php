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




<?php if (empty($Informacion['Players'])) : ?>

<?php else : ?>
<script>
toastr.info('<a type="button" class="btn btn-dark btn-lg"><i class="fas fa-users"></i> En Línea: <span class="badge badge-light"><?php echo $Informacion['Players']; ?></span></a>', '¡Alerta de Jugadores!', {
"closeButton": true,
"debug": false,
"newestOnTop": true,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "500",
"hideDuration": "1000",
"timeOut": "26000",
"extendedTimeOut": "26000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "slideDown",
"hideMethod": "slideUp"
}
)
</script> 
<?php endif ?>


<?php if (empty($Informacion['Version'])) : ?>
  <script>
toastr.error('<a type="button" class="btn btn-dark btn-lg"><i class="fas fa-server"></i> Servidor: <span class="badge badge-light">Apagado</span></a>', '¡Alerta de Servidor!', {
"closeButton": true,
"debug": false,
"newestOnTop": true,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "500",
"hideDuration": "1000",
"timeOut": "26000",
"extendedTimeOut": "26000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "slideDown",
"hideMethod": "slideUp"
}
)
  </script> 
<?php else : ?>

<?php endif ?>


<?php if ($_SESSION['id_rol'] == 4 && !empty($data[18]['name']) && $data[19]['data'] == 'true'){  ?>
  <script>
  toastr.info('<?php if (!empty($data[18]['data'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data0'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data0']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data1'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data1']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data2'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data2']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data3'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data3']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data4'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data4']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data5'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data5']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data6'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data6']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data7'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data7']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data8'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data8']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data9'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data9']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data10'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data10']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data11'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data11']."<br>"; ?>
  <?php } ?>
  <?php if (!empty($data[18]['data12'])) { ?>
  <?php echo $data[18]['icon']; echo " ".$data[18]['data12']."<br>"; ?>
  <?php } ?>', '<i class="fas fa-edit" style="color: #DAF7A6;"></i> <?php echo strtoupper($data[18]['name'])."<br>"; ?>', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "600",
  "hideDuration": "1000",
  "timeOut": "50000",
  "extendedTimeOut": "20000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "slideDown",
  "hideMethod": "slideUp"
}
)
</script> 







<?php } ?>

