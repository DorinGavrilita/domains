<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. Integers and real numbers</title>
</head>

<body>
    <?php
    // Целые и вещественные числа
    $num =  1234;
    $num =  -12;
    $num =  012;
    $num =  0x12;
    var_dump($num);
    ?>
    <br>

    <?php echo 07 + 04 . "<br>"; ?>
    
    <?php
    echo '0xA + 0xF = ';
    echo 0xA + 0xF . "<br>";
    ?>

    <?php
    $var = 1.46476;
    echo $var;
    ?>
    <br>

    <?php
    $var = 1.345678e+3;
    echo $var;
    ?>
</body>

</html>