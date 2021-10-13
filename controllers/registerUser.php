<?php

$userNew = new User("", 4, $_POST["genero"], $_POST["tipo_documento"], $_POST["documento"], $_POST["nombres"], $_POST["apellidos"], $_POST["direccion"], $_POST["correo"], $_POST["clave"], 0, "", "");
$userNew->create();

?>
<script>
    window.location.replace('index.php');
</script>

