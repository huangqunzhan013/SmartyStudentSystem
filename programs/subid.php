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
session_start();
$sql="select * from tb_sub";
	$result=mysql_query($sql);
	$ary=array();
	while($row=mysql_fetch_array($result)){
		$ary[]=$row;
	}
$smarty->assign('ary',$ary);
$smarty->assign('username',$_SESSION['userName']);
$smarty->display('subid.html');
?>
</body>
</html>