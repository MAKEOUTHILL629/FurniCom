<?php

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = str_replace(" ", "#", $_POST["email"]);
    $password = $_POST["password"];
    $user = new User("", "", "", "", "", "", "", "", $email, $password, "", "", "");
    if ($user->authenticate()) {
        $_SESSION["id"] = $user->getId();
        echo 'Se ha logeado';
         header("location: index.php?pid=" . base64_encode("presentation/home.php"),     true, 301);
         exit;

    }
}


//else {
//    $cliente = new Cliente("", "", "", $correo, $clave);
//    if ($cliente->autenticar()) {
//        if ($cliente->getEstado() == 1) {
//            $_SESSION["id"] = $cliente->getId();
//            header("Location: index.php?pid=" . base64_encode("presentacion/sesionCliente.php"));
//        } else if ($cliente->getEstado() == 0) {
//            header("Location: index.php?error=2");
//        }
//    } else {
//        header("Location: index.php?error=1");
//    }
//}
