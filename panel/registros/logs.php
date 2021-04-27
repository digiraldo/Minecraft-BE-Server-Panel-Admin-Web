<?php
$archivos = scandir("../../servername/logs");
$file = "../../servername/logs";
$dir = "../../servername/logs";
$carpeta = "../../servername/logs";
//$dir = "../../servername/logs";
$num = 0;

$logsb = scandir("../../servername/logs");
$numrb=0;
for ($i=2; $i<count($logsb); $i++)
{$numrb++;
  $registrosb = $numrb;
}

$filesize = $carpeta.'/'.filesize($logsb[$i]).' bytes';
//echo $filesize;

/**
$size = filesize($archivos[$key]);

foreach ($archivos as $key) {
  echo $size;
}
echo $archivos[$i];

 */





function folderSize ($dir)
{
    $size = 0;
    $contents = glob(rtrim($dir, '/').'/*', GLOB_NOSORT);

    foreach ($contents as $contents_value) {
        if (is_file($contents_value)) {
            $size += filesize($contents_value);
        } else {
            $size += realFolderSize($contents_value);
        }
    }

    return $size;
}
//echo folderSize('../../servername/logs').' bytes';