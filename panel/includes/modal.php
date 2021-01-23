<?php if ($mostrarModal) {?> 
    <script>
        $('#modalPropiedades').modal('show');
        </script>
    <?php }?>

<?php if ($mostrarModal) {?> 
    <script>
        $('#modalMundo').modal('show');
        </script>
    <?php }?>

    <?php if ($mostrarModal) {?> 
    <script>
        $('#modalPermiso').modal('show');
        </script>
    <?php }?>

<?php if ($mostrarModal) {?> 
    <script>
        $('#modalUsuario').modal('show');
        </script>
    <?php }?>

<?php if ($mostrarModal) {?> 
    <script>
        $('#modalRespaldos').modal('show');
        </script>
    <?php }?>


    
    <script>
    
    function Confirmar(Mensaje) {
        return (confirm(Mensaje))?true:false     
    }


</script>