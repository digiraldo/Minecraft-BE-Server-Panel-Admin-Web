#!/bin/bash
# Este Script es para instalar la vesion de LomoHo con traduciones al español
#
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Para ejecutar el script de configuración, use:
# wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Docker/master/DockerMinecraft.sh
# chmod +x DockerMinecraft.sh
# ./DockerMinecraft.sh
#
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Docker

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
cd minecraftbe
sudo rm -rf panel
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web
sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
Print_Style "Creando directorio y configurando archivos del panel..." "$CYAN"
sudo mv panel /home/usr/minecraftbe/
sudo mv index.php /home/usr/minecraftbe/
sudo mv location /home/usr/minecraftbe/
sudo mv misitio.conf /home/usr/minecraftbe/
sudo mv web.sh /home/usr/minecraftbe/
cd ~
cd minecraftbe
sleep 4s
echo "======================================================================================="
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web