#!/bin/sh
#croncmd="dirname/minecraftbe/servername/restart.sh"
#cronjob="0 4 * * * $croncmd"
(# crontab -l | grep -v -F "$croncmd" ; echo "$cronjob" ) | crontab -
$linea = " https://www.example.com";
$new_url = "https://www.example.com";
$output = shell_exec('crontab -l');
$output = str_replace($url,$new_url,$output);
file_put_contents('/tmp/crontab.txt', $output.PHP_EOL);
echo exec('crontab /tmp/crontab.txt');