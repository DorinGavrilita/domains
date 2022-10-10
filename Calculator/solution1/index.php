<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    

    <form action="" method="POST" style="text-align:center; margin-top: 50px;">

        <input type="number" name="number1" placeholder="Enter the number">
        <input type="number" name="number2" placeholder="Enter the number">

        <input type="radio" name="operator" value="plus">+
        <input type="radio" name="operator" value="minus">-
        <input type="radio" name="operator" value="multiply">*
        <input type="radio" name="operator" value="divide">/

        <input type="submit" name="send" value="Calculate">
    </form>

    <div style="text-align:center; margin-top: 50px;">

        <?php

        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(E_ALL);

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        if (isset($_POST["send"])) {

            if (!empty($_POST["number1"] or !empty($_POST["number2"]))) {

                if ($_POST["operator"] == "plus") {

                    $res = $number1 + $number2;
                    echo "Result= " . $res;
                } elseif ($_POST["operator"] == "minus") {

                    $res = $number1 - $number2;
                    echo "Result= " . $res;
                } elseif ($_POST["operator"] == "multiply") {

                    $res = $number1 * $number2;
                    echo "Result= " . $res;
                } elseif ($_POST["operator"] == "divide" and $number2 == 0) {

                    echo "Can't divide by zero.";
                } elseif ($_POST["operator"] == "divide") {

                    $res = $number1 / $number2;
                    echo "Result= " . $res;
                }
            } else
                echo "Enter the number";
        }
        ?>
</body>

</html>