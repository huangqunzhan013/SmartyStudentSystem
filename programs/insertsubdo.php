<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include('../conn.php');
include('../init.inc.php');
$xh=$_POST['xh'];
$kmid=$_POST['kmid'];
$cj=$_POST['cj'];
$sql="INSERT INTO tb_grade(id, xh, proid, grade ) VALUES (null,'$xh','$kmid','$cj')";
$result=mysql_query($sql);
if($result){
	echo '<script language="JavaScript">;alert("插入信息成功");location.href="subinfo.php";</script>;';
}else{
	echo '<script language="JavaScript">;alert("插入信息失败");location.href="subinfo.php";</script>;';
}
?>
</body>
</html>