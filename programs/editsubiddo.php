<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include('../conn.php');
$sub_id=$_POST['sub_id'];
$sub_name=$_POST['sub_name'];
$sql="UPDATE tb_sub SET sub_name='$sub_name' WHERE sub_id='$sub_id'";
$r=mysql_query($sql);
if($r){
	echo '<script language="JavaScript">;alert("修改成功");location.href="subid.php";</script>;';
}else{
	echo '<script language="JavaScript">;alert("修改失败");location.href="subid.php";</script>;';
}
?>
</body>
</html>