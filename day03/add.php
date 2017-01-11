<?php
include "conn.php";
if(isset($_COOKIE['id'])){
    if (isset($_POST['sub'])) {
        $title = $_POST['title'];
        $catalog = $_POST['catalog'];
        $con = $_POST['con'];
        $sql = "insert into blog(wid,title,content,time,hites,uid,cid) values (null,'$title','$con',now(),null,null,null)";
        $query = mysqli_query($link, $sql);
        if($query){
            header('location:index.php');
        }else{
            header('location:add.php');
        }
    }
}else{
    echo "<script>alert('请登录')</script>";
    echo "<script>location='login.php'</script>";
}

?>
<meta charset="utf-8">
<form action="add.php" method="post">
    标题: <input type="text" name="title">&nbsp;&nbsp;
    <select name="catalog">
        <?php
        $sql = "select * from catalog";
        $query = mysqli_query($link, $sql);
        while ($rs = mysqli_fetch_array($query)) {
            ?>
            <option value="<?php echo $rs['cid'] ?>"><?php echo $rs['cname'] ?></option>
            <?php
        }
        ?>
    </select>
    内容： <textarea name="con" id="" cols="20" rows="10"></textarea> <br/>
    <input type="submit" name="sub" value="添加">
</form>
