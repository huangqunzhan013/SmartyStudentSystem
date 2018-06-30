<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include('../conn.php');
$id=$_POST['id'];
$xh=$_POST['xh'];
$xm=$_POST['xm'];
$sex=$_POST['sex'];
$bj=$_POST['bj'];
$sql="UPDATE tb_student SET xh='$xh',xm='$xm',sex='$sex',bj='$bj' WHERE id='$id'";
$r=mysql_query($sql);
if($r){
	echo '<script language="JavaScript">;alert("修改成功");location.href="index.php";</script>;';
}else{
	echo '<script language="JavaScript">;alert("修改失败");location.href="index.php";</script>;';
}
?>
</body>
</html>