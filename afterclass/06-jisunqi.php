<?php
if (isset($_POST['sub'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
//    echo $num1;
    $ysf = $_POST['ysf'];
    $sum = 0;
    switch ($ysf) {
        case '+':
            $sum = $num1 + $num2;
            break;
        case '-':
            $sum = $num1 - $num2;
            break;

        case 'X':
            $sum = $num1 * $num2;
            break;

        case '/':
            $sum = $num1 / $num2;
            break;
        default:
            echo "运算符非法";
    }
//    echo $sum;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #container {
            margin: 100px;

        }
    </style>
</head>
<body>
<div id="container">
    <table id="content">
        <form action="06-jisunqi.php" method="post">
            <tr>
                <td><input type="text" name="num1" value=<?php echo $num1 ?>></td>

                <td><select name="ysf">
                        <option value="+"<?php if ($ysf == '+') {
                            echo 'selected';
                        } ?>>+
                        </option>

                        <option value="-"<?php if ($ysf == '-') {
                            echo 'selected';
                        } ?>>-
                        </option>

                        <option value="X"<?php if ($ysf == 'X') {
                            echo 'selected';
                        } ?>>*
                        </option>

                        <option value="/"<?php if ($ysf == '/') {
                            echo 'selected';
                        } ?>>/
                        </option>
                    </select>
                </td>
                <td><input type="text" name="num2" value=<?php echo $num2 ?>></td>
                <td><input type="submit" name="sub" value="计算"></td>
            </tr>
            <tr>
                <input class="result" type="text" value="结果为：<?php
                if ($num1 == 'a' || $num1 == '%') {
                    echo $num1 . "第一个不是数字";
                } else if ($num2 == 'a' || $num2 == '%') {
                    echo $num2 . "第二个不是数字";
                } else
                    echo   $sum;
                ?>">
            </tr>
        </form>


    </table>

</div>
</body>
</html>
