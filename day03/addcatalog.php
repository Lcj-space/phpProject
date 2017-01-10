<?php
include "conn.php";
if (isset($_POST['sub'])){
    $cname = $_POST['cname'];
    $sql = "select * from catalog where cname='$cname'";
    $query = mysqli_query($link,$sql);
    $result = mysqli_fetch_array($query);
    if($result){
//        echo '插入失败';
        echo "<script> alert('插入失败')</script>";
        echo "<script>location='addcatalog.php';</script>";
    }else{
        $sql = "insert into catalog(cid,cname) value(null,'$cname')";
        $query = mysqli_query($link,$sql);
    }
}
?>
<meta charset="utf-8">
<form action="addcatalog.php" method="post">
    分类内容<input type="text" name="cname">&nbsp;&nbsp;
    <input type="submit" name="sub" value="添加分类">
</form>
