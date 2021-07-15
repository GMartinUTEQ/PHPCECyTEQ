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