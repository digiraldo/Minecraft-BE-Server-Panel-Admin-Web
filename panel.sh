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

Print_Style "Instalando nginx, php, git..." "$MAGENTA"
sleep 4s

# Instale las dependencias necesarias para ejecutar el servidor de Minecraft en segundo plano
Print_Style "Instalando screen, unzip, sudo, net-tools, wget y otras dependencias..." "$CYAN"
if [ ! -n "`which sudo`" ]; then
  apt update && apt install sudo -y
fi
sudo apt update
sudo apt install nginx -y
sudo apt install -y software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt -y install libapache2-mod-php
sudo apt-get install php7.4 -y
sudo apt-get install ssh -y
sudo apt install git -y


Print_Style "Configurando el Panel de Administración..." "$GREEN"
sleep 3s

cd ~
cd minecraftbe
#sudo rm -rf panel
#sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web
#sudo rm -rf index.php
#sudo rm -rf location
#sudo rm -rf misitio.conf
#sudo rm -rf web.sh
sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
Print_Style "Creando directorios y archivos del panel..." "$CYAN"
sudo mv panel /home/usr/minecraftbe/
sudo mv index.php /home/usr/minecraftbe/
sudo mv location /home/usr/minecraftbe/
sudo mv misitio.conf /home/usr/minecraftbe/
sudo mv web.sh /home/usr/minecraftbe/
cd ~
cd minecraftbe
sleep 4s
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web

# Modificar archivo default para integrar el servidio de php
#cd /
sudo chmod +x /etc/nginx/sites-available/default
echo "======================================================================================="
echo "======================================================================================="
Print_Style "Agreando index.php a Ngnix..." "$GREEN"
sleep 1s
echo "======================================================================================="
#sudo sed -i "s/# Allow non-root users to specify the allow_other or allow_root mount options./ Allow non-root users to specify the allow_other or allow_root mount options./g" >
sudo sed -i "s/index index.html index.htm index.nginx-debian.html;/index index.html index.php index.htm index.nginx-debian.html;/g" /etc/nginx/sites-available/default
sudo sed -n "/# Add index.php to/p" /etc/nginx/sites-available/default
sudo sed -n "/index index.html index.php index.htm index.nginx-debian.html;/p" /etc/nginx/sites-available/default
echo "======================================================================================="
sleep 2s
echo "======================================================================================="

Print_Style "Configurando location de PHP en Ngnix..." "$GREEN"
sleep 1s

sudo sed -i '/# pass PHP scripts to FastCGI server/ {
r location
d}' /etc/nginx/sites-available/default
sleep 4s

echo "======================================================================================="
Print_Style "Obteniendo Resultados..." "$MAGENTA"
sleep 2s
sudo sed -n "/# pass PHP scripts/p" /etc/nginx/sites-available/default
sudo sed -n "/location ~ /p" /etc/nginx/sites-available/default
sudo sed -n "/include snippets\/fastcgi-php.conf;/p" /etc/nginx/sites-available/default
sudo sed -n "/fastcgi_pass unix:\/var\/run\/php\/php7.4-fpm.sock;/p" /etc/nginx/sites-available/default
echo "======================================================================================="
sleep 4s

echo "======================================================================================="
Print_Style "cargando la configuración del servidor web..." "$YELLOW"
sudo systemctl reload nginx
sleep 3s
echo "======================================================================================="

echo "======================================================================================="
Print_Style "Mostrando la versión php isntalada..." "$CYAN"
sleep 3s
sudo php -v
echo "======================================================================================="

echo "======================================================================================="
Print_Style "Sincronizando Pagina Web con el Servidor de Minecraft..." "$GREEN"
sleep 2s

echo "======================================================================================="
Print_Style "Creando archivo misitio.conf..." "$CYAN"
sudo rm -rf /etc/nginx/sites-available/misitio.conf
sleep 2s
sudo mv minecraftbe/misitio.conf /etc/nginx/sites-available

# Ver la ip del equipo
Print_Style "Direccion IP del Servidor..." "$RED"
hostname -I
sleep 3s

# Digitar la ip del equipo
echo "========================================================================="
Print_Style "Introduzca la IP - IPV4 del servidor: " "$MAGENTA"
read_with_prompt IPV4 "Puerto IPV4 del servidor"
echo "========================================================================="

Print_Style "Configurando la pagina web $IPV4/index.php..." "$YELLOW"
sudo sed -i "s/MiIPV4/$IPV4/g" /etc/nginx/sites-available/misitio.conf
echo "========================================================================="
sleep 2s
#sudo sh -c "echo '$IPV4' >> minecraftbe/server.ip"

echo "========================================================================="
Print_Style "Habilitando sitio añadido..." "$CYAN"
cd /
cd etc
cd nginx
cd sites-enabled
sudo ln -s ../sites-available/misitio.conf misitio.conf
echo "========================================================================="
sleep 2s

echo "========================================================================="
Print_Style "Configurando Permisos..." "$YELLOW"
cd ~
sudo chown -hR www-data:www-data minecraftbe
sleep 2s


echo "========================================================================="
Print_Style "Verificando Servidor Web... " "$MAGENTA"
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
Print_Style "Reiniciando Servidor Web... " "$MAGENTA"
sudo systemctl restart nginx
echo "========================================================================="

echo "."
echo "."

echo "========================================================================="
Print_Style "PANEL DE ADMINISTRACIÓN WEB CREADO" "$GREEN"
echo "========================================================================="
echo "========================================================================="
Print_Style "Ingresed desde el navegador web con:" "$CYAN"
Print_Style "http://$IPV4/" "$RED"
echo "========================================================================="
echo ""
echo ""
echo ""
echo ""
echo "         _ _ _ _ _ _"
echo "      ._|=|=|=|=|=|=|_._._"
echo "      |=|_|_|_|_|_|_|=|X|x|"
echo "        |=|=|=|=|=|_|_|x|X|"
echo "                  |X|_|_|=|_"
echo "              ._|X|x|X|_|_|=|"
echo "            ._|X|x|X| |=|_|=|"
echo "          ._|X|x|X|   |=|_|=|"
echo "        ._|X|x|X|     |=|_|=|"
echo "      ._|X|x|X|       |=|_|=|"
echo "    ._|X|x|X|           |=|"
echo "  ._|X|x|X|"
echo "._|X|x|X|"
echo "|X|x|X|"
echo "|X|X|"
sleep 6s
echo ""
echo ""
echo ""
echo ""
echo ""
