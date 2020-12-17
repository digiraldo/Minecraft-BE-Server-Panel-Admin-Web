#!/bin/bash
# Este Script es el mismo del autor James A. Chambers a diferencia que fue traducido al español (This Script is the same as that of the author James A. Chambers, unlike that it was translated into Spanish.)
# Autor: James Chambers
# Secuencia de comandos de inicio del servidor de Minecraft Bedrock usando la pantalla

# Compruebe si el servidor ya está iniciado
if screen -list | grep -q "servername"; then
    echo "¡El servidor ya está iniciado! para abrirlo escriba: screen -r servername"
    exit 1
fi

# Compruebe si las interfaces de red están activas
NetworkChecks=0
DefaultRoute=$(route -n | awk '$4 == "UG" {print $2}')
while [ -z "$DefaultRoute" ]; do
    echo "La interfaz de red no funciona, volverá a intentarlo en 1 segundo";
    sleep 1;
    DefaultRoute=$(route -n | awk '$4 == "UG" {print $2}')
    NetworkChecks=$((NetworkChecks+1))
    if [ $NetworkChecks -gt 20 ]; then
        echo "Se ha agotado el tiempo de espera de la interfaz de red: se inicia el servidor sin conexión de red ..."
        break
    fi
done

# Cambiar directorio al directorio del servidor
cd dirname/minecraftbe/servername

# Crear copia de seguridad
if [ -d "worlds" ]; then
    echo "Copia de seguridad del servidor (en la carpeta minecraftbe/servername/backups)"
    sudo tar -pzvcf backups/$(date +%d.%m.%Y_%H.%M.%S_servername).tar.gz worlds
fi

# Iniciar o comprobar inicio de Fuse en RClone
echo "========================================================================="
if [ -d dirname/cloudname/foldername/ ];
then
echo "La carpeta cloudname/foldername esta montada..."
else
sudo rclone mount rclonname: dirname/cloudname --allow-other &
echo "Montando RClone con Fuse..."
fi
echo "========================================================================="
sleep 4s

# Cambiar directorio al directorio de drive
#cd ~
#Crear Copia de seguridad en la nube (predeterminado Google Drive con RClone)  
#Tutorial de instalación de RClone y fuse https://github.com/digiraldo/Minecraft-BE-Server/blob/main/Copias%20de%20seguridad%20en%20la%20nube.md  
echo "========================================================================="
if [ -d dirname/cloudname/foldername/ ];
then
#cd ~
#cd minecraftbe
#cd servername
sudo rsync -avz dirname/minecraftbe/servername/backups/ dirname/cloudname/foldername
echo "Creando copia de seguridad en la nube ..."
else
echo "No se encuentra habilitado copia de seguridad en la nube..."
fi
echo "========================================================================="
sleep 4s

# Recupere la última versión del servidor dedicado Minecraft Bedrock
#cd ~
#cd minecraftbe
#cd servername
echo "Buscando la última versión del servidor Minecraft Bedrock ..."

# Pruebe primero la conectividad a Internet
wget --quiet http://www.minecraft.net/ -O /dev/null
if [ "$?" != 0 ]; then
    echo "No se puede conectar al sitio web para actualizar (es posible que la conexión a Internet no funcione). Omitiendo actualización ..."
else
    # Descargue index.html para verificar la última versión del servidor
    wget -O downloads/version.html https://minecraft.net/en-us/download/server/bedrock/
    DownloadURL=$(grep -o 'https://minecraft.azureedge.net/bin-linux/[^"]*' downloads/version.html)
    DownloadFile=$(echo "$DownloadURL" | sed 's#.*/##')

    # Descargue la última versión del servidor dedicado Minecraft Bedrock si hay uno nuevo disponible
    if [ -f "downloads/$DownloadFile" ]
    then
        echo "El servidor de Minecraft Bedrock está actualizado..."
    else
        echo "Nueva versión $DownloadFile está disponible.  Actualizando Servidor de Minecraft Bedrock ..."
        wget -O "downloads/$DownloadFile" "$DownloadURL"
        unzip -o "downloads/$DownloadFile" -x "*server.properties*" "*permissions.json*" "*whitelist.json*"
    fi
fi

echo "Iniciando el servidor de Minecraft. Para ver el inicio, escriba en el terminal: screen -r servername"
echo "Para minimizar la ventana y dejar que el servidor se ejecute en segundo plano, presione Ctrl+A luego Ctrl+D"
screen -L -Logfile logs/$(date +%Y.%m.%d.%H.%M.%S).log -dmS servername /bin/bash -c "LD_LIBRARY_PATH=dirname/minecraftbe/servername dirname/minecraftbe/servername/bedrock_server"
