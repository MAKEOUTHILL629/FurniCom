<?php

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = str_replace(" ", "#", $_POST["email"]);
    $password = $_POST["password"];
    $user = new User("", "", "", "", "", "", "", "", $email, $password, "", "", "");
    if ($user->authenticate()) {
        $_SESSION["id"] = $user->getId();
        echo 'Se ha logeado'; ?>

        <script>
            window.location.replace('index.php');
        </script>


        <?php

    } else {
        echo 'No se ha logeado';

        ?>
        <script>


            window.location.replace('index.php');
        </script>

        <?php
    }


}


