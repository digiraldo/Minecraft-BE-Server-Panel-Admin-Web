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

cd ~
echo "========================================================================="
Print_Style "Eliminando Servidor Minecraft" "$YELLOW"
sudo rm -rf minecraftbe
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
    echo -n "¿Instalar Servidor Minecrft Bedrock? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Crear copia de seguridad en la nube cloudname
        echo "========================================================================="
        echo "Buscano Archivos de Instalación..."
        echo "========================================================================="
        sleep 3s
        cd ~
        wget -O install.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/install.sh
        sudo chmod +x install.sh
        /bin/bash install.sh

    fi

sudo rm -rf uninstall.sh