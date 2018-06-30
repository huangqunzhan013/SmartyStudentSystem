<?php /* Smarty version 3.1.27, created on 2018-06-30 09:05:37
         compiled from "D:\wamp64\www\huangqunzhan\templates\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:258545b3747e1cb8428_87790547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da21cc0f88720e3b70e5e16013297fd79e98db8' => 
    array (
      0 => 'D:\\wamp64\\www\\huangqunzhan\\templates\\login.html',
      1 => 1512214418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258545b3747e1cb8428_87790547',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3747e1d8e083_43384162',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3747e1d8e083_43384162')) {
function content_5b3747e1d8e083_43384162 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258545b3747e1cb8428_87790547';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>成绩管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <?php echo '<script'; ?>
>
  	function yz(){
	var code = document.getElementById("code").value;

	if (code.length==4){
		
		try{
		    xmlhttp = new window.XMLHttpRequest();
	    }catch(e){
		 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }
		
		xmlhttp.open("GET","yz.php?code="+code,true);
		
		xmlhttp.onreadystatechange =schange;
		xmlhttp.send();
		
	}else{
		document.getElementById("ph").src="assets/img/error.png";
	}
	
}

function schange(){
	 if(xmlhttp.readyState==4 && xmlhttp.status==200){
		var rlt = xmlhttp.responseText;
		if (rlt == "r"){
			document.getElementById("ph").src="assets/img/right.png";
		}else{
			document.getElementById("ph").src="assets/img/error.png";
		}
		//window.location.href='logindo.php?str='+rlt;
		xmlhttp = null;
	}
}
  <?php echo '</script'; ?>
>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
	  <input type="text"  input-sm" name="code" onkeyup="yz()" size="10" id="code" style="height:30px;font-size:18px"/>
					<img src="code.php" onclick="this.src='code.php?id=Math.random()'"/>
					<div id="coderlt"><img id="ph" src="assets/img/error.png" height="30" width="30"/></div>
      *********************************************************************************************************************************************************** -->

	  
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="logindo.php" method="post">
		        <h2 class="form-login-heading">用户登录</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="User ID" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
					<br>
					<input type="text" name="code" onkeyup="yz()" size="10" id="code" style="height:30px; font-size:18px"/>
					<img src="code.php" onclick="this.src='code.php?id=Math.random()'"/>
					<div id="coderlt"><img id="ph" src="assets/img/error.png" height="30" width="30"/></div>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a  href="cfemail.php"> 忘记密码?</a>
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block"  type="submit" name="sub">登录</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            
		                
		            </div>
		            <div class="registration">
		                还没有账号?<br/>
		                <a class="" href="register.php">
		                    点这里
		                </a>
		            </div>
		
		
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.backstretch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $.backstretch("assets/img/login-bg1.JPG", {speed: 1000});
    <?php echo '</script'; ?>
>


  </body>
</html>
<?php }
}
?>