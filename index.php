<?php   
/* conecta a la base de datos */
$db = new PDO ('mysql:host=localhost; dbname=sesion', 'root' , 'root');
$query = "SELECT *, email, contraseña FROM usuarios";
$stmt = $db->prepare($query);
$stmt->execute();
$valido = false;
/* si las casillas estan llenas ejecuta el codigo */
if (isset($_POST["email"]) && isset($_POST["contraseña"]) ) {
$correo = $_POST['email'];
$contra = $_POST['contraseña'];

/* pide los emails */
$base_emails = "SELECT email FROM usuarios";
$stmt = $db->prepare($base_emails);
$stmt->execute();
/*fetch all recupera todos los elementos de la fila y fetch assoc lo convierte en array */
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
$creado = false;

/*obtener contraseñas de la base de datos */
$base_contraseña = "SELECT contraseña FROM usuarios";
$stmt = $db->prepare($base_contraseña);
$stmt->execute();
/*fetch all recupera todos los elementos de la fila y fetch assoc lo convierte en array */
$resultados2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
$creado2 = false;

/* obtiene el array con todos los emails de la base de datos */
foreach ($resultados as $email_obtenidos) {
    /* convierte cada email del array en un string */
    $cadena = implode(", ", $email_obtenidos);
    /* compara el email puesto con cada email de la base */
    foreach ($resultados2 as $contraseñas_obtenidas) {
        /* convierte cada email del array en un string */
        $cadena2 = implode(", ", $contraseñas_obtenidas);
        if ($_POST["contraseña"] == $cadena2 && $_POST["email"] == $cadena) {
            echo '<script> sesion__ejecucionn.textContent = "Iniciaste Exitosamente";</script>';
            echo '<script> sesion__ejecucionn.style.fontSize ="1.3rem";</script>';
            echo '<script> sesion__ejecucionn.style.color ="rgba(35, 247, 7)";</script>';
            echo '<script> sesion__ejecucionnn.style.display ="none";</script>';
        } else {
            echo '<script> sesion__ejecucionnn.textContent = "Los datos no son correctos";</script>';
            echo '<script> sesion__ejecucionnn.style.fontSize ="1.3rem";</script>';
            echo '<script> sesion__ejecucionnn.style.color ="red";</script>';
        }
        if ($_POST["email"] == $cadena && $_POST["contraseña"] === $_POST["confirmar"]) {
            /* en caso de estar creado, impide el registro */
            echo '<script> sesion__ejecucionnnn.textContent = "Ya posee cuenta el email";</script>';
            echo '<script> sesion__ejecucionnnn.style.fontSize ="1.3rem";</script>';
            echo '<script> sesion__ejecucionnnn.style.color ="red";</script>';
            echo '<script> sesion__ejecucionnn.style.display ="none";</script>';
            echo '<script> sesion__ejecucionn.style.display ="none";</script>';
            $creado = true;
        }
    }
}
echo '<script>
    registrate.addEventListener("click",e=>{
        sesion__ejecucionn.innerHTML="";
        sesion__ejecucionnn.textContent=""; 
        sesion__ejecucionnnn.textContent=""; 
        sesion__ejecucionnnnn.textContent=""; 
})</script>';
/* REGISTRA EL USUARIO SI NO ESTA REGISTRADO EL EMAIL*/
if ($creado == false && $_POST["contraseña"] === $_POST["confirmar"] ) {
    $crear = "INSERT INTO usuarios (email, contraseña)  VALUES ('$correo', '$contra')";
    $stmt = $db->prepare($crear);
    $stmt->execute();
    echo '<script> sesion__ejecucionnnn.textContent = "Registrado exitosamente";</script>';
    echo '<script> sesion__ejecucionnnn.style.fontSize ="1.3rem";</script>';
    echo '<script> sesion__ejecucionnnn.style.color ="rgba(35, 247, 7)";</script>';
    echo '<script> sesion__ejecucionnn.style.display ="none";</script>';
    echo '<script> sesion__ejecucionn.style.display ="none";</script>';
}

/* INICIO DE SESION INICIO DE SESION */
}
?>
