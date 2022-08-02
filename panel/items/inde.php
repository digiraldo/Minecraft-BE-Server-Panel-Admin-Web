<?php 
require 'items.php';

$items = getItems();
/* echo '<pre>'; var_dump($items); echo '</pre>'; */
/*  */
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
<title>Items</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="../includes/css/style.css">
    <?php include "../includes/scripts.php" ?>
</head>
<body>
<div class="table-responsive">
    <table class="table table-dark table-striped table-bordered"  id="tablaItems">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Img</th>
          <th scope="col">Desc</th>
          <th scope="col">Clase</th>
          <th scope="col">Id</th>
          <th scope="col">Acc</th>
        </tr>
      </thead>
      <tbody>
      <?php if(!empty($items)){ $count = 0; foreach($items as $item){ $count++; ?>
        <tr>
          <th scope="row"><?php echo $count; ?></th>
          <th scope="row"><a scope="row" href="#" data-toggle="tooltip" data-placement="right" title="<img class='rounded-lg' width='150px'  src='<?php echo $item['img']; ?>' />">
                        <img class="rounded-circle" width="50px" height="50px" src="<?php echo $item['img']; ?>" /></a></th>         
          <th scope="row"><a href="# " data-toggle="tooltip" data-placement="right" title="<i class='fas fa-language'></i>  <?php echo $item['en']; ?>">
                        <?php echo $item['es']; ?></a></th>
          <th scope="row"></th>
          <th scope="row"></th>
          <th scope="row">

          </th>
        </tr>
        <?php } }else{ ?>
            <tr><td colspan="6">No hay Item(s)</td></tr>
            <?php } ?>
      </tbody>
    </table>
</div>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<script>
  $(document).ready(function () {
    // Create DataTable
    var table = $('#myTable').DataTable({
        dom: 'Pfrtip',
        //Para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ Items",
            "zeroRecords": "No se encontraron resultados",
            "info": "Registros del _START_ al _END_ de un total de _TOTAL_ Items",
            "infoEmpty": "Registros del 0 al 0 de un total de 0 Items",
            "infoFiltered": "(filtrado de un total de _MAX_ Items)",
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
 
    // Create the chart with initial data
    var container = $('<div/>').insertBefore(table.table().container());
 
    var chart = Highcharts.chart(container[0], {
        chart: {
            type: 'pie',
        },
        title: {
            text: 'Staff Count Per Position',
        },
        series: [
            {
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(1, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}
</script>





<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    });
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });

    $(document).ready( function () {
    $('#myTable').DataTable({
        //Para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ Items",
            "zeroRecords": "No se encontraron resultados",
            "info": "Registros del _START_ al _END_ de un total de _TOTAL_ Items",
            "infoEmpty": "Registros del 0 al 0 de un total de 0 Items",
            "infoFiltered": "(filtrado de un total de _MAX_ Items)",
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
} );


</script>
</body>
</html>