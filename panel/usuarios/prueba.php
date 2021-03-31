<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>

    <div class="container text-center">
        <div class="input-group">
            <span class="input-group-addon">Localidad:</span>
            <select class="form-control" id="selectLocalidad" onchange="aplicarFiltro()">
                <option id="loc0">Seleccionar</option>
            </select>
        </div>

        <div class="input-group">
            <span class="input-group-addon">Especialidad:</span>
            <select class="form-control" id="selectEspecialidad" onchange="aplicarFiltro()">
                <option id="esp0">Seleccionar</option>
            </select>
        </div>
    </div>

    <br>

    <div class="row" id="rowImg">
    </div>


    </br>

    <div class="page-header">
    <h1>Alumnos</h1>
</div>

<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <label>Alumnos</label>
            <select id="slt-alumnos" class="form-control">
                <option value="" selected>Seleccione un alumno</option>
                <?php foreach($alumnos as $a): ?>
                    <option value="<?php echo $a->id; ?>"><?php echo $a->Nombre; ?></option>
                <?php endforeach; ?>
            </select>
        </div>        
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <label>Cursos asignados</label>
            <select id="slt-cursos" class="form-control"></select>
        </div>        
    </div>
</div>

    </br>
    </br>


    <div id="dni"></div>
    <div id="nombre"></div>
    <div id="edad"></div>
    <script src="../includes/js/select_rol.js"></script>
    <script src="../../config/usradmin.json"></script>
</body>

</html>