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

cd ~

echo "========================================================================="
echo "Crea el Nombre de usuario (predeterminado user): "
Print_Style "Valores permitidos: "Maysculas", "Minusculas": Sin Espacios " "$CYAN"
read_with_prompt UserName "Nombre de Usuario" user
echo "========================================================================="


echo "========================================================================="
Print_Style "Creando Usuario $UserName" "$GREEN"
sudo useradd $UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Configurando contraseña del usuario $UserName"
sudo passwd $UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Creando directorio /home/$UserName"
sudo mkdir /home/$UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Creando Grupo para el usuario $UserName"
sudo chown $UserName:$UserName -R /home/$UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Generando Permisos"
sudo chmod 775 -R /home/$UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Asignando Directorio Principal: /home/$UserName   al Usuario: $UserName"
sudo usermod -d /home/$UserName $UserName
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Asignando Grupo: $UserName y root  a Usuario: $UserName"
sudo adduser $UserName $UserName
sudo adduser $UserName root
sleep 2s
sudo addgroup $UserName
sudo addgroup root
sleep 2s
echo "========================================================================="


echo "========================================================================="
Print_Style "Asignando shell: bash"
sudo usermod -s /bin/bash
sleep 2s
echo "========================================================================="



sudo chmod 755 -R /home/$UserName


#wget -O usr.sh https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/master/usr.sh
#sudo chmod +x usr.sh
#./usr.sh




# sudo useradd -m -g root -G www-data - s /bin/bash $UserName


# sudo useradd -m -g Usuarios -G gestion - s /bin/bash usuario
# Explicación:

#  -m: Crear automáticamente la carpeta del usuario el la carpeta /Home/<NombreUsuario>
#  -g: grupo principal al que sera agregado
#  -G: Grupos secundarios al que pertenecerá.
#  -s: Shell que utilizara por defecto el usuario.
#  usuario: Nombre del usuario.