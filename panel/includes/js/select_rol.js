let dropdown = document.getElementById('gamertag-dropdown');
dropdown.length = 0;

let defaultOption = document.createElement('option');
defaultOption.text = 'Seleccionar...';

dropdown.add(defaultOption);
dropdown.selectedIndex = 0;

const url = '../../config/usradmin.json';

const request = new XMLHttpRequest();
request.open('GET', url, true);

request.onload = function() {
  if (request.status === 200) {
    const data = JSON.parse(request.responseText);
    let option;
    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      option.text = data[i].gamertag;
      option.value = data[i].gamertag;
      dropdown.add(option);
    }
   } else {
    // Reached the server, but it returned an error
  }   
}

request.onerror = function() {
  console.error('Se produjo un error al obtener el JSON de ' + url);
};

request.send();







































var Datos={
    "DatosPersonales": {
      "dni": 70798811,
      "nombre": "Pajaroman",
      "edad": 20,
    }
  };


  $("#dni").html(Datos.DatosPersonales.dni);
  $("#nombre").html(Datos.DatosPersonales.nombre);       $("#edad").html(Datos.DatosPersonales.edad);
  //O de esta foma tambien
  console.log(Datos);