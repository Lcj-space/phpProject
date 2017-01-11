<?php
include "conn.php";
if (isset($_POST['sub'])) {
     $name = $_POST['name'];
     $pass = $_POST['pass'];
     $sql = "select * from user where uname='$name'";
     $query=mysqli_query($link,$sql);
     $sr=mysqli_fetch_array($query);
     if($sr['uname']==$name){
         echo "<script>alert('用户已存在')</script>";
//         header('location:reg.php');
     }else{
         $sql ="insert into user(uid,uname,pass) value(null,'$name','$pass')";
         $query=mysqli_query($link,$sql);
         header('location:login.php');
     }
}
?>

<meta charset="utf-8">
<form action="reg.php" method="post">
    用户名：<input type="text" name="name"><br/>
    密码: <input type="password" name="pass" id="p1"><br/>
    重复密码:<input type="password" name="rename" id="rp1"><br/>
    <input type="submit" name="sub" value="注册">
</form>

<script>
    var oP1 = document.getElementById('p1');
    var oRp1 = document.getElementById('rp1');
    oRp1.onblur = function () {
        if (oP1.value != oRp1.value) {
            alert('密码不一致');
        }
    }
</script>