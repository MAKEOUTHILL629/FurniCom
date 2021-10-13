<?php
$emisor = "Furnicom Asociado";
$web = "https://Furnicom.com";
$mensajePie = "Gracias por su compra";
$fecha = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 ">
            <h1>Factura</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-10" >
            <h1 class="h6"><?php echo $remitente ?></h1>
            <h4 class="h6"><?php echo $web ?></h4>
        </div>
        <div class="col-xs-2 text-center">
            <strong>Fecha</strong>
            <br>
            <?php echo $fecha ?>
            <br>
        </div>
    </div>
    <hr>
    <div  style="margin-left:200px;display:flex; ">
        <div class="col-xs-6">
            <h1 class="h2">Cliente</h1>
            <strong><?php echo $cliente ?></strong>
        </div>
        <div class="col-xs-6" style="margin-left:200px">
            <h1 class="h2">Remitente</h1>
            <strong><?php echo $remitente ?></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12" style="margin-left:150px;">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr >
                    <th>Descripción</th>
                    <th style="padding: 0px 20px;">Cantidad</th>
                    <th>Precio unidad</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $subtotal = 0;
                foreach ($productos as $producto) {
                    ?>
                    <tr>
                        <td><?php echo $producto["nombre"] ?></td>
                        <td><?php echo $producto["cantidad"] ?></td>
                        <td>$<?php echo number_format($producto["precio"], 2) ?></td>
                        <td>$<?php echo number_format($producto["total"], 2) ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
       
                <tr>
                    <td colspan="3" class="text-right">
                        <h4>Total</h4></td>
                    <td>
                        <h4>$<?php echo number_format($total, 2) ?></h4>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <h5 style="margin-left:300px; margin-top:200px"><?php echo $mensajePie ?></h5>
        </div>
    </div>
</div>
</body>
</html>