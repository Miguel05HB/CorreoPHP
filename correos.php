<?php
    $destimatario = 'Hola Huayremiguel@gmail.com'
    $nombre = $_POST['nombre'];
    $asunto = $_POST ['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado Desde La Pagina De Miguel Ángel";

    $mensajecompleto = $mensaje . "\n Atentamente: " . $nombre;

    mail($destimatario, $asunto, $mensajecompleto, $header);
    echo "<script>alert('correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";
?>