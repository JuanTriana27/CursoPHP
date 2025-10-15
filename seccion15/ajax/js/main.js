// Variable del boton que carga datos
var btn_cargar = document.getElementById('btn_cargar_usuarios');
var error_box = document.getElementById('error_box');
var tabla = document.getElementById('tabla');
var formulario = document.getElementById('formulario');
var loader = document.getElementById('loader');
var usuario_nombre, usuario_edad, usuario_pais, usuario_correo;

// Funcion cargar usuarios
function cargarUsuarios() {
    tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>País</th><th>Correo</th></tr>';

    // AJAX
    var peticion = new XMLHttpRequest();

    // peticion open
    peticion.open('GET', 'php/leer_datos.php');

    // Ejecutar spiner
    loader.classList.add('active')

    // Ejectar funcion cuando se carga la info
    peticion.onload = function () {
        var datos = JSON.parse(peticion.responseText);

        if (datos.error) {
            error_box.style.display = 'block';
        } else {
            error_box.style.display = 'none';
            for (var i = 0; i < datos.length; i++) {
                var elemento = document.createElement('tr');
                elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
                elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
                elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
                elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
                elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");

                tabla.appendChild(elemento);
            }
        }
    }

    // Accedemos al estado para ver su estado
    peticion.onreadystatechange = function () {
        if (peticion.readyState == 4 && peticion.status == 200) {
            loader.classList.remove('active');
        }
    }

    // Enviamos la peticion
    peticion.send();
}

function agregarUsuarios(e) {
    e.preventDefault();

    var peticion = new XMLHttpRequest();
    peticion.open('POST', 'php/insertar_usuario.php');

    // Datos del form a las variables
    usuario_nombre = formulario.nombre.value.trim();
    usuario_edad = parseInt(formulario.edad.value.trim());
    usuario_pais = formulario.pais.value.trim();
    usuario_correo = formulario.correo.value.trim();

    // Validar datos
    if (formulario_valio()) {
        error_box.style.display = 'none';

        var parametros = 'nombre=' + usuario_nombre + '&edad=' + usuario_edad + '&pais=' + usuario_pais + '&correo=' + usuario_correo;

        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        loader.classList.add('active');

        peticion.onload = function () {
            loader.classList.remove('active');

            try {
                var respuesta = JSON.parse(peticion.responseText);

                if (respuesta.error) {
                    error_box.style.display = 'block';
                    error_box.innerHTML = respuesta.mensaje || 'Error al agregar usuario';
                } else {
                    // Éxito: recargar la tabla y limpiar formulario
                    cargarUsuarios();
                    formulario.nombre.value = '';
                    formulario.edad.value = '';
                    formulario.pais.value = '';
                    formulario.correo.value = '';
                    error_box.style.display = 'none';
                }
            } catch (error) {
                error_box.style.display = 'block';
                error_box.innerHTML = 'Error al procesar la respuesta del servidor';
            }
        }

        // Manejar errores de red
        peticion.onerror = function () {
            loader.classList.remove('active');
            error_box.style.display = 'block';
            error_box.innerHTML = 'Error de conexión con el servidor';
        }

        peticion.send(parametros);
    } else {
        error_box.style.display = 'block';
        error_box.innerHTML = 'Completa el formulario correctamente';
    }
}

// Funcion para cargar usuarios
btn_cargar.addEventListener('click', function () {
    cargarUsuarios();
});

formulario.addEventListener('submit', function (e) {
    agregarUsuarios(e);
});

function formulario_valio() {
    if (usuario_nombre == '') {
        return false;
    } else if (isNaN(usuario_edad)) {
        return false;
    } else if (usuario_pais == '') {
        return false;
    } else if (usuario_correo == '') {
        return false;
    }

    return true;
}