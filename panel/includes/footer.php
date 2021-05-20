
<!-- Footer -->
<footer class="text-center text-white bg-dark">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <p>Panel Realizado Por <a href="https://gorobeta.blogspot.com/2021/04/instalar-minecraft-bedrock-edition-panel-admin.html" data-toggle="tooltip" title="Ver Tutorial Instalación">digiraldo</a>
  | Repositorio <i class="fab fa-github"></i><a href="https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web
" data-toggle="tooltip" title="Ver Repositorio">digiraldo</a>
  </p> <br>
</footer>



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


