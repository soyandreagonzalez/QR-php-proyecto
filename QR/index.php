<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "phpqrcode/qrlib.php";
    $dir = 'temp/';
    if(!file_exists($dir))
    mkdir($dir);
    $fileneme = $dir.'test.png';
    $tamano = 4;
    $lavel = 'H';
    $frameSize = 5;
    $contenido = 'Hola';
    QRcode::png($contenido, $fileneme, $lavel, $tamano, $frameSize);
    echo '<img src="'.$fileneme.'"/>';
    ?>
    <br><br><br>
</body>
</html>