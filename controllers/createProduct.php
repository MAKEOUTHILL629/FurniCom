<?php


$product = new Product("", $_POST["nombre_producto"], $_POST["descripcion"], $_POST["stock"], $_POST["precio"], $_POST["categoria"], "", "");
$product->create();
$idCreated = $product->consultIdLastCreated();

$countfiles = count($_FILES['file']['name']);
$allowed_types = array('jpg', 'png', 'jpeg');

for ($i = 0; $i < $countfiles; $i++) {
    $ext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
    if ($ext == "jpeg") {
        $serverPath = "images/" . date("Ymdhis") . ".jpg";
    } else {
        $serverPath = "images/" . date("Ymdhis") . ".png";
    }

    $localRoute = $_FILES["file"]["tmp_name"][$i];


    copy($localRoute, $serverPath);


    $picture = new ProductPicture("", $idCreated, $serverPath);
    $picture->create();
}
?>

<script>
    window.location.replace('index.php?sid=<?php echo base64_encode("product_form") ?>');
</script>
