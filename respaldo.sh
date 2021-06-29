#!/bin/bash
# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
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


# Change directory to server directory
cd /home/parce/minecraftbe/parceros

# Take ownership of server files and set correct permissions
Permissions=$(chown -R parce /home/parce/minecraftbe/parceros >/dev/null)
Permissions=$(chmod -R 755 /home/parce/minecraftbe/parceros/*.sh >/dev/null)

# Create backup
if [ -d "worlds" ]; then
    echo "Copia de seguridad del servidor (en la carpeta minecraftbe/parceros/backups)"
    zip -r backups/$(date +%Y.%m.%d.%H.%M.%S).zip worlds
fi



# RESPALDO EN DRIVE
#sudo rsync -avz /home/parce/minecraftbe/parceros/backups/ /home/parce/drive/drive


echo "========================================================================="
if [ -d /home/parce/drive/drive/ ];
then
#cd ~
#cd minecraftbe
#cd servername
sudo rsync -avz /home/parce/minecraftbe/parceros/backups/ /home/parce/drive/drive
echo "Creando copia de seguridad en la nube ..."
else
echo "No se encuentra habilitado copia de seguridad en la nube..."
fi
echo "========================================================================="
sleep 4s