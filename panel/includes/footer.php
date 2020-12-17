<script>

 function Confirmar(Mensaje) {
     return (confirm(Mensaje))?true:false     
 }


$(function () {
  $('[data-toggle="tooltip"]').tooltip({
    container: 'body',
    html:true
    })
  })



$(document).ready(function(){
  
  $('[data-toggle="popover"]').popover({
    html:true,
    container: 'body',
    trigger: 'hover focus',
    delay: 300,
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header bg-info text-white"></h3><div class="popover-body"></div></div>'
  });
  
});

</script>







<!-- <script>

<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"
            }
        } );
    } );
    </script>

$('[data-toggle="tooltip"]').tooltip({
                container: 'body',
                html: true
            });

            $('[data-toggle="popover"]').popover({
                html: true,
                container: 'body',
                trigger: 'hover focus',
                delay: 300,
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header bg-info text-white"></h3><div class="popover-body"></div></div>'
            });
</script> -->


