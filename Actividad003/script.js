
alert("Bienvenidos");

var hora;
hora = new Date();
hora = hora.getHours();
var textoBuenos = "";
if(hora >= 5 && hora < 12)
{
    textoBuenos = "Buenos días, ";
}
else
{
    if(hora >= 20  ||  hora <5)
    {
        textoBuenos = "Buenas noches, "
    }
    else
    {
        textoBuenos = "Buenas Tardes, ";
    }
}


var nombreCiudad;
nombreCiudad = prompt("Capture el nombre de la ciudad donde vive");
document.write("<h1>" + textoBuenos + nombreCiudad + "</h1>");



function retornarFecha()
{
    var fecha;
    fecha = new Date();
    var cadena = fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear();
    return cadena;
}

function retornarHora()
{
    var hora;
    hora = new Date();
    var cadena = hora.getHours() + ":" + hora.getMinutes() + ":" + hora.getSeconds();
    return cadena;
}

/*

POO.
Class Perro();

{Metodos o funciones}
Ladar();
Comer();
Respirar();
MoverColita();
Revolcarse();
Morder();

{Atributos o propiedades.}
NumOrejas;
Color;
NumPatas;
TieneCola;

Jake = new Perro();
ColorJake = Jake.color;




*/