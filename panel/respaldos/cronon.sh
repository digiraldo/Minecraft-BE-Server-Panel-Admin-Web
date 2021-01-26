#!/bin/sh
croncmd="dirname/minecraftbe/servername/restart.sh"
cronjob="0 4 * * * $croncmd"
( crontab -l | grep -v -F "$croncmd" ; echo "$cronjob" ) | crontab -