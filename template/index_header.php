<?php 
include('global.php');
?>
<!doctype html>
<html lang="zh">
	<head>
		<meta charset="utf-8" />
		<link href="<?php echo STYLE_ROOT."bootstrap.css";?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo STYLE_ROOT."bootstrap-responsive.css";?>" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo STYLE_ROOT."jquery-ui-1.10.2.custom.css";?>" rel="stylesheet" type="text/css" media="screen" />
		<!-- Load js and css -->
		<script type="text/javascript" src="<?php echo SCRIPT_ROOT."jquery-1.9.1.js"?>"></script>
		<script type="text/javascript" src="<?php echo SCRIPT_ROOT."bootstrap.js";?>"></script>
		<script type="text/javascript" src="<?php echo SCRIPT_ROOT."jquery-ui-1.10.2.custom.js";?>"></script>
		<script type="text/javascript" src="<?php echo SCRIPT_ROOT."global.js";?>"></script>
		<title>中小学教师研修管理系统</title>
		<style type="text/css">
			body {
				padding-top:60px;
				padding-bottom:40px;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="index.php">中小学教师研修管理系统</a>
					
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="index.php">首页</a></li>
							<li><a href="index_resource.php">教师课程</a></li>
							<li><a href="index_teachermanagement.php">教师资源</a></li>
							<li><a href="index_department.php">部门</a></li>
							<li><a href="index_subject.php">学科</a></li>
							<li><a href="department.php">后台</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle"  data-toggle="dropdown" href="#">
									关于
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="about.php">关于该作品</a></li>
									<li><a href="Configuration.php">关于配置环境</a></li>
									<li class="divider"></li>
									<li class="nav-header">其他</li>
									<li><a href="contactus.php"><i class="icon-envelope"></i> 如何联系我</a></li>
									<li><a href="#"><i class="icon-leaf"></i> 关于产品发布与开源事项</a></li>
								</ul>
							</li>
						</ul>
						<?php 
						if (empty($_SESSION["user_login"])):
						?>
						<form class="navbar-form pull-right" action="logic/login.php" method="post">
							<input class="span2" type="text" name="email" placeholder="邮箱" />
							<input class="span2" type="password" name="password" placeholder="密码" />
							<button type="submit" class="btn">登陆</button>
						</form>
						<?php else:?>
					    <div class="btn-group pull-right">
						    <a class="btn btn-small" href="#"><i class="icon-user"></i> <?php echo $_SESSION["user_login"]["username"]; ?></a>
						    <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
						    <ul class="dropdown-menu">
							    <li><a href="#"><i class="icon-wrench"></i> 编辑</a></li>
							    <li class="divider"></li>
							    <li><a href="logic/logout.php"><i class="icon-off"></i> 退出</a></li>
						    </ul>
					    </div>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>