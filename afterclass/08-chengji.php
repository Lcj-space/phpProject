<?php
if (isset($_POST['sub'])) {
//    $grade = $_POST['grade'];
    echo $grade;
    if ($grade >= '80' && $grade <= '100') {
        echo "<script>alert('你的成绩是优秀')</script>";
    }
    elseif ($grade>=60&& $grade<80){
        echo "<script>alert('你的成绩是合格')</script>";
    }
    else {
        echo "<script>alert('你的成绩不合格')</script>";
    }
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

        #content {
            background: gray;
            width: 400px;
            height: 300px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
<div id="content">
    <form action="08-chengji.php" method="post">
        <h1>输入分数查询成绩</h1>
        分数：<input type="text" name="grade">
        </br>
        </br>
        <input type="submit" value="提交查询" name="sub">
        <input type="submit" value="重置分数" name="reset">
    </form>
</div>

</body>
</html>
