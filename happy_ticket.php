<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Проверка 2</title>
    </head>
    <body>
        <form method="post">
            <label for="ticket">Введите номер билета: </label>
            <input type="text" id="ticket" name="ticket" required>
            <button type="submit">Проверить</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = explode(' ', trim($_POST["ticket"]));
            for ($i = intval($data[0]); $i <= intval($data[1]); $i++) {
                $numStr = strval($i);
                if (intval($numStr[0]) + intval($numStr[1]) + intval($numStr[2]) == intval($numStr[3]) + intval($numStr[4]) + intval($numStr[5])) {
                    echo "<p>{$i}</p>";
                }
            } 
        }?>                   
    </body>   
</html>