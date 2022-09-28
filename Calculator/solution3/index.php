    <?
    if ($_POST['first']) {
        $first = strip_tags($_POST['first']);
    }

    if ($_POST['second']) {
        $second = strip_tags($_POST['second']);
    }

    if ($_POST['send']) {

        if (!$_POST['operator']) {

            $result = 'Choose a sign';
        } else {

            if ($_POST['operator'] == 'plus') {
                $result = 'Addition result:<br>' . ($first + $second);
            }

            if ($_POST['operator'] == 'minus') {
                $result = 'Subtraction result:<br>' . ($first - $second);
            }

            if ($_POST['operator'] == 'multi') {
                $result = 'Multiplication result:<br>' . $first * $second;
            }

            if ($_POST['operator'] == 'divide') {
                $result = 'Division result:<br>' . $first / $second;
            }
        }
    } else {

        $result = 'Simple calculator! ';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator3</title>

        <style>
            form.POST_CALC_1 {
                display: block;
                margin: auto;
                width: 250px;
                border: 1px solid #cccccc;
                padding: 28px;
            }

            form.POST_CALC_1 input[type="number"] {
                padding: 7px;
                margin: 4px;
                width: 220px;
            }

            form.POST_CALC_1 input[type="submit"] {

                width: 95%;

                margin: 5px;

                padding: 10px;

            }

            form div {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <a name="result"></a>
        <form method="POST" action="#result" class="POST_CALC_1 ">
            <div><? echo $result; ?></div>
            <input type="radio" name="operator" value="plus">+<br>
            <input type="radio" name="operator" value="minus">-<br>
            <input type="radio" name="operator" value="multi">*<br>
            <input type="radio" name="operator" value="divide">/<br>
            <!-- <input type="radio" name="operator" value="power">^<br> -->
            <input type="number" name="first" required><br>
            <input type="number" name="second" required><br>
            <input type="submit" name="send" value="count"><br>
        </form>

    </body>

    </html>