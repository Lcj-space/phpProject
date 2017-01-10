<?php
include "conn.php";
?>
<meta charset="UTF-8">

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

        #container {
            width: 500px;
            height: 50%;
            /*background: black;*/
            margin: 0 auto;
            position: relative;
            border: 2px solid #e0e0e0;
        }

        .header {
            width: 100%;
            height: 20px;
            color: aqua;
            background: grey;
            border: 1px solid;
        }

        .content {
            width: 200px;
            height: 100px;
            color: antiquewhite;
            position: absolute;
            top: 200px;
            border: 1px solid;

        }

        h3 {
            display: inline-block;
        }

        .select {
            float: right;
            margin-right: 20px;
        }

        .article {
            width: 200px;
            height: 100px;
            position: absolute;
            top: 200px;
            right: 0;
            background: lightsalmon;
        }
        .article span{
            display: block;
            text-align: center;
            color:cyan;
        }
        .article h3{
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="container">
    <div class="header">
        <h3>:已登录</h3>
        <div class="select"><input type="text"><input type="submit" value="搜索"></div>
    </div>
    <div class="content">
        <?php
        $sql = "select * from blog";
        $query = mysqli_query($link, $sql);


        while ($sr = mysqli_fetch_array($query)) {
            ?>
            <span><?php echo $sr['title'] ?></span><br/>
            <?php
        }
        ?>
    </div>
    <div class="article">
        <h3>文章类型</h3>
        <?php
        $sql = "select * from catalog";
        $query = mysqli_query($link, $sql);
        while ($sv = mysqli_fetch_array($query)) {
            ?>
            <span><?php echo $sv['cname']?></span>
            <?php
        }
        ?>
    </div>
</div>

</body>
</html>
