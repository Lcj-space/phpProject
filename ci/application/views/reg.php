<meta charset="utf-8">
<link rel="stylesheet" href="../../assets/css/1.css">
<script src="../../assets/js/jquery.min.js"></script>
<div id="div1">
    <form action="<?php echo site_url('user/do_reg');?>" method="post">
        用户名: <input type="text" name="uname" id="li"><br/>
        密码: <input type="password" name="pass"><br/>
        重复密码: <input type="password" name="rpass"><br/>
        <input type="submit" name="sub" value="注册">
    </form>
</div>
<script>
    $(function () {
        $('#li').blur(function () {
//            alert('123')
        })
    })
</script>