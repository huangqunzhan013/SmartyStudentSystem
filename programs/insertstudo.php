<?php
include('../conn.php');
include('../init.inc.php');
$xh=$_POST['xh'];
$xm=$_POST['xm'];
$sex=$_POST['sex'];
$bj=$_POST['bj'];
$sql="INSERT INTO tb_student(id, xh, xm, sex, bj) VALUES (null,'$xh','$xm','$sex','$bj')";
$result=mysql_query($sql);
if($result){
	echo '<script language="JavaScript">;alert("插入信息成功");location.href="index.php";</script>;';
}else{
	echo '<script language="JavaScript">;alert("插入信息失败");location.href="insertstu.php";</script>;';
}
?>