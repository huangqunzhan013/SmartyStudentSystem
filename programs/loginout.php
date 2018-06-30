<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once('../init.inc.php');
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['userName'])){
	session_destroy();
	$smarty->display('login.html');
}
?>
</body>
</html>