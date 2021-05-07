<?php

$carpeta = "../../servername/backups";
$archivosr = scandir($carpeta);

$df = disk_free_space("/");
$ds = disk_total_space("/");
$do = $ds - $df;

$hddporcentaje = round($do/$ds*100);

// echo $ds. "</br>";
// echo $do. "</br>";
// echo $df. "</br>";

// echo $hddporcentaje."%". "</br>";

$hddusado = convert_filesize($do);
$hddtotal = convert_filesize($ds);
$hddlibre = convert_filesize($df);



function convert_filesize($bytes, $decimals = 1){
  $sizeRespaldos = array(' B',' kB',' MB',' GB',' TB', 'PB',' EB',' ZB',' YB');
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sizeRespaldos[$factor];
}

// Get file size
$sizeRespaldos = filesize($carpeta);

// Convert file size
//echo convert_filesize($size);

function folderSize_Respaldos ($dir)
{
    $size = 0;
    $contents = glob(rtrim($dir, '/').'/*', GLOB_NOSORT);

    foreach ($contents as $contents_value) {
        if (is_file($contents_value)) {
            $size += filesize($contents_value);
        } else {
            $size += realfolderSize_Respaldos($contents_value);
        }
    }

    return $size;
}

$sizef = folderSize_Respaldos($carpeta);

$ocupado = $sizef;
$almacenamiento = $data[24]['size']; // 5368709120 = 5 GB de almacenamiento
 
$formula = $ocupado/$almacenamiento*100;
$porcentaje2 = round($formula,2);
$porcentaje = round($ocupado/$almacenamiento*100);

//echo $ocupado.'<br>';
//echo $almacenamiento.'<br>';
//echo $formula2.'%'.'<br>';
//echo $porcentaje2.'%'.'<br>';
//echo $porcentaje.'%'.'<br>';
//echo $sizef.'<br>';

if ($porcentaje < 30) {
  $colorPorcentaje = 'success';
  $colorIcono = 'CEFFCD';
} elseif ($porcentaje > 30 && $porcentaje < 70) {
  $colorPorcentaje = 'info';
  $colorIcono = 'CDF5FF';
} elseif ($porcentaje > 70 && $porcentaje < 94) {
  $colorPorcentaje = 'warning';
  $colorIcono = 'FFFDCD';
} elseif ($porcentaje > 94) {
  $colorPorcentaje = 'danger';
  $colorIcono = 'FFCDCD';
}

if ($hddporcentaje < 30) {
  $hddcolorPorcentaje = 'success';
  $hddcolorIcono = 'CEFFCD';
} elseif ($hddporcentaje > 30 && $hddporcentaje < 70) {
  $hddcolorPorcentaje = 'info';
  $hddcolorIcono = 'CDF5FF';
} elseif ($hddporcentaje > 70 && $hddporcentaje < 94) {
  $hddcolorPorcentaje = 'warning';
  $hddcolorIcono = 'FFFDCD';
} elseif ($hddporcentaje > 94) {
  $hddcolorPorcentaje = 'danger';
  $hddcolorIcono = 'FFCDCD';
}

?>