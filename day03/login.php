<?php
include "conn.php";
if (isset($_POST['sub'])){
    $name = $_POST['name'];
    $pass =$_POST['pass'];
    $sql = "select * from user where uname='$name' and pass = '$pass'";
    $query=mysqli_query($link,$sql);
    $sr=mysqli_fetch_array($query);
    if($sr['uname']==$name&&$sr['pass']==$pass){
        setcookie('id',$sr['uid']);
        echo "<script>location='index.php'</script>";
    }
    else{
        echo "<script>alert('用户名或密码不正确请重新输入')</script>";
//        header('location:login.php');
        //header 在跳转的时候提到代码块最前面。
        echo "<script>location='login.php'</script>";

    }
}
?>
<meta charset="utf-8">
<form action="login.php" method="post">
    用户名：<input type="text" name="name"><br/>
    密码: <input type="password" name="pass" id="p1"><br/>
    <input type="submit" name="sub" value="登录">
</form>