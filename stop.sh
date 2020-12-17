#!/bin/bash
# Este Script es el mismo del autor James A. Chambers a diferencia que fue traducido al español (This Script is the same as that of the author James A. Chambers, unlike that it was translated into Spanish.)
# James Chambers
# Secuencia de comandos de detención de Minecraft Server: llamado principalmente por el servicio de Minecraft, pero se puede ejecutar manualmente

# Compruebe si el servidor se está ejecutando
if ! screen -list | grep -q "servername"; then
  echo "¡El servidor no se está ejecutando actualmente!"
  exit 1
fi

# Obtenga un tiempo de cuenta atrás personalizado opcional (en minutos)
CountdownTime=0
while getopts ":t" opt; do
  case $opt in
    t)
      case $string in
        ''|*[!0-9]*) 
          echo "El tiempo de cuenta regresiva debe ser un número entero en minutos."
          exit 1
          ;;
        *) 
          CountdownTime=$OPTARG >&2 
          ;;
      esac
      ;;
    \?)
      echo "Opción invalida: -$OPTARG; El tiempo de cuenta atrás debe ser un número entero en minutos." >&2
      ;;
  esac
done

# Detener el servidor
while [ $CountdownTime -gt 0 ]; do
  if [ $CountdownTime -eq 1 ]; then
    screen -Rd servername -X stuff "say Deteniendo el Servidor en 60 segundos...$(printf '\r')"
    sleep 30;
    screen -Rd servername -X stuff "say Deteniendo el Servidor en 30 segundos...$(printf '\r')"
    sleep 20;
    screen -Rd servername -X stuff "say Deteniendo el Servidor en 10 segundos...$(printf '\r')"
    sleep 10;
  else
    screen -Rd servername -X stuff "say Deteniendo el Servidor en $CountdownTime minutes...$(printf '\r')"
    sleep 60;
  fi
  echo "Esperando $ CountdownTime más minutos ..."
done
echo "Deteneniendo el servidor de Minecraft ..."
screen -Rd servername -X stuff "say Servidor detenido o cerrado (stop.sh called)...$(printf '\r')"
screen -Rd servername -X stuff "stop$(printf '\r')"

# Espere hasta 20 segundos para que se cierre el servidor
StopChecks=0
while [ $StopChecks -lt 20 ]; do
  if ! screen -list | grep -q "servername"; then
    break
  fi
  sleep 1;
  StopChecks=$((StopChecks+1))
done

# Forzar el cierre si el servidor aún está abierto
if screen -list | grep -q "servername"; then
  echo "El servidor de Minecraft aún no se ha detenido después de 20 segundos, cerrando la pantalla manualmente"
  screen -S servername -X quit
fi

echo "Servidor Minecraft servername detenido."
