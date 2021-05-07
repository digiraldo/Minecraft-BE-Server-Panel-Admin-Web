<?php

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

    $memUsage = getServerMemoryUsage(false);
    sprintf("Memory usage: %s / %s (%s%%)" . "</br>",
        getNiceFileSize($memUsage["total"] - $memUsage["free"]),
        getNiceFileSize($memUsage["total"]),
        getServerMemoryUsage(true)
    );

$usadoram = $memUsage["total"] - $memUsage["free"]; // 6659776512
$totalram = $memUsage["total"]; // 8346107904
$libreram = $memUsage["free"]; // 1686331392

$ramporcentaje = round($usadoram/$totalram*100); // 80 %

    if ($ramporcentaje < 30) {
        $ramcolorPorcentaje = 'success';
        $ramcolorIcono = 'CEFFCD';
      } elseif ($ramporcentaje > 30 && $ramporcentaje < 70) {
        $ramcolorPorcentaje = 'info';
        $ramcolorIcono = 'CDF5FF';
      } elseif ($ramporcentaje > 70 && $ramporcentaje < 94) {
        $ramcolorPorcentaje = 'warning';
        $ramcolorIcono = 'FFFDCD';
      } elseif ($ramporcentaje > 94) {
        $ramcolorPorcentaje = 'danger';
        $ramcolorIcono = 'FFCDCD';
      }
      
// echo "Usado: ".$usadoram . "</br>";
// echo "De: ".$totalram . "</br>";

// echo $libreram . "</br>";

// echo $ramporcentaje . " %" . "</br>";

// echo "</br>";
// echo "</br>";

$ramusado = getNiceFileSize($usadoram); // 6.2 GiB
$ramtotal = getNiceFileSize($totalram); // 7.77 GiB
$ramlibre = getNiceFileSize($libreram); // 1.57 GiB



// echo "Usado: ".$ramusado . "</br>";
// echo "De: ".$ramtotal . "</br>";

// echo $ramlibre . "</br>";

// echo $ramporcentaje . " %" . "</br>";




?>