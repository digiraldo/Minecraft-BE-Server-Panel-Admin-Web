<?php if ($mostrarModal) { ?>
    <script>
        $('#modalPropiedades').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalMundo').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalPermiso').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalUsuario').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalRespaldos').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalAdmin').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalRegistro').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalRol').modal('show');
    </script>
<?php } ?>

<?php if ($mostrarModal) { ?>
    <script>
        $('#modalRegistrar').modal('show');
    </script>
<?php } ?>




<!---->
<?php //if ($mostrarToast) { ?>
    <script>
      //  $(document).ready(function() {
       //     $('.toast').toast('show');
      // });
    </script>
<?php //} ?>


<script>
    function Confirmar(Mensaje) {
        return (confirm(Mensaje)) ? true : false
    }
</script>