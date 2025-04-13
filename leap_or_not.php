<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Проверка 1</title>
    </head>
    <body>
        <form method="post">
            <label for="year">Введите год для проверки на високосность: </label>
            <input type="number" id="year" name="year" required>
            <button type="submit">Проверить</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = intval(trim($_POST["year"]));
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo '<p>YES</p>';
            }
            else {
                echo '<p>NO</p>';
            } 
        }?>                   
    </body>   
</html>