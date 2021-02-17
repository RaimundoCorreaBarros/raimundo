<?php

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $fono = $_POST["fono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $trampa = $_POST["trampa"];

    $contenido = "Nombre: " . $nombre . "<br>" .
    "email: " . $email . "<br>" .
    "Telefono: " . $fono . "<br>" .
    "Mensaje: <br>" . $mensaje;

    if ($trampa == "") {

        $cabecera = "MIME-Version: 1.0"."\r\n";
	    $cabecera .= "Content-type: text/html; charset=utf-8"."\r\n";
	    $cabecera .= "From: ".$email."\r\n";

        if ( mail("correabarros@gmail.com", $asunto, $contenido, $cabecera) ) {
            echo "<script>alert('Su mensaje fue enviado');history.back();</script>";
        } else {
            echo "<script>alert('Su mensaje NO pudo ser enviado');history.back();</script>";
        }

    } else {
        echo "me quieres engañar robot";
    }
?>