<?php
if (isset($_POST['sub'])){
  $ca = $_POST['ca'];
  $sql = "sele";
}
?>
<meta charset="utf-8">
<form action="catalog.php" method="post">
    分类：<input type="text" name="ca">
    <input type="submit" name="sub" value="添加分类">
</form>