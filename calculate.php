<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $area = ( ( $a + $b) /2 ) * $c;
    echo $area." ตร.หน่วย";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <br>
        <p style="color: red; font-size: 16px"></p>
        <?php
            echo "พื้นที่สี่เหลี่ยมคางหมู<br>";
            echo "ความยาวด้าน A = ".$a;
            echo "<br>";
            echo "ความยาวด้าน B = ".$b;
            echo "<br>";
            echo "ความยาวด้าน C = ".$c;
            echo "<br>";
            echo "มีพื้นที่ เท่ากับ ".$area." ตร.หน่วย";
            echo "<br>";

        ?>
    </body>
    </html>
