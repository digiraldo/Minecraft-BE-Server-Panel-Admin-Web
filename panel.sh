#!/bin/bash
# Autor: Di Giraldo
# Instale las dependencias necesarias RClone y fuse para montar la nube
echo "tutorial de instalacion en: https://gorobeta.blogspot.com"
sleep 4s

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

sudo apt install git -y

cd ~
cd minecraftbe
sudo rm -rf panel
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web
sudo git clone https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web.git
cd Minecraft-BE-Server-Panel-Admin-Web

echo "======================================================================================="
Print_Style "Creando directorio panel..." "$CYAN"
sudo mv panel /home/usr/minecraftbe/
cd ~
cd minecraftbe
sleep 4s
sudo rm -rf Minecraft-BE-Server-Panel-Admin-Web