<?php
    $destino= "01technologyn@gmail.com"
    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $telefono= $_POST["telefono"];
    $mensaje= $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\ncorreo" . $correo . "\ntelefono" . $telefono . "\nmensaje" . $mensaje;
    mail($destino,"contacto", $contenido);
    header("location:gracias.html");
?>