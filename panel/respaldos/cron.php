<?php 

# dirname
# servername
# usuario

/*
$ln = "0 4 * * * dirname/minecraftbe/servername/restart.sh";
$new_ln = "* * * * * dirname/minecraftbe/servername/restart.sh";
$output = shell_exec('sudo crontab -u usuario -l');
$output = str_replace($ln,$new_ln,$output);
file_put_contents('/tmp/crontab.txt', $output.PHP_EOL);
echo exec('crontab /tmp/crontab.txt'); 

$output = shell_exec('sudo crontab -u www-data -l');
$find="0 4 * * * dirname/minecraftbe/servername/restart.sh";
$replace="* * * * * dirname/minecraftbe/servername/restart.sh";
$output =str_replace($find, $replace,$output);
$file="/tmp/crontab.txt";
file_put_contents($file, $output);
#Luego escribe el nuevo contenido en crontab:
shell_exec("crontab ".$file); 

$outputb = shell_exec('sudo cat /tmp/crontab.txt');
echo "<pre>";
print_r($outputb);
echo "</pre>";

*/


echo "Datos de: sudo crontab -u www-data -l <br/>";
$output = shell_exec('sudo crontab -u www-data -l');
echo "<pre>";
print_r($output);
echo "</pre>";
echo "<br/>";
echo "<br/>";

echo "Datos de: sudo crontab -u usr -l <br/>";
$outputb = shell_exec('sudo crontab -u usr -l');
echo "<pre>";
print_r($outputb);
echo "</pre>";
echo "<br/>";
echo "<br/>";

echo "Datos de: sudo crontab -u root -l <br/>";
$outputc = shell_exec('sudo crontab -u root -l');
echo "<pre>";
print_r($outputc);
echo "</pre>";
echo "<br/>";
echo "<br/>";

echo "Datos de: sudo crontab -l <br/>";
$outputa = shell_exec('sudo crontab -l');
echo "<pre>";
print_r($outputa);
echo "</pre>";
echo "<br/>";
echo "<br/>";

echo "Datos de: sudo crontab -u parce -l <br/>";
$outputc = shell_exec('sudo crontab -u parce -l');
echo "<pre>";
print_r($outputc);
echo "</pre>";
echo "<br/>";
echo "<br/>";




// Este es sólo un ejemplo, los siguientes números
// serán diferentes dependiendo de su sistema

echo memory_get_usage() . "</br>"; // 36640

$a = str_repeat("Hello", 4242);

echo memory_get_usage() . "</br>  "; // 57960

unset($a);

echo memory_get_usage() . "</br>  "; // 36744


