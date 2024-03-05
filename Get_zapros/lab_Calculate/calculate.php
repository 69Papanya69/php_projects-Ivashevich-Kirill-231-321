<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_4</title>
    <style>
        body{
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
        }
        .wrapper {
            margin-top: 40px;
            border: solid red;
            background-color: black;
            height: 200px;
            width: 200px;
            padding: 10px;
            border-radius: 10px;
        }
        .keys{
            display: flex;
            flex-wrap: wrap;
            width: 120px;
            gap: 5px;
            margin: 21px 0 0 2px;
        }
        .result {
            font-family: sans-serif;
            background-color: white ;
            display: inline-block;
            min-width: 7px;
            margin-top: 7px;
            border-radius: 5px;
            padding: 0 2px;
            border: solid 1px purple;
        }
        .input{
            background-color: white;
            display: inline-block;
            border-radius: 5px;
            border: solid 1px purple;
        }
        .clear{
            background-color: while;
            border: solid 1px black;
            height: 21px;
            transition: background-color 0.2s linear;
            cursor: pointer;
        }
        .clear:hover{
            background-color: #b84dff;
            transition: background-color 0.2s linear;
        }
        .pins{
            background-color: white;
            border: solid 1px black;
            width: 21px;
            transition: background-color 0.2s linear;
            cursor: pointer;
        }
        .pins:hover{
            background-color: #b84dff;
            transition: background-color 0.2s linear;
        }
        .eval{
            background-color: white;
            border: solid 1px black;
            height: 21px;
            transition: background-color 0.2s linear;
            cursor: pointer;
        }
        .eval:hover{
            background-color: #b84dff;
            transition: background-color 0.2s linear;
        }
    </style>
</head>
<body>
<header > 
        <h1>Ивашевич Кирилл 231-321</h1>
    </header>
    <main>
        <div class="wrapper" id="calculator">
            <form method="post">
                <div class="top">
                    <button type="reset" class="clear">C</button>
                    <label class="label">
                        <input class="input" type="" name="equation" value="">
                    </label>
                    <div class="screen result">Результат:
                        <?php
                        function isNum($x)
                        {
                            if ((!$x) or (!is_numeric($x))) {
                                return false;
                            }
                            return true;
                        }
                        function calculate($value)
                        {
                            if (!$value) {
                                return 'Выражение не задано!';
                            }
                            if (isNum($value)) {
                                return $value;
                            }

                            $expression = explode('+', $value);
                            if (count($expression) > 1) {
                                $sum = 0;

                                for ($i = 0; $i < count($expression); $i++) {
                                    $expres = $expression[$i];

                                    if (!isNum($expres)) {
                                        $expres = calculate($expres);
                                    }

                                    $sum += (int)$expres;
                                }
                                return $sum;
                            }

                            $expression = explode("-", $value);
                            if (count($expression) > 1) {
                                if (!is_numeric($expression[0])) {
                                    $expression[0] = calculate($expression[0]);
                                }

                                $minusRez = (int)$expression[0];
                                
                                for ($i = 1; $i < count($expression); $i++) {
                                    if (!is_numeric($expression[$i])) {
                                        $expression[$i] = calculate($expression[$i]);
                                    }                    
                                    $minusRez -= $expression[$i];
                                }
                                return $minusRez;
                            }

                            $expression = explode('*', $value);
                            if (count($expression) > 1) {
                                $sup = 1;

                                for ($i = 0; $i < count($expression); $i++) {
                                    $expres = $expression[$i];
                                    if (!isNum($expres)) {
                                        $expres = calculate($expression[$i]);
                                    }
                                    $sup *= (int)$expres;
                                }
                                return $sup;
                            }

                            $expression = explode("÷", $value);
                            if (count($expression) > 1) {
                                if (!is_numeric($expression[0])) {
                                    $expression[0] = calculate($expression[0]);
                                }
                                $del = $expression[0];
                                for ($i = 1; $i < count($expression); $i++) {
                                    if (!is_numeric($expression[$i])) {
                                        $expression[$i] = calculate($expression[$i]);
                                    }
                                    if ($expression[$i] == 0) {
                                        return "Делить на 0 нельзя";
                                    } else {
                                        $del /= $expression[$i];
                                    }
                                }
                                return $del;
                            }
                            return 'Недопустимые символы в выражении';
                        }

                        function SqValidator($value)
                        {
                            $open = 0;
                            for ($i = 0; $i < strlen($value); $i++) {
                                if ($value[$i] == '(') $open++;
                                else {
                                    if ($value[$i] == ')') {
                                        $open--;
                                        if ($open < 0) return false;
                                    }
                                }
                            }
                            if ($open !== 0) return false;
                            return true;
                        }

                        function calculateSq($value)
                        { //1+(2+3)
                            if (!SqValidator($value)) return 'Неправильная расстановка скобок';
                            $start = strpos($value, '('); //start = 2
                            if ($start === false) return calculate($value);
                            $end = $start + 1; //end = 3
                            $open = 1;
                            while ($open && $end < strlen($value)) {
                                if ($value[$end] == '(') $open++;
                                if ($value[$end] == ')') $open--; //open = 0 end = 6
                                $end++; //3 4 5 
                            }
                            $new_val = substr($value, 0, $start);
                            $new_val .= calculateSq(substr($value, $start + 1, $end - $start - 2));
                            $new_val .= substr($value, $end);

                            return calculateSq($new_val);
                        }
                        if (isset($_POST['equation'])) {
                            $res = calculateSq($_POST['equation']);
                            echo $res;
                        };
                        ?>
                    </div>
                </div>

                <div class="keys">
                    <button class="value">1</button>
                    <button class="value">2</button>
                    <button class="value">3</button>
                    <button class="value">+</button>
                    <button class="value">4</button>
                    <button class="value">5</button>
                    <button class="value">6</button>
                    <button class="value">-</button>
                    <button class="value">7</button>
                    <button class="value">8</button>
                    <button class="value">9</button>
                    <button class="value">÷</button>
                    <button class="value">0</button>
                    <button class="value">(</button>
                    <button class="value">)</button>
                    <button class="value">*</button>
                    <button class="summa" type="submit">=</button>
                </div>
            </form>
        </div>
    </main>
    <script src="calculate.js"></script>
</body>
