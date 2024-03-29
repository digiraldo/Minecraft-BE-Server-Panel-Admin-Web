#!/bin/bash
# 
# Instrucciones: https://github.com/LomotHo/minecraft-bedrock
# Instrucciones en Español: https://gorobeta.blogspot.com
# Repositorio de GitHub: https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web
# Crear Usuario https://noviello.it/es/como-crear-un-usuario-de-sudo-en-linux-debian/

# Function to read input from user with a prompt
function read_with_prompt {
  variable_name="$1"
  prompt="$2"
  default="${3-}"
  unset $variable_name
  while [[ ! -n ${!variable_name} ]]; do
    read -p "$prompt: " $variable_name </dev/tty
    if [ ! -n "$(which xargs)" ]; then
      declare -g $variable_name=$(echo "${!variable_name}" | xargs)
    fi
    declare -g $variable_name=$(echo "${!variable_name}" | head -n1 | awk '{print $1;}' | tr -cd '[a-zA-Z0-9]._-')
    if [[ -z ${!variable_name} ]] && [[ -n "$default" ]]; then
      declare -g $variable_name=$default
    fi
    echo -n "$prompt : ${!variable_name} -- accept (y/n)?"
    read answer </dev/tty
    if [[ "$answer" == "${answer#[Yy]}" ]]; then
      unset $variable_name
    else
      echo "$prompt: ${!variable_name}"
    fi
  done
}

 # sudo systemctl start $ServerName.service

cd ~
  DirName=$(readlink -e ~)
  UserName=$(whoami)
  www=/var/www

echo "========================================================================="
echo "========================================================================="
echo "========================================================================="


sudo apt update


# Instalar Nginx
echo -e "\e[35m Instalando nginx... \e[0m" #MORADO
sudo apt install nginx -y


# verificar qué perfiles UFW están disponibles
echo "========================================================================="
echo -e "\e[33m Perfiles UFW disponibles \e[0m" #AMARILLO
sudo ufw app list
sleep 1s
#Available applications:
#  Nginx Full
#  Nginx HTTP
#  Nginx HTTPS
#  OpenSSH


#permitir el tráfico HTTP normal en el puerto 80
echo "========================================================================="
echo -e "\e[32m Configurando el Panel de Administración... \e[0m" #VERDE
sudo ufw allow 'Nginx HTTP'
sleep 1s



# verificar el cambio muestra que ahora se permite el tráfico HTTP
echo "========================================================================="
echo -e "\e[33m muestra si se permite el tráfico HTTP \e[0m" #AMARILLO
sudo ufw enable
sleep 1s
sudo ufw status
sleep 3s
# Status: active
# 
# To                         Action      From
# --                         ------      ----
# OpenSSH                    ALLOW       Anywhere
# Nginx HTTP                 ALLOW       Anywhere
# OpenSSH (v6)               ALLOW       Anywhere (v6)
# Nginx HTTP (v6)            ALLOW       Anywhere (v6)


# Instalar PHP
echo "========================================================================="
echo -e "\e[35m Instalando php... \e[0m" #MORADO
sudo apt install php php-fpm -y




echo "======================================================================================="
echo -e "\e[36m Creando archivo panel.conf... \e[0m" #CIAN

# Creando directorio minecraftbe -----------------------------------------------
cd ~
sudo mkdir $DirName/minecraftbe
#sudo mkdir /var/www/minecraftbe

sudo chown -R $USER:$USER $DirName/minecraftbe
#sudo chown -R $USER:$USER /var/www/minecraftbe

sleep 1s
echo "======================================================================================="
sleep 1s

cd ~
cd /etc/nginx/sites-available
sudo cp default minecraftbe

cd ~
# Descarga panel.conf desde el repositorio
echo "Tomando panel.conf del repositorio..."
curl -H "Accept-Encoding: identity" -L -o panel.conf https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/raw/master/panel.conf
chmod +x panel.conf
sudo sed -i "s:dirname:$DirName:g" panel.conf
#sudo sed -i "s:dirname:$www:g" panel.conf
sudo mv panel.conf /etc/nginx/sites-available/minecraftbe

# Descarga version.php desde el repositorio
echo "Tomando version.php del repositorio..."
curl -H "Accept-Encoding: identity" -L -o version.php https://github.com/digiraldo/Minecraft-BE-Server-Panel-Admin-Web/raw/master/version.php
chmod +x version.php
sudo cp version.php $DirName/minecraftbe


cd ~
#cd minecraftbe
sudo cp version.php /var/www/html/
#sudo cp -r minecraftbe/ /var/www/goro/
#sudo cp -r directorio/ ruta_de_destino/nombre_copia

cd ~

echo "======================================================================================="
echo -e "\e[36m Mostrando la versión php instalada... \e[0m" #CIAN
sleep 1s
sudo php -v
echo "======================================================================================="

# Digitar la version php
echo "========================================================================="
echo "Configurar versión de php instalada:"
echo -e "\e[36m Ejemplo Valores permitidos: "7.2" o "7.4" o "8.1" \e[0m" #CIAN
read_with_prompt VePHP "Versión PHP" 8.1
echo "========================================================================="

