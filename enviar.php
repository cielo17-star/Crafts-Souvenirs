<?php
    $destino= "76979717@tacna.coar.edu.pe" "kelly.mg9620@gmail.com";
    $Nombre= $_POST["Nombre"];
    $E-mail= $_POST["E-mail"];
    $Teléfono= $_POST["Teléfono"];
    $Mensaje= $_POST["Mensaje"];
    $contenido= "Nombre; ".$Nombre."\nE-mail: ".$E-mail."\nTeléfono".$Teléfono."\nMensaje".$Mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html");
?>