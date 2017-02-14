<?php
if (isset($_POST['CreateSub'])) {
    $row = $_POST['row'];
    $list = $_POST['list'];
    $color = '';
    echo "<div style='position: absolute; right: 0 ; bottom: 0 ; width: 1000px; height: 200px'>";
    echo "<table border='1' width='500px'>";
    for ($i = 0; $i <= $row; $i++) {
        if ($i % 2 == 0) {
            $color = 'blue';
        } else {
            $color = 'red';
        }
        echo "<tr bgcolor=$color>";
        for ($j = 0; $j < $list; $j++) {
            echo "<td>";
            echo $j;
            echo "</td>";

//            echo "<script> var oContent=document.getElementById('content'); oContent.innerHTML = $i</script>";
        }
//        echo "</br>";>
        echo "</tr>";
    }
    echo "用户输出的行$row,列$list";
    echo "</table>";
    echo "</div>";
}
?>

<html>
<head>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background: gray;
        }

        /*#container {*/
        /*height: 500px;*/
        /*border: 1px solid black;*/
        /*}*/

        input {
            text-align: center;
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
    <meta charset="utf-8">
</head>
<body>
<!--<div id="container">-->
<h1>输入行列生成表格</h1>
<form action="09-ActiveForm.php" method="post" id="">
    输入行：<input type="text" name="row">
    </br></br>
    输入列：<input type="text" name="list">
    </br></br>
    <input type="submit" value="生成表格" name="CreateSub">
    <input type="submit" value="重置行列" name="ResetSub">
</form>
<!--    <div id="content">-->
<!---->
<!--    </div>-->
<!--</div>-->

</body>
</html>
