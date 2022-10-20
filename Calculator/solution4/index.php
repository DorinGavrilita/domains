<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Calculator</title>
    <link rel="" href="./calc.php">
    <style>
        p {
            font-size: 12px;
        }

        .alert {
            color: red;
        }
    </style>
</head>

<body>


    <h2>OOP calculator</h2>
    <br>
    <form action="" method="POST">
        <input type="number" name="num1Inserted">
        <input type="number" name="num2Inserted">
        <select name="calInserted">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Calculate</button>
    </form>


    <?php

    include 'calc.inc.php';

    $num1 = $_POST['num1Inserted'];
    $num2 = $_POST['num2Inserted'];
    $cal = $_POST['calInserted'];

    $calculator = new Calc($num1, $num2, $cal);
    echo $calculator->calcMethod();
    ?>

</body>

</html>