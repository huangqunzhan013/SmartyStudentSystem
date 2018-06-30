<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
header("content-type:text/html;charset=utf-8");
include("../conn.php");
include('../init.inc.php');
if(isset($_POST['sub'])){
	$username=$_POST['username'];
	$password1=md5($_POST['password']);
	$password2=md5($_POST['repassword']);
	$email=$_POST['email'];
	$query="select * from user where username='$username'";
	$r=mysql_query($query);
	$row=mysql_fetch_array($r);
	if($row['username']==$username){
		echo '<script language="JavaScript">;alert("用户名已存在");location.href="register.php";</script>;';
		exit;
	}
	if($password1!=$password2){
		echo '<script language="JavaScript">;alert("两次密码不一致，请重新登录");location.href="register.php";</script>;';
	}else{
		$sql="INSERT INTO user(id, username, password, email) VALUES (null,'$username','$password1','$email')";
		if(mysql_query($sql)){
			echo '<script language="JavaScript">;alert("注册成功，去登录");location.href="login.php";</script>;';
		}else{
			echo '<script language="JavaScript">;alert("注册失败");location.href="register.php";</script>;';
		}
	}
}
?>
</body>
</html>