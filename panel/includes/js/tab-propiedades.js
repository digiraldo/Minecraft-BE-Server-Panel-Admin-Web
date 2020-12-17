$(document).ready(function() {
    tablaProductos = $("#tablaPropiedades").DataTable({ /*Cambiar $("#tablaProductos") igual que el container <table id="tablaProductos" */
        "drawCallback": function(settings) {

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

        },

        //Para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ Propiedades",
            "zeroRecords": "No se encontraron resultados",
            "info": "Registros del _START_ al _END_ de un total de _TOTAL_ Propiedades",
            "infoEmpty": "Registros del 0 al 0 de un total de 0 Propiedades",
            "infoFiltered": "(filtrado de un total de _MAX_ Propiedades)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });

});