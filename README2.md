# Minecraft Bedrock Edition Server

## Instalar Servidor Dedicado de Minecraft Bedrock Edition

Antes de iniciar hay que aclarar que el Servidor dedicado de Minecraft Bedrock Edition, es una versión compatible para jugar desde PC con Minecraft para Windows 10, en consolas las ediciones de PlayStation, XBOX y Nintendo Switch y para dispositivos móviles con sistema operativo iPhone y/o Android (anteriormente Minecraft Pocket Edition). Si deseas saber más sobre la versión puede consultarla aquí: https://translate.google.com/translate?sl=auto&tl=es&u=https://minecraft.gamepedia.com/Bedrock_Edition

## Características del Servidor Dedicado:
* Configura el servidor Minecraft Bedrock Edition completamente operativo en un par de minutos
* Soporta distribuciones Ubuntu / Debian
* Configura Minecraft como un servicio del sistema con la opción de iniciarse automáticamente al arrancar
* Copias de seguridad automáticas cuando se reinicia el servidor
* Se actualiza automáticamente a la última versión cuando se inicia el servidor
* Fácil control del servidor con los scripts start.sh, stop.sh y restart.sh
* Reinicio diario programado opcional del servidor usando cron

## Requisitos Mínimos:
* Una computadora con un procesador x86_64 bit.
* 1 GB de RAM o más
* Ubuntu Server 18.04.2

## Instalación:

Se recomienda usar Ubuntu Server para ejecutar el servidor dedicado de Minecraft. Está disponible aquí: https://ubuntu.com/download/server

Una vez tenga su Computador o Servidor Virtual VPS, Inicie sesión en su servidor Linux usando SSH con un mouse y teclado copie y pegue el siguiente comando:

```
wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/SetupMinecraft.sh  
chmod +x SetupMinecraft.sh  
./SetupMinecraft.sh
```

Si no instala intente proporcionando acceso administrativo con `sudo` así:

```
sudo wget https://raw.githubusercontent.com/digiraldo/Minecraft-BE-Server/main/SetupMinecraft.sh  
sudo chmod +x SetupMinecraft.sh  
./SetupMinecraft.sh*
```

El script configurará el servidor de Minecraft y le hará algunas preguntas sobre cómo configurarlo. Explicaré aquí lo que significan.

**`Start Minecraft server at startup automatically (y/n)?` ¿Iniciar el servidor de Minecraft automáticamente (y/n)?** - Esto configurará el servicio o mundo de Minecraft para que se inicie automáticamente cuando se inicie el servidor Dedicado. Esta es una excelente opción para configurar un servidor de Minecraft que siempre esté disponible las 24 horas.

**`Automatically restart and backup server at 4am daily (y/n)?` ¿Reiniciar automáticamente y hacer una copia de seguridad del servidor a las 4 am todos los días (y/n)** - Esto agregará un trabajo cron al servidor que reinicia el servidor todos los días a las 4 am. Esto es genial porque cada vez que el servidor se reinicia, hace una copia de seguridad del servidor o mundo de Minecraft y a la vez se actualiza a la última versión del software dedicado de Minecraft Bedrock Edition.


*Eso es todo para el script de configuración. ¡El servidor terminará de configurarse y arrancará! comenzará a mostrar resultados en la consola, las líneas son:*

**Starting Server**, Iniciando Servidor  
**Version 1.16.40.2**, Versión del Juego  
**Level Name: Bedrock level**, Nombre del nivel predeterminado  
**Game mode: 0 Survival**, Modo de Juego Sobreviviente predeterminado  
**Difficulty: 1 EASY**, Dificultad del juego Fácil.  
**IPv4 supported, port: 19132**, Número de puerto para IP versión 4 predeterminado  
**IPv6 supported, port: 19133**, Número de puerto para IP versión 6 predeterminado  
**Server started**, podrá conectarse desde el cliente.

Y listo, solo deben ubicar la IP de su servidor o Computador y el puerto 19132, que en la mayoría de los casos es el IPV4.

## Iniciar, detener y reiniciar el servidor
El servidor se puede iniciar, detener y reiniciar de dos formas diferentes. Puede usar los scripts proporcionados en la carpeta de Minecraft o puede usar systemctl. Aquí están los comandos:

```
cd ~/minecraftbe/nombredelservidor

./start.sh  
./stop.sh  
./restart.sh
```

ó

```sudo systemctl start minecraftbe  
sudo systemctl stop minecraftbe  
sudo systemctl restart minecraftbe
```


## Backups automáticos
El servidor realiza una copia de seguridad cada vez que se inicia. Esto le ayuda a recuperarse fácilmente si algo sale mal. Este sistema funciona mejor si configuró el servidor para que se reinicie diariamente, ya que significa que tendrá una copia de seguridad todos los días.

Para acceder a estas copias de seguridad, escriba:

```
cd ~/minecraftbe/nombredelservidor/backups  
ls -lt
```


Cuando se realiza una copia de seguridad, el nombre del archivo será la fecha y la hora en que se realizó la copia de seguridad. Si necesita restaurar una copia de seguridad de su mundo, es muy fácil. Sustituya la marca de tiempo en mi ejemplo por la copia de seguridad a la que desea retroceder. Tipo:

```
cd ~/minecraftbe/nombredelservidor  
./stop.sh  
rm -rf worlds  
tar -xf backups/13.11.2020_22.06.30_Mundo.tar.gz  
./start.sh
```

¡Tu mundo ahora ha sido restaurado! Es una buena idea descargar estas copias de seguridad del servidor periódicamente en caso de que falle el almacenamiento del servidor.

#
#
#
#
#
#
#
#
==============================

*Aviso de Derechos `(copyright notice)`:*  
Este software y los archivos de documentación asociados fueron realizados por:  
Derechos de autor (c) 2019 James A. Chambers  
Este tutorial fue realizado para ayudar a la comunidad en Español ya que hay poca información de instalación y configuracion en este idioma. Para más información y soporte, el repositorio en su idioma original inglés: https://github.com/TheRemote/MinecraftBedrockServer
