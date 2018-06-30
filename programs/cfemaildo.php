<?php
if(isset($_POST['sub'])){
	include('../init.inc.php');
	include('../conn.php');
	$username=$_POST['username'];
	$email=$_POST['email'];
	$sql="select * from user where username='$username'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	if($row['email']==$email){
		echo '<script language="JavaScript">;alert("账号邮箱正确，开始设置新密码");location.href="newpassword.php";</script>;';
	}else{
		echo '<script language="JavaScript">;alert("请输入正确的邮箱");location.href="cfemail.php";</script>;';
	}
}
?>