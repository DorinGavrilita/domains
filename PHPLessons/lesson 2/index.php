<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New page" ?></title>
</head>

<body>
    <?php
    echo "Current date and time.<br>";
    echo date(DATE_RSS);
    ?>
    <br>
    <?php
    echo 9 + 3 - 4 . "<br>";
    echo "Text <br>";
    ?>
    <br>

    <?php
    // mt_rand — Генерирует случайное значение методом с помощью генератора простых чисел
    if (mt_rand(0, 1)) {
    ?>
        <div style="color: blue">Синий текст.</div>
    <?php
    } else {
    ?>
        <div style="color: red">Красный текст.</div>
    <?php
    }
    ?>
</body>

</html>