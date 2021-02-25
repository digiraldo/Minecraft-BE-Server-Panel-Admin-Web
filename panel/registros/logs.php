<?php
$archivos = scandir("../../servername/logs");
$num = 0;

$logsb = scandir("../../servername/logs");
$numrb=0;
for ($i=2; $i<count($logsb); $i++)
{$numrb++;
  $registrosb = $numrb;
}
