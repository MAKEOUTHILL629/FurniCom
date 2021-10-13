<?php
echo "El genero es  {$_POST["genero"]} , el tipo de documento es  {$_POST["tipo_documento"]}, el documento es {$_POST["documento"]} ,el nombre es {$_POST["nombres"]}, el apellido es {$_POST["apellidos"]}, la direccion es {$_POST["direccion"]} , el correo es {$_POST["correo"]}, la clave es {$_POST["clave"]}";
$userNew = new User("", 4, $_POST["genero"], $_POST["tipo_documento"], $_POST["documento"], $_POST["nombres"], $_POST["apellidos"], $_POST["direccion"], $_POST["correo"], $_POST["clave"], 0, "", "");
$userNew->create();
?>
<script>
    window.location.replace('index.php');
</script>



