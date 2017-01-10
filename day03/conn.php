<?php
//数据库引擎（MySQL，mysqli,pdo）
//1.打开数据库连接
//2.选择数据库
//3.设置传输编码
$link = @mysqli_connect('localhost', 'root', 'root') or die('数据库连接失败');
@mysqli_select_db($link, 'blog6') or die('数据库选择失败');
mysqli_set_charset($link, 'utf8');
?>