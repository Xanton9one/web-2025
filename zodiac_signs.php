<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Определение знака зодиака</title>
    </head>
    <body>
        <form method="post">
            <label for="date">Введите дату: </label>
            <input type="text" id="date" name="date" required>
            <button type="submit">Определить знак зодиака</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $date = trim($_POST["date"]);
            $day = intval(substr($date, 0, 2));
            $month = intval(substr($date, 3, 2));
            switch ($month) {
                case 1:
                    if ($day <= 20) {
                        echo '<p>Козерог</p>';
                    }
                    else {
                        echo '<p>Водолей</p>';
                    }
                    break;
                case 2:
                    if ($day <= 20) {
                        echo '<p>Водолей</p>';
                    }
                    else {
                        echo '<p>Рыбы</p>';
                    }
                    break;
                case 3:
                    if ($day <= 20) {
                        echo '<p>Рыбы</p>';
                    }
                    else {
                        echo '<p>Овен</p>';
                    }
                    break;
                case 4:
                    if ($day <= 20) {
                        echo '<p>Овен</p>';
                    }
                    else {
                        echo '<p>Телец</p>';
                    }
                    break;
                case 5:
                    if ($day <= 20) {
                        echo '<p>Телец</p>';
                    }
                    else {
                        echo '<p>Близнецы</p>';
                    }
                    break;
                case 6:
                    if ($day <= 21) {
                        echo '<p>Близнецы</p>';
                    }
                    else {
                        echo '<p>Рак</p>';
                    }
                    break;
                case 7:
                    if ($day <= 22) {
                        echo '<p>Рак</p>';
                    }
                    else {
                        echo '<p>Лев</p>';
                    }
                    break;
                case 8:
                    if ($day <= 23) {
                        echo '<p>Лев</p>';
                    }
                    else {
                        echo '<p>Дева</p>';
                    }
                    break;
                case 9:
                    if ($day <= 23) {
                        echo '<p>Дева</p>';
                    }
                    else {
                        echo '<p>Весы</p>';
                    }
                    break;
                case 10:
                    if ($day <= 23) {
                        echo '<p>Весы</p>';
                    }
                    else {
                        echo '<p>Скорпион</p>';
                    }
                    break;
                case 11:
                    if ($day <= 22) {
                        echo '<p>Скорпион</p>';
                    }
                    else {
                        echo '<p>Стрелец</p>';
                    }
                    break;
                case 12:
                    if ($day <= 21) {
                        echo '<p>Стрелец</p>';
                    }
                    else {
                        echo '<p>Козерог</p>';
                    }     
            }                
        }?>                   
    </body>   
</html>