var activado = false;
alert("no toma la base de datos -- pendiente")
registrate.addEventListener("click",e=>{
    if (activado == false) {
        activado = true;
        confirmar.style.display = "block";
        sesion__h1.innerHTML ="Registrate";
        registrate.innerHTML ="Inicia Sesión";
        sesion__texto.innerHTML ="Ya tenes cuenta?";   
    } else {
        activado = false
        confirmar.style.display = "none";
        sesion__h1.innerHTML ="Inicia Sesión";
        registrate.innerHTML ="Registrate";
        sesion__texto.innerHTML ="No tenes cuenta?";
    }
})
