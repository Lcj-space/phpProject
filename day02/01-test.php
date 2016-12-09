<?php
if (isset($_POST['sub'])){

}
?>

<html>
<form action="01-test.php" method="post">
    请出拳
    <select name="cq" id="cq">
        <option value="0">拳头</option>
        <option value="1">剪刀</option>
        <option value="2">布</option>
    </select>
    <img src="1.jpg" alt="" id="img1">
    <input type="submit" value="提交" name="sub">
</form>
<!--<script>-->
<!--    var s =document.getElementById('cq');-->
<!--    var oImg = document.getElementById('img1');-->
<!--    s.onclick = function () {-->
<!---->
<!--    }-->
<!--</script>-->
</html>
