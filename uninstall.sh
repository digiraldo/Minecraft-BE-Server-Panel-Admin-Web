#!/bin/bash
# 
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web

# Colores del terminal
BLACK=$(tput setaf 0)
RED=$(tput setaf 1)
GREEN=$(tput setaf 2)
YELLOW=$(tput setaf 3)
LIME_YELLOW=$(tput setaf 190)
BLUE=$(tput setaf 4)
MAGENTA=$(tput setaf 5)
CYAN=$(tput setaf 6)
WHITE=$(tput setaf 7)
BRIGHT=$(tput bold)
NORMAL=$(tput sgr0)
BLINK=$(tput blink)
REVERSE=$(tput smso)
UNDERLINE=$(tput smul)

# Imprime una línea con color usando códigos de terminal
Print_Style() {
  printf "%s\n" "${2}$1${NORMAL}"
}

# Función para leer la entrada del usuario con un mensaje
function read_with_prompt {
  variable_name="$1"
  prompt="$2"
  default="${3-}"
  unset $variable_name
  while [[ ! -n ${!variable_name} ]]; do
    read -p "$prompt: " $variable_name < /dev/tty
    if [ ! -n "`which xargs`" ]; then
      declare -g $variable_name=$(echo "${!variable_name}" | xargs)
    fi
    declare -g $variable_name=$(echo "${!variable_name}" | head -n1 | awk '{print $1;}')
    if [[ -z ${!variable_name} ]] && [[ -n "$default" ]] ; then
      declare -g $variable_name=$default
    fi
    echo -n "$prompt : ${!variable_name} -- aceptar? (y/n)"
    read answer < /dev/tty
    if [ "$answer" == "${answer#[Yy]}" ]; then
      unset $variable_name
    else
      echo "$prompt: ${!variable_name}"
    fi
  done
}


  BackConfig=backub_config

cd ~
if [ ! -d "backub_config" ]; then
echo "El directorio ${BackConfig} no existe"
sudo mkdir backub_config
else
  cd backub_config
echo "El directorio ${BackConfig} existe"
sleep 2s
  Print_Style "===================SERVIDORES MONTADOS EN $BackConfig====================" "$CYAN"
  ls -l
  Print_Style "=========================================================================" "$CYAN"
  sleep 6s
  echo "========================================================================="
    Print_Style "Sincronizando y haciendo respaldo a los archivos de configuración..." "$RED"
    sleep 2s
    sudo rsync -avz --include='*.json' --include='*.properties' --exclude='*' dirname/minecraftbe/servername/ dirname/backub_config
    Print_Style "comprimiendo archivos de config..." "$RED"
    sleep 2s
    sudo zip -r dirname/backub_config/$(date +%Y.%m.%d_%H\:%M\:%S_Config_servername).zip dirname/minecraftbe/config
    echo "========================================================================="
    sleep 3s
fi


cd ~
echo "========================================================================="
Print_Style "Eliminando Servidor Minecraft" "$YELLOW"
sudo rm -rf minecraftbe
sudo rm -rf panel.sh
sudo rm -rf install.sh
sudo rm -rf SetupMinecraft.sh
echo "========================================================================="
Print_Style "Quitando libapache" "$MAGENTA"
sleep 2s
sudo apt-get purge --auto-remove libapache2-mod-php -y
echo "========================================================================="
Print_Style "Quitando Nginx" "$MAGENTA"
sleep 2s
sudo apt-get purge --auto-remove nginx -y
echo "========================================================================="
Print_Style "Quitando PHP" "$MAGENTA"
sleep 2s
sudo apt-get purge --auto-remove php-fpm -y
echo "========================================================================="
echo "========================================================================="
Print_Style "Buscando Version Apache" "$MAGENTA"
sleep 2s
sudo apache2 -v
echo "========================================================================="
sleep 3s
sudo systemctl stop apache2
Print_Style "Quitando Apache" "$MAGENTA"
sleep 2s
sudo apt remove apache2
sudo apt purge apache2
sudo apt-get --purge remove apache-common
sudo apt-get --purge remove apache
Print_Style "Eliminando Archivos de configuarcion de apache" "$BLUE"
sudo find /etc -name "*apache*" |xargs  rm -rf 
sudo rm -rf /var/www
sudo rm -rf /etc/libapache2-mod-jk
sudo rm -rf /etc/init.d/apache2
sudo rm -rf /etc/apache2
Print_Style "Eliminando Asociacion de apache" "$BLUE"
dpkg -l |grep apache2|awk '{print $2}'|xargs dpkg -P
Print_Style "Eliminando Svn" "$BLUE"
sudo apt-get remove subversion
sudo apt-get remove libapache2-svn
Print_Style "verificar, si no hay retorno" "$YELLOW"
dpkg -l | grep apache y dpkg -l | grep apache2
echo "========================================================================="



echo "========================================================================="
    echo -n "¿Instalar Servidor Minecrft Bedrock? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Crear copia de seguridad en la nube cloudname
        echo "========================================================================="
        echo "Buscano Archivos de Instalación..."
        echo "========================================================================="
        sleep 3s
        cd ~
        wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/install.sh
        chmod +x install.sh
        ./install.sh
        #curl https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/install.sh | bash

        #wget -O install.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/install.sh
        #sudo chmod +x install.sh
        #/bin/bash install.sh

    fi

sudo rm -rf uninstall.sh