# Ver la ip del equipo

echo -e "\e[35m Dirección IP accesible o pública \e[0m" #MORADO
dirección IP accesible

echo -e "\e[31m Dirección IP del Servidor... \e[0m" #ROJO
hostname -I
MYIPV4=$(hostname -I)
# echo "$MYIPV4"

# Digitar la ip del equipo
echo "========================================================================="
echo -e "\e[35m Introduzca la IP - IPV4 del servidor:  $MYIPV4 \e[0m" #MORADO
read_with_prompt IPV4 "Url o dirección IP del servidor" $MYIPV4
echo "========================================================================="

# Digitar el puerto a utilizar
echo "========================================================================="
echo -e "\e[35m Introduzca el puerto para el servidor web, Puerto predeterminado: 80 \e[0m" #MORADO
read_with_prompt Port "Numero del Puerto" 80
echo "========================================================================="


echo "======================================================================================="
echo -e "\e[33m cargando la configuración del servidor web... \e[0m" #AMARILLO
sudo systemctl reload nginx
sleep 1s
echo "======================================================================================="


cd ~
echo "======================================================================================="
echo -e "\e[33m Configurando la pagina web $IPV4:$Port/index.php... \e[0m" #AMARILLO
sudo sed -i "s:MiIPV4:$IPV4:g" /etc/nginx/sites-available/minecraftbe
sudo sed -i "s/80/$Port/g" /etc/nginx/sites-available/minecraftbe
sudo sed -i "s/versionphp/$VePHP/g" /etc/nginx/sites-available/minecraftbe
echo "========================================================================="
sleep 1s
sudo systemctl restart nginx
sleep 2s

echo "========================================================================="
echo -e "\e[36m Habilitando sitio añadido... \e[0m" #CIAN
cd ~
sudo ln -s /etc/nginx/sites-available/minecraftbe /etc/nginx/sites-enabled/
echo "========================================================================="
sleep 1s

# Desvinculando archivo de configuración predeterminado del directorio/sites-enabled/
sudo unlink /etc/nginx/sites-enabled/default


echo "========================================================================="
echo -e "\e[33m Configurando Permisos... \e[0m" #AMARILLO
cd ~
#Permisos de usuario:grupo y acceso sh desde la web
#Creando grupo Samba

#  sudo crontab -r -i
#  sudo userdel -r www-data
#  sleep 3s
#  sudo useradd www-data
#  sleep 3s
#  sudo addgroup www-data
#  sudo usermod -aG sudo www-data
#  sudo usermod $UserName -aG www-data
#  sudo usermod www-data -aG sudo
#  sudo usermod -a -G www-data root
echo "========================================================================="
echo "Se ha creado el usuario y el grupo www-data"
  # Print_Style "Por Favor digite la contraseña para el usuario www-data dos veces: " "$MAGENTA"
  # sudo smbpasswd -a www-data
echo "========================================================================="

#  sudo chown -hR $UserName:www-data minecraftbe
#  sudo sed -i '/www-data ALL=(ALL) NOPASSWD: ALL/d' /etc/sudoers
#  sudo sed -i '$a www-data ALL=(ALL) NOPASSWD: ALL' /etc/sudoers
#  sudo sed -n "/www-data ALL=(ALL) NOPASSWD: ALL/p" /etc/sudoers
#  sudo sed -i '/$UserName ALL=(ALL) NOPASSWD: ALL/d' /etc/sudoers
#  sudo sed -i '$a $UserName ALL=(ALL) NOPASSWD: ALL' /etc/sudoers
#  sudo sed -n "/$UserName ALL=(ALL) NOPASSWD: ALL/p" /etc/sudoers
#  sudo sed -i '/\%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab/d' /etc/sudoers
#  sudo sed -i '$a \%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab' /etc/sudoers
#  sudo sed -n "/\%developers ALL=(www-data)NOPASSWD:\/usr\/bin\/crontab/p" /etc/sudoers



sudo gpasswd -a www-data $UserName
sudo chmod g+x /$DirName && chmod g+x /$DirName/minecraftbe

sleep 2s

#Permisos del servidor
sudo chmod -R 775 $DirName/minecraftbe
sudo chown -hR $UserName:www-data minecraftbe


echo "========================================================================="
echo -e "\e[35m Verificando Servidor Web... \e[0m" #MORADO
sudo nginx -t
sleep 3s
echo "========================================================================="

echo "========================================================================="
echo -e "\e[35m Reiniciando Servidor Web...  \e[0m" #MORADO
sudo systemctl restart nginx
sudo service php$VePHP-fpm restart
sleep 1s
echo "========================================================================="

echo "."
echo "."

echo "========================================================================="
echo -e "\e[32m PANEL DE ADMINISTRACIÓN WEB CREADO \e[0m" #VERDE
echo "========================================================================="
echo "========================================================================="
echo -e "\e[36m Ingrese desde el navegador web con: \e[0m" #CIAN
echo -e "\e[31m http://$IPV4:$Port/ \e[0m" #ROJO
echo "========================================================================="

#   tail -f /var/log/nginx/error.log
# sudo service php8.1-fpm restart


