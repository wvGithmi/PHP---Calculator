<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <div class="wrapper">
        <form name="calc" action="result.php" method="POST">
            <h1 style="font-weight: bold">CALCULATOR</h1>
            
            <!--Get the output-->
            <input type = "hidden" id = "op1" name = "display" class = "text_styling">
            <!--Get the calculation-->
            <input type = "hidden" id = "op2" name = "dis_cal" class = "text_styling">
            <br><br>

            <!--Form buttons of the calculator-->
            <input type = "button" name = "operation" value = "C" onclick = "calc.display.value = ''" class = "but_styling sign">
            <input type = "button" name = "operation" value = "+/-" onclick = "calc.display.value = '0' - calc.display.value" class = "but_styling sign">
            <input type = "submit" name = "operation1" value = "%" onclick = "calc.display.value = eval(cal.display.value) * 100" class="but_styling sign">
            <input type = "button" name = "operation" value = "/" onclick = "calc.display.value += '/'" class = "but_styling sign">
            <br><br>

            <input type = "button" name = "num" value = "7" onclick = "calc.display.value += '7'" class = "but_styling">
            <input type = "button" name = "num" value = "8" onclick = "calc.display.value += '8'" class = "but_styling">
            <input type = "button" name = "num" value = "9" onclick = "calc.display.value += '9'" class = "but_styling">
            <input type = "button" name = "operation" value="X" onclick = "calc.display.value += '*'" class = "but_styling sign">
            <br><br>

            <input type = "button" name = "num" value = "4" onclick = "calc.display.value += '4'" class = "but_styling">
            <input type = "button" name = "num" value = "5" onclick = "calc.display.value += '5'" class = "but_styling">
            <input type = "button" name = "num" value = "6" onclick = "calc.display.value += '6'" class = "but_styling">
            <input type = "button" name = "operation" value = "-" onclick = "calc.display.value += '-'" class = "but_styling sign">
            <br><br>

            <input type = "button" name = "num" value = "1" onclick = "calc.display.value += '1'" class = "but_styling">
            <input type = "button" name = "num" value = "2" onclick = "calc.display.value += '2'" class = "but_styling">
            <input type = "button" name = "num" value = "3" onclick = "calc.display.value += '3'" class = "but_styling">
            <input type = "button" name = "operation"  value = "+" onclick = "calc.display.value += '+'" class = "but_styling sign">
            <br><br>

            <input type = "button" name = "num" value = "0" onclick = "cal.display.value += '0'" class = "but_styling">
            <input type = "button" name = "operation"  value = "." onclick = "calc.display.value += '.'" class = "but_styling sign">
            <input type = "button" name = "operation"  value = "<X" onclick = "calc.display.value = (calc.display.value - (calc.display.value % 10 )) / 10" class = "but_styling sign">
            <input type = "submit" name = "operation1"  value = "=" onclick = "calc.dis_cal.value = eval(calc.display.value)" class = "but_styling sign">
        </form>
    </div>

</body>
</html>




