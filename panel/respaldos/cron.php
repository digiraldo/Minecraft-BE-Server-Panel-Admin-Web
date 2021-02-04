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


$output = shell_exec('sudo crontab -u www-data -l');
echo "<pre>";
print_r($output);
echo "</pre>";
echo "<br/>";
echo "<br/>";



?>