$(document).ready(function() {
    tablaProductos = $("#tablaRespaldos").DataTable({ /*Cambiar $("#tablaProductos") igual que el container <table id="tablaProductos" */
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
            $('[data-toggle="toolt"]').popover({
                html: true,
                container: 'body',
                trigger: 'hover focus',
                delay: 300,
                template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header bg-info text-white"></h3><div class="popover-body"></div></div>'
            });

        },

        //Para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ Respaldos",
            "zeroRecords": "No se encontraron resultados",
            "info": "Registros del _START_ al _END_ de un total de _TOTAL_ Respaldos",
            "infoEmpty": "Registros del 0 al 0 de un total de 0 Respaldos",
            "infoFiltered": "(filtrado de un total de _MAX_ Respaldos)",
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