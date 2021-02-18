<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemograman WEB NO 1</title>
</head>
<body>
    <?php
    define("PI", 3.14);
    echo "Volume sebuah lingkaran";
    ?>
    <br>
    <br>
    <?php
    echo "jika jari jari dari sebuah lingkaran adalah 7 cm , ";
    ?>
    <br>
    <?php
    echo "maka volume dari lingkaran tersebut adalah :";
    $r = 7;
    $v = 4/3*PI*$r*$r*$r;
    echo $v; 
    ?>
        
</body>
</html>