<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once('../init.inc.php');
require_once('../conn.php');
session_start();
if(isset($_SESSION['userName'])){
	header("location:index.php");
}else{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$sql="select * from user where username='$username' and password='$password'";
	$result=mysql_query($sql);
	if($row=mysql_fetch_array($result)){
		$_SESSION['userName']=$username;
		echo '<script language="JavaScript">;alert("登录成功");location.href="index.php";</script>;';
	}else{
		echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="login.php";</script>;';
	}
}
?>
</body>
</html>