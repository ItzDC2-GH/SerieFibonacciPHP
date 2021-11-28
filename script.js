var maximo = document.getElementById("maximo");

function requerido() { 
    if(maximo.value.length == 0) {
        alert("Necesitas poner un máximo");
        return false;
    } else if(maximo.value.length > 0 && isNaN(maximo)) {
        alert("Tiene que elegir un número");
        return false;
    } 
}