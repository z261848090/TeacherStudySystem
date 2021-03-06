<?php
include('global.php');
?>
<!DOCTYPE html>
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

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <?php if (($_SESSION["user_login"][0]["permission"]) == 0):?>
          <a class="brand" href="#">中小学教师研修管理系统-用户</a>
          <?php endif;?>
          <?php if (($_SESSION["user_login"][0]["permission"]) == 1):?>
          <a class="brand" href="#">中小学教师研修管理系统-后台</a>
          <?php endif;?>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <strong>Logged in as </strong><a href="#" class="navbar-link"><?=$_SESSION['user_login'][0]['username']?></a>
            </p>
            <ul class="nav">
              <li class="active"><a href="/">回到主页</a></li>
              <li><a href="about.php">关于</a></li>
              <li><a href="contactus.php">联系我们</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">基础设置</li>
              <li <?php if($module == "department") echo "class='active'";?> ><a href="department.php">部门组设置</a></li>
              <li <?php if($module == "subject") echo "class='active'";?> ><a href="subject.php">学科组设置</a></li>
              <li <?php if($module == "course") echo "class='active'";?> ><a href="course.php">课程设置</a></li>
              <li class="nav-header">主要功能</li>
              <li><a href="admin_resource.php">资源</a></li>
              <li class="nav-header">用户相关</li>
              <?php if (($_SESSION["user_login"][0]["permission"]) == 1):?>
              <li <?php if($module == "add_user") echo "class='active'";?> ><a href="adduser.php">添加教师</a></li>
              <?php endif;?>
              <li <?php if($module == "look_teacher") echo "class='active'";?>><a href="teachermanagement.php">查看教师</a></li>
              <li <?php if($module == "edit_teacher") echo "class='active'";?>><a href="editteacher.php">编辑教师</a></li>
              <?php if (($_SESSION["user_login"][0]["permission"]) == 1):?>
              <li <?php if($module == "Permission_settings") echo "class='active'";?>><a href="Permission_settings.php">权限设置</a></li>
              <?php endif;?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

    <div class="span8">
        