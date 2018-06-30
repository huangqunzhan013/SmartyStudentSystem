<?php
include('../init.inc.php');
include('../conn.php');
if(isset($_POST['sub'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$repassword=md5($_POST['repassword']);
	if($password!=$repassword){
		echo '<script language="JavaScript">;alert("两次密码不一致");location.href="newpassword.php";</script>;';
		exit();
	}
	$query="UPDATE user SET password='$password' WHERE username='$username'";
	if($r=mysql_query($query)){
		echo '<script language="JavaScript">;alert("修改密码成功，返回登录");location.href="login.php";</script>;';
	}else{
		echo '<script language="JavaScript">;alert("修改失败");location.href="newpassword.php";</script>;';
	}
}
?>