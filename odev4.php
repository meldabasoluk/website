<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Basit Hesap Makinesi</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <div class="calculator">
        <form method="post" action="">
            <input type="text" name="result" id="result" readonly>
            <div class="buttons">
                <button type="button" onclick="appendToResult('7')">7</button>
                <button type="button" onclick="appendToResult('8')">8</button>
                <button type="button" onclick="appendToResult('9')">9</button>
                <button type="button" onclick="appendToResult('+')">+</button>
                <button type="button" onclick="appendToResult('4')">4</button>
                <button type="button" onclick="appendToResult('5')">5</button>
                <button type="button" onclick="appendToResult('6')">6</button>
                <button type="button" onclick="appendToResult('-')">-</button>
                <button type="button" onclick="appendToResult('1')">1</button>
                <button type="button" onclick="appendToResult('2')">2</button>
                <button type="button" onclick="appendToResult('3')">3</button>
                <button type="button" onclick="appendToResult('*')">*</button>
                <button type="button" onclick="appendToResult('0')">0</button>
                <button type="button" onclick="appendToResult('.')">.</button>
                <button type="button" onclick="clearResult()" class="clear">C</button>
                <button type="submit" name="calculate" class="equal">=</button>
                <button type="button" onclick="appendToResult('/')">/</button>
            </div>
        </form>
        <?php
        if (isset($_POST['calculate'])) {
            $result = $_POST['result'];
            $result = eval("return $result;");
            echo "<div class='result'>Sonuç: $result</div>";
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>


