    <?
    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];
    $p = $_POST['operation'];
    $c;     // result
    if ($_POST['submit']) {


        if ($p == '+') $c = $a + $b;

        elseif ($p == '-') $c = $a - $b;

        elseif ($p == '*') $c = $a * $b;

        elseif ($p == '/') {

            if ($b == 0) echo "You can't divide by zero";
            else $c = $a / $b;
        } else $c = pow($a, $b);
    }
    echo $c;
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator2</title>
    </head>

    <body>
        <form action="" method="POST">
            <input type="number" name="first" required>

            <select name="operation" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="^">^</option>
            </select>

            <input type="number" name="second" required>
            <input type="submit" value="submit">


        </form>

    </body>

    </html>