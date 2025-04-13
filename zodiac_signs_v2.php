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
            $date = explode(' ', trim($_POST["date"]));
            $day = intval($date[0]);
            $month = trim($date[1]);
            switch ($month) {
                case 'января':
                    if ($day <= 20) {
                        echo '<p>Козерог</p>';
                    }
                    else {
                        echo '<p>Водолей</p>';
                    }
                    break;
                case 'февраля':
                    if ($day <= 20) {
                        echo '<p>Водолей</p>';
                    }
                    else {
                        echo '<p>Рыбы</p>';
                    }
                    break;
                case 'марта':
                    if ($day <= 20) {
                        echo '<p>Рыбы</p>';
                    }
                    else {
                        echo '<p>Овен</p>';
                    }
                    break;
                case 'апреля':
                    if ($day <= 20) {
                        echo '<p>Овен</p>';
                    }
                    else {
                        echo '<p>Телец</p>';
                    }
                    break;
                case 'мая':
                    if ($day <= 20) {
                        echo '<p>Телец</p>';
                    }
                    else {
                        echo '<p>Близнецы</p>';
                    }
                    break;
                case 'июня':
                    if ($day <= 21) {
                        echo '<p>Близнецы</p>';
                    }
                    else {
                        echo '<p>Рак</p>';
                    }
                    break;
                case 'июля':
                    if ($day <= 22) {
                        echo '<p>Рак</p>';
                    }
                    else {
                        echo '<p>Лев</p>';
                    }
                    break;
                case 'августа':
                    if ($day <= 23) {
                        echo '<p>Лев</p>';
                    }
                    else {
                        echo '<p>Дева</p>';
                    }
                    break;
                case 'сентября':
                    if ($day <= 23) {
                        echo '<p>Дева</p>';
                    }
                    else {
                        echo '<p>Весы</p>';
                    }
                    break;
                case 'октября':
                    if ($day <= 23) {
                        echo '<p>Весы</p>';
                    }
                    else {
                        echo '<p>Скорпион</p>';
                    }
                    break;
                case 'ноября':
                    if ($day <= 22) {
                        echo '<p>Скорпион</p>';
                    }
                    else {
                        echo '<p>Стрелец</p>';
                    }
                    break;
                case 'декабря':
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