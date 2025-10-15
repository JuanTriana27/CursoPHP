// acceder a los elementos
var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader'); // Rueda que aparece al cargar usuarios

// Cuando se da clic al boton ejecuta una funcion
btn.addEventListener('click', function () {

    // Peticion
    var peticion = new XMLHttpRequest();

    // Para realizar la peticion o abrir, peticion mas url 
    //peticion.open('GET', 'https://api.npoint.io/9446d46f36bd0c832d97');
    
    // Recibir info desde nuestro propio archivo
    peticion.open('GET', 'php/leer_datos.php');

    // Rueda de carga
    loader.classList.add('active');

    // Peticion que ejecuta una funcion cuando la peticion haya cargdo esto para acceder a los datos
    peticion.onload = function () {
        // Mostrarlos en consola
        //console.log(peticion.responseText);

        // Convertir los datos a json para acceder a ellos
        //console.log(JSON.parse(peticion.responseText)[4].nombre);

        // Guardar los datos en una variable
        var datos = JSON.parse(peticion.responseText);

        // Recorrer los datos
        datos.forEach(persona => {
            //var elemento = document.createElement('tr');

            // Accedemos a elemento de 2 formas
            // Forma 1
            //elemento.innerHTML += ("<td>" + persona.id + "</td><td>" + persona.nombre + "</td><td>" + persona.edad + "</td><td>" + persona.pais + "</td>" + "<td>" + persona.correo + "</td>");
            // document.getElementById('tabla').appendChild(elemento);
        });

        // Forma 2 (Ciclo for)
        for (var i = 0; i < datos.length; i++) {
            var elemento = document.createElement('tr');
            elemento.innerHTML += ("<td>" + datos[i].id + "</td><td>" + datos[i].nombre + "</td><td>" + datos[i].edad + "</td><td>" + datos[i].pais + "</td>" + "<td>" + datos[i].correo + "</td>");
            document.getElementById('tabla').appendChild(elemento);
        }
    }

    // La funcion se ejecuta cada que el estado cambia 
    peticion.onreadystatechange = function () {
        // Si el estado es 4 y el codigo 200
        if (this.readyState === 4 && this.status === 200) {

            // Quitar la rueda de carga
            loader.classList.remove('active');
        }
    }

    // Enviar la peticion
    peticion.send();
});