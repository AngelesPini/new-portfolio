<?php
$email = $_POST['email'];
$mensaje = "nueva consulta de " . $email . "/r/n";
$mensaje .= "Enviado el" . date('d/m/Y',  time());
$destinatario = 'angelesbpini@gmail.com';
mail($destinatario, "Nuevo interesado", utf8_decode($mensaje),'Location:exito.html');
?>
