<?php /* Smarty version 3.1.27, created on 2017-12-04 17:10:06
         compiled from "D:\wamp64\www\php\huangqunzhan\templates\subinfo.html" */ ?>
<?php
/*%%SmartyHeaderCode:251495a25816e02c714_67224258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '949d1b434c5c625af62895cf502dee47bffd1e04' => 
    array (
      0 => 'D:\\wamp64\\www\\php\\huangqunzhan\\templates\\subinfo.html',
      1 => 1512399294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251495a25816e02c714_67224258',
  'variables' => 
  array (
    'username' => 0,
    'ary' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a25816e243069_39995090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a25816e243069_39995090')) {
function content_5a25816e243069_39995090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '251495a25816e02c714_67224258';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">   
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.min.css"> 
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="assets/js/chart-master/Chart.js"><?php echo '</script'; ?>
>
<style type="text/css">

.show-grid {
    margin-bottom: 20px;
    margin-top: 10px;
}
.show-grid .show-grid [class*="span"] {
    margin-top: 5px;
}


</style>

    
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

  <body>
  	

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>成绩管理系统</b></a>
            <!--logo end-->
			
            
                
            <div class="top-menu" align="right">
            	<ul class="nav pull-right top-menu">
					
                    <li><a class="logout" href="loginout.php">退出</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h4 class="centered">账号：<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h4>
              	  	
                  <li class="mt">
                      <a  href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>学生信息</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="subinfo.php" >
                          <i class="fa fa-desktop"></i>
                          <span>成绩信息</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="subid.php" >
                          <i class="fa fa-cogs"></i>
                          <span>科目信息</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>933</h3>
                  			</div>
					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 New files were added in your cloud storage.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>You have 23 unread messages in your inbox.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      
                      <!-- SERVER STATUS PANELS -->
					  <div class="main sidebar-minified">			
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="index.php"><i class="icon fa fa-home"></i>Home</a></li>
								<!--<li><a href="#"><i class="fa fa-table"></i>Tables</a></li>-->
								<li class="active"><i class="fa fa-pencil-square-o"></i>Editable</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Editable Table</h2>
						</div>					
					</div><br>
					<h3><i class="fa fa-angle-right"></i> 科目信息</h3>
					<!-- End Page Header -->
					<div class="row-fluid show-grid">
						<form action="insertsub.php" method="post">
							<button class="btn btn-round btn-info" type="sumbit">Add+</button>
						</form>
						<!--<form method="" action="">
							<div class="input-group col-md-3" style="margin-top:0px positon:relative">  
       							<input type="text" class="form-control"placeholder="请输入关健字" / >  
            						<span class="input-group-btn">  
               							<button class="btn btn-info btn-search">查找</button>  
               							  
            						</span>  
 							</div>  
						</form>-->

					<table  style="border-collapse:collapse"  class="table table-bordered  table table-striped table table-hover">
                			<tr>
                  				<th>学号</th>
                  				<th>科目编号</th>
                  				<th>成绩</th>
                  				<th>操作</th>
                			</tr>							
							<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
								<tr>				
									<th><?php echo $_smarty_tpl->tpl_vars['v']->value['xh'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['v']->value['proid'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['v']->value['grade'];?>
</th>
									<th><a href="editsub.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="on-default edit-row"><i class="fa fa-pencil"></i>&nbsp;编辑</a>
										<a href="deletesub.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="on-default remove-row"><i class="fa fa-trash-o"></i>&nbsp;删除</a>
									</th>	
								</tr>				
							<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
        			</table>
					</div>
					
				<!-- End Main Page -->
                      	<!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017-12    广东机电职业技术学院
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.nicescroll.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.sparkline.js"><?php echo '</script'; ?>
>


    <!--common script for all pages-->
    <?php echo '<script'; ?>
 src="assets/js/common-scripts.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/gritter-conf.js"><?php echo '</script'; ?>
>

    <!--script for this page-->
    <?php echo '<script'; ?>
 src="assets/js/sparkline-chart.js"><?php echo '</script'; ?>
>    
	<?php echo '<script'; ?>
 src="assets/js/zabuto_calendar.js"><?php echo '</script'; ?>
>	
	<!-- Vendor JS-->				
		<?php echo '<script'; ?>
 src="assets/vendor/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/vendor/js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/vendor/js/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/vendor/skycons/js/skycons.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/vendor/js/pace.min.js"><?php echo '</script'; ?>
>
		
		<!-- Plugins JS-->
		<?php echo '<script'; ?>
 src="assets/plugins/moment/js/moment.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/select2/select2.js"><?php echo '</script'; ?>
>				
		<?php echo '<script'; ?>
 src="assets/plugins/jquery-datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/jquery-datatables-bs3/js/datatables.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/magnific-popup/js/magnific-popup.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/plugins/sparkline/js/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
		
		<!-- Theme JS -->		
		<?php echo '<script'; ?>
 src="assets/js/jquery.mmenu.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/core.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/bootstrap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/js/jquery.js"><?php echo '</script'; ?>
>
		
		<!-- Pages JS -->
		<?php echo '<script'; ?>
 src="assets/js/pages/table-editable.js"><?php echo '</script'; ?>
>
		
	
	<?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	<?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    <?php echo '</script'; ?>
>
	
  

  </body>
</html>
<?php }
}
?>