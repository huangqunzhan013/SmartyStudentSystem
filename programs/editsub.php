<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include('../init.inc.php');
include('../conn.php');
$id=$_REQUEST['id'];
$sql="select * from tb_grade where id='$id'";
$r=mysql_query($sql);
$row=mysql_fetch_array($r);
session_start();
$smarty->assign('username',$_SESSION['userName']);
$smarty->assign('ary',$row);
$smarty->display('editsub.html');
?>
</body>
</html>