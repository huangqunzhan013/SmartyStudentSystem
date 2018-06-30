<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include('../conn.php');
$xh=$_GET['tt'];
//$sql="select tb_student.xh,tb_student.xm,tb_sub.sub_name,tb_grade.grade from tb_student,tb_sub,tb_grade where tb_student.xh=tb_grade.xh and tb_grade.proid=tb_sub.sub_id where xh='$xh'";
$sql="select * from tb_grade where xh='$xh'";
$r=mysql_query($sql);
echo '<table  style="border-collapse:collapse"  class="table table-bordered  table table-striped table table-hover">';
echo '<tr><td>学号</td><td>科目编号</td><td>成绩</td></tr>';
while($row = mysql_fetch_array($r)){
		echo '<tr>';
		echo '<td>'.$row['xh'].'</td>';
		echo '<td>'.$row['proid'].'</td>';
		echo '<td>'.$row['grade'].'</td>';
		echo '</tr>';
	}	
echo '</table>';

	
	

?>
</body>
</html>