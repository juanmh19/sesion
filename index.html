<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main>
        <section class="sesion">
            <div class="sesion__contenedor">
            <h1 class="sesion__h1" id="sesion__h1">inicia sesión</h1>
            <form class="sesion__formulario" action="index.php" method="POST">
                <div class="sesion__caja">
                    <input class="sesion__input" name="email" type="email" required placeholder="Email">
                    <input class="sesion__input" name="contraseña" type="password" required placeholder="Contraseña">
                    <input id="confirmar" class="sesion__input confirmar" type="password" name="confirmar"placeholder="Confirma tu contraseña">
                    <div class="sesion__caja--checkbox">
                        <div class="sesion__caja--recuerdame">
                        <input class="sesion__checkbox" type="checkbox">
                        <p class="sesion__texto--checkbox">Recuerdame</p>
                        </div>
                        <a class="sesion__registrate--checkbox" href="">Recuperar contraseña</a>
                    </div>
                    <input class="sesion__input sesion__input--submit" type="submit">
                    <div class="sesion__caja--registro">
                         <p id="sesion__texto" class="sesion__texto">No tenes cuenta?</p>
                         <a class="sesion__registrate" id="registrate" href="#">Registrate</a>
                    </div>
                    <p class="sesion__ejecucion" id="sesion__ejecucionn"></p>
                    <p class="sesion__ejecucion" id="sesion__ejecucionnn"></p>
                    <p class="sesion__ejecucion" id="sesion__ejecucionnnn"></p>
                    <p class="sesion__ejecucion" id="sesion__ejecucionnnnn"></p>
                </div>
            </form>
            </div>
        </section>
    </main>

    <footer></footer>
    <script src="app.js"></script>
</body>
</html>
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
