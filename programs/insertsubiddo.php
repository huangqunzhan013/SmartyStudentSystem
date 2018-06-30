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
$sub_name=$_POST['sub_name'];
$sql="INSERT INTO tb_sub(sub_id, sub_name) VALUES (null,'$sub_name')";
$result=mysql_query($sql);
if($result){
	echo '<script language="JavaScript">;alert("插入信息成功");location.href="subid.php";</script>;';
}else{
	echo '<script language="JavaScript">;alert("插入信息失败");location.href="subid.php";</script>;';
}
?>
</body>
</html>