echo "</br>";
echo "</br>";


    // Returns used memory (either in percent (without percent sign) or free and overall in bytes)
    function getServerMemoryUsage($getPercentage=true)
    {
        $memoryTotal = null;
        $memoryFree = null;

        if (stristr(PHP_OS, "win")) {
            // Get total physical memory (this is in bytes)
            $cmd = "wmic ComputerSystem get TotalPhysicalMemory";
            @exec($cmd, $outputTotalPhysicalMemory);

            // Get free physical memory (this is in kibibytes!)
            $cmd = "wmic OS get FreePhysicalMemory";
            @exec($cmd, $outputFreePhysicalMemory);

            if ($outputTotalPhysicalMemory && $outputFreePhysicalMemory) {
                // Find total value
                foreach ($outputTotalPhysicalMemory as $line) {
                    if ($line && preg_match("/^[0-9]+\$/", $line)) {
                        $memoryTotal = $line;
                        break;
                    }
                }

                // Find free value
                foreach ($outputFreePhysicalMemory as $line) {
                    if ($line && preg_match("/^[0-9]+\$/", $line)) {
                        $memoryFree = $line;
                        $memoryFree *= 1024;  // convert from kibibytes to bytes
                        break;
                    }
                }
            }
        }
        else
        {
            if (is_readable("/proc/meminfo"))
            {
                $stats = @file_get_contents("/proc/meminfo");

                if ($stats !== false) {
                    // Separate lines
                    $stats = str_replace(array("\r\n", "\n\r", "\r"), "\n", $stats);
                    $stats = explode("\n", $stats);

                    // Separate values and find correct lines for total and free mem
                    foreach ($stats as $statLine) {
                        $statLineData = explode(":", trim($statLine));

                        //
                        // Extract size (TODO: It seems that (at least) the two values for total and free memory have the unit "kB" always. Is this correct?
                        //

                        // Total memory
                        if (count($statLineData) == 2 && trim($statLineData[0]) == "MemTotal") {
                            $memoryTotal = trim($statLineData[1]);
                            $memoryTotal = explode(" ", $memoryTotal);
                            $memoryTotal = $memoryTotal[0];
                            $memoryTotal *= 1024;  // convert from kibibytes to bytes
                        }

                        // Free memory
                        if (count($statLineData) == 2 && trim($statLineData[0]) == "MemFree") {
                            $memoryFree = trim($statLineData[1]);
                            $memoryFree = explode(" ", $memoryFree);
                            $memoryFree = $memoryFree[0];
                            $memoryFree *= 1024;  // convert from kibibytes to bytes
                        }
                    }
                }
            }
        }

        if (is_null($memoryTotal) || is_null($memoryFree)) {
            return null;
        } else {
            if ($getPercentage) {
                return (100 - ($memoryFree * 100 / $memoryTotal));
            } else {
                return array(
                    "total" => $memoryTotal,
                    "free" => $memoryFree,
                );
            }
        }
    }

    function getNiceFileSize($bytes, $binaryPrefix=true) {
        if ($binaryPrefix) {
            $unit=array('B','KiB','MiB','GiB','TiB','PiB');
            if ($bytes==0) return '0 ' . $unit[0];
            return @round($bytes/pow(1024,($i=floor(log($bytes,1024)))),2) .' '. (isset($unit[$i]) ? $unit[$i] : 'B');
        } else {
            $unit=array('B','KB','MB','GB','TB','PB');
            if ($bytes==0) return '0 ' . $unit[0];
            return @round($bytes/pow(1000,($i=floor(log($bytes,1000)))),2) .' '. (isset($unit[$i]) ? $unit[$i] : 'B');
        }
    }

    // Memory usage: 4.55 GiB / 23.91 GiB (19.013557664178%)
    $memUsage = getServerMemoryUsage(false);
    echo sprintf("Memory usage: %s / %s (%s%%)" . "</br>",
        getNiceFileSize($memUsage["total"] - $memUsage["free"]),
        getNiceFileSize($memUsage["total"]),
        getServerMemoryUsage(true)
    );

    echo "</br>";
    echo "</br>";


$ramusado = $memUsage["total"] - $memUsage["free"];
$ramtotal = $memUsage["total"];
$ramlibre = $memUsage["free"];

    $ramporcentaje = round($ramusado/$ramtotal*100);

    if ($ramporcentaje < 30) {
        $ramcolorPorcentaje = 'success';
        $ramcolorIcono = 'CEFFCD';
      } elseif ($ramporcentaje > 31 && $ramporcentaje < 70) {
        $ramcolorPorcentaje = 'info';
        $ramcolorIcono = 'CDF5FF';
      } elseif ($ramporcentaje > 71 && $ramporcentaje < 94) {
        $ramcolorPorcentaje = 'warning';
        $ramcolorIcono = 'FFFDCD';
      } elseif ($ramporcentaje > 95) {
        $ramcolorPorcentaje = 'danger';
        $ramcolorIcono = 'FFCDCD';
      }
      
echo "Usado: ".$ramusado . "</br>";
echo "De: ".$ramtotal . "</br>";

echo $ramlibre . "</br>";

echo $ramporcentaje . " %" . "</br>";

echo "</br>";
echo "</br>";

$usadoram = getNiceFileSize($ramusado);
$totalram = getNiceFileSize($ramtotal);
$libreram = getNiceFileSize($ramlibre);
echo "Usado: ".$usadoram . "</br>";
echo "De: ".$totalram . "</br>";

echo $libreram . "</br>";

echo $ramporcentaje . " %" . "</br>";


?>