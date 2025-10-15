// // Variable nombre
// var nombre = "Juan";

// // Variable edad
// var edad = 23;

// // Variable pais
// var pais = "Colombia";

// // Otra persona
// var nombre2 = "Ana";
// var edad2 = 30;
// var pais2 = "España";

// Simplificado
var juan = {
    nombre: "Juan",
    edad: 23,
    pais: "Colombia"
}

var ana = {
    nombre: "Ana",
    edad: 30,
    pais: "España"
}

// se accede a esos datos de la siguiente manera
// console.log(juan.nombre, juan.edad, juan.pais);
// console.log(juan, ana);

// Arreglo de objetos
var nombreFamilia = ['Juan', 'Santiago', 'German', 'Claudia']
// se accede
//console.log(nombreFamilia[2]);

// Un json es un arreglo de objetos
var arreglo =[
    {
        Nombre: 'Juan',
        Edad: 23,
        Pais: 'Colombia'
    },
    {
        Nombre: 'Ana',
        Edad: 30,
        Pais: 'España'
    },
    {
        Nombre: 'Pedro',
        Edad: 28,
        Pais: 'México'
    }
];

console.log(arreglo);
console.log(arreglo[1].Nombre);