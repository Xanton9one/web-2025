<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Перевод</title>
    </head>
    <body>
        <form method="post">
            <label for="digit">Введите цифру: </label>
            <input type="number" id="digit" name="digit" required>
            <button type="submit">Перевести в текстовый вид</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $digit = intval(trim($_POST["digit"]));
            switch ($digit) {
                case 0:
                    echo '<p>Ноль</p>';
                    break;
                case 1:
                    echo '<p>Один</p>';
                    break;
                case 2:
                    echo '<p>Два</p>';
                    break;
                case 3:
                    echo '<p>Три</p>';
                    break;
                case 4:
                    echo '<p>Четыре</p>';
                    break;
                case 5:
                    echo '<p>Пять</p>';
                    break;
                case 6:
                    echo '<p>Шесть</p>';
                    break;
                case 7:
                    echo '<p>Семь</p>';
                    break;
                case 8:
                    echo '<p>Восемь</p>';
                    break;
                case 9:
                    echo '<p>Девять</p>';               
            }             
        }?>                   
    </body>   
</html>