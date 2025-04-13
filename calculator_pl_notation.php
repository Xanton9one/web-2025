<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Подсчет</title>
    </head>
    <body>
        <form method="post">
            <label for="expression">Введите арифметическое выражение, используя +, -, *: </label>
            <input type="text" id="expression" name="expression" required>
            <button type="submit">Посчитать</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = explode(' ', trim($_POST["expression"]));
            $operands = [];
            $pntr = -1;
            foreach ($data as $element) {
                if (!(($element == '+') || ($element == '-') || ($element == '*'))) {
                    array_push($operands, intval($element));
                    $pntr++;
                }
                else {
                    switch ($element) {
                        case '+':
                            array_push($operands, $operands[$pntr-1] + $operands[$pntr]);
                            array_splice($operands, $pntr-1, 2);
                            $pntr--;
                            break;
                        case '-':
                            array_push($operands, $operands[$pntr-1] - $operands[$pntr]);
                            array_splice($operands, $pntr-1, 2);
                            $pntr--;
                            break;
                        case '*':
                            array_push($operands, $operands[$pntr-1] * $operands[$pntr]);
                            array_splice($operands, $pntr-1, 2);
                            $pntr--;        
                    }
                }
            }
            if (isset($operands[0])) {
                echo "<p>{$operands[0]}</p>";
            }
            echo "<p>{$pntr}</p>"; 
        }?>                   
    </body>   
</html>