//console.log('Activo');

document.querySelector('#botonLogs').addEventListener('click', traerLogs()) ;
function traerLogs() {
    //console.log('Función Activada');

    const logs = new XMLHttpRequest();

    logs.open('GET', '../../../servername/logs/2020.12.11.18.52.16.log', true);
    logs.send();
    logs.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //console.log(this.responseText);
             document.querySelector('#registros').innerHTML = this.responseText;

           // let datos = JSON.parse(this.responseText);
           //  console.log(datos);


        }
    }
    setTimeout(traerLogs, 2000);
}