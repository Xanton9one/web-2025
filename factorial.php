<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Факториал числа</title>
    </head>
    <body>
        <form method="post">
            <label for="non-negative_number">Введите неотрицательное число: </label>
            <input type="number" id="non-negative_number" name="non-negative_number" required>
            <button type="submit">Вычислить</button>
        </form>
        <?php

        function getFactorial(int $num) {
            if ($num == 0) {
                return 1;
            }
            else {
                return getFactorial($num - 1) * $num;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval(trim($_POST["non-negative_number"]));
            $factorial = getFactorial($number);
            echo "<p>{$factorial}</p>"; 
        }?>                   
    </body>   
</html>