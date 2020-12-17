#!/bin/bash
# Autor: Di Giraldo
# Instale las dependencias necesarias RClone y fuse para montar la nube
echo "tutorial de instalacion en: https://gorobeta.blogspot.com"
sleep 4s

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

# Configuración de juego en el servidor
echo "Configuración del Servidor: servername"
sleep 3s

echo "========================================================================="
echo "Usado como nombre del servidor (predeterminado Servidor): "
Print_Style "Valores permitidos: cualquier cadena: " "$CYAN"
read_with_prompt SerVer "Nombre del Servidor" Servidor
echo "========================================================================="

echo "========================================================================="
echo "Usado como nombre de nivel o mundo (predeterminado Bedrock level con no (n) ): "
Print_Style "Valores permitidos: cualquier cadena: " "$CYAN"
read -p "Nombre del Nivel: " LevelName
if [ "$LevelName" != "" ]
then
    echo -n "¿Nombre de Nivel: $LevelName -- aceptar? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
    sudo sed -i "/level-name=/c\level-name=$LevelName" server.properties
    echo "========================================================================="
    sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del Nivel: ....... /'
    fi
else
    sudo sed -i "/level-name=/c\level-name=Bedrock level" server.properties
    sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del Nivel Actual ........ /'
fi

#echo "========================================================================="
#echo "Usado como nombre de nivel o mundo (predeterminado Bedrock level): "
#Print_Style "Valores permitidos: cualquier cadena: " "$CYAN"
#read_with_prompt LevelName "Nombre del Nivel" Bedrock level
#echo "========================================================================="

echo "========================================================================="
echo "Establece el modo de juego para nuevos jugadores (predeterminado survival): "
Print_Style "Valores permitidos: "survival", "creative", o "adventure": " "$CYAN"
read_with_prompt GamMode "Modo del Juego" survival
echo "========================================================================="

echo "========================================================================="
echo "Establece la dificultad del mundo (predeterminado easy): "
Print_Style "Valores permitidos: "peaceful", "easy", "normal", o "hard": " "$CYAN"
read_with_prompt Difficult "Dificultad del Mundo" easy
echo "========================================================================="

echo "========================================================================="
echo "Si es verdadero (true), se pueden usar trucos como comandos (predeterminado false): "
Print_Style "Valores permitidos: "true" o "false": " "$CYAN"
read_with_prompt AllowCheats "Usar Trucos" false
echo "========================================================================="

echo "========================================================================="
echo "El número máximo de jugadores que pueden jugar en el servidor (predeterminado 10): "
Print_Style "Valores permitidos: Cualquier entero positivo: " "$CYAN"
read_with_prompt MaxPlayers "Número Máximo de Jugadores" 10
echo "========================================================================="

echo "========================================================================="
echo "Si es verdadero (true), debe dar permiso a jugadores en el archivo whitelist.json (predeterminado false): "
Print_Style "Valores permitidos: "true" o "false": " "$CYAN"
read_with_prompt WhiteList "Permiso de Jugadores" false
echo "========================================================================="

echo "========================================================================="
echo "Introduzca el puerto IPV4 del servidor (predeterminado 19132): "
read_with_prompt PortIPV4 "Puerto IPV4 del servidor" 19132
echo "========================================================================="

echo "========================================================================="
echo "Introduzca el puerto IPV6 del servidor (predeterminado 19133): "
read_with_prompt PortIPV6 "Puerto IPV6 del servidor" 19133
echo "========================================================================="

echo "========================================================================="
echo "Semilla (mundo aleatorio predeterminado): "
Print_Style "Valores permitidos: cualquier cadena: " "$CYAN"
    echo -n "¿Deseas agregar un Códgo o Número de Semilla o Mundo? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Crear copia de seguridad
        if [ -d "worlds" ]; then
        echo "Copia de seguridad del servidor (en la carpeta minecraftbe/servername/backups)"
        sudo tar -pzvcf backups/$(date +%d.%m.%Y_%H.%M.%S_servername).tar.gz worlds
        fi
        #sudo rm -rf worlds
        #sudo mkdir worlds
        echo "========================================================================="
        read_with_prompt LevelSeed "Número de Semilla"
        echo "========================================================================="
    fi

echo "========================================================================="
echo "========================================================================="
Print_Style "Configurando el Servidor: servername ..." "$MAGENTA"
sudo sed -i "/server-name=/c\server-name=$SerVer" server.properties
sudo sed -i "/level-name=/c\level-name=$LevelName" server.properties
sudo sed -i "/gamemode=/c\gamemode=$GamMode" server.properties
sudo sed -i "/difficulty=/c\difficulty=$Difficult" server.properties
sudo sed -i "/allow-cheats=/c\allow-cheats=$AllowCheats" server.properties
sudo sed -i "/max-players=/c\max-players=$MaxPlayers" server.properties
sudo sed -i "/white-list=/c\white-list=$WhiteList" server.properties
sudo sed -i "/level-seed=/c\level-seed=$LevelSeed" server.properties
sudo sed -i "/server-port=/c\server-port=$PortIPV4" server.properties
sudo sed -i "/server-portv6=/c\server-portv6=$PortIPV6" server.properties

sleep 1s
sudo sed -n "/server-name=/p" server.properties | sed 's/server-name=/Para realizar los cambios se reiniciará el Servidor: .... /'
sleep 2s
sudo systemctl daemon-reload
sudo systemctl stop servername.service
if screen -list | grep -q "servername"; then
     # El servidor aún no se ha detenido después de 30 segundos, dígale a Screen que lo cierre
     Print_Style "El servidor de Minecraft aún no se ha cerrado. -- Cerrando la pantalla..." "$RED"
     screen -S servername -X quit
     sleep 10
      fi
sudo systemctl start servername.service

sleep 2s

Print_Style "Servidor: servername Configurado..." "$GREEN"
echo "========================================================================="
sudo sed -n "/server-name=/p" server.properties | sed 's/server-name=/Nombre del Servidor: .... /'
sudo sed -n "/level-name=/p" server.properties | sed 's/level-name=/Nombre del Nivel: ....... /'
sudo sed -n "/gamemode=/p" server.properties | sed 's/gamemode=/Modo del Juego: ......... /'
sudo sed -n "/difficulty=/p" server.properties | sed 's/difficulty=/Dificultad del Mundo: ... /'
sudo sed -n "/allow-cheats=/p" server.properties | sed 's/allow-cheats=/Usar Trucos: ............ /'
sudo sed -n "/max-players=/p" server.properties | sed 's/max-players=/Jugadores Máximos: ...... /'
sudo sed -n "/white-list=/p" server.properties | sed 's/white-list=/Permiso de Jugadores: ... /'
sudo sed -n "/level-seed=/p" server.properties | sed 's/level-seed=/Número de Semilla: ...... /'
sudo sed -n "/server-port=/p" server.properties | sed 's/server-port=/Puerto IPV4: ............ /'
sudo sed -n "/server-portv6=/p" server.properties | sed 's/server-portv6=/Puerto IPV6: ............ /'
echo "========================================================================="
sleep 4s

echo "========================================================================="
    echo -n "¿Iniciar Configuracion de Copia de seguridad en la nube? (y/n)"
    read answer < /dev/tty
    if [ "$answer" != "${answer#[Yy]}" ]; then
      # Crear copia de seguridad en la nube cloudname
        echo "========================================================================="
        Print_Style "Iniciando copia de Seguridad con cloud.sh" "$YELLOW"
        echo "========================================================================="
        sleep 3s
        /bin/bash dirname/minecraftbe/servername/cloud.sh
    fi
