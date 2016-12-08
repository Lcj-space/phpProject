<?php
$homepage = file_get_contents('test.txt');
echo $homepage;
if(isset($_POST['Nsub'])){
    file_get_contents('index.php');
}
if(isset($_POST['Ysub'])){
    file_get_contents('next.php');
}
?>
?>

<form action="index.php" method="post">
    <input type="submit" value="我不同意" name="Nsub">
</form>
<form action="next.php">
    <input type="submit" value="同意注册" name="Ysub">
</form>

