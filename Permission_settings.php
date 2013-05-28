<?php
// 交换数据
include_once 'logic/permission.php';

$departmentList = $GLOBALS["departmentList"];
$subjectList = $GLOBALS["subjectList"];
$GLOBALS["module"] = "Permission_settings";

if(!empty($_POST)) {
	$op = $_GET["op"];
	if($op == "search"){
		$userName = $_POST["username"];
		$userInfo = array();
		$userInfo = $dbUser->getUserinfoByUsername($userName);
	}else if($op == "update"){
		$_POST["id"] = $_GET["id"];
		$dbUser->modifyUserinfoBypermission($_POST);
	}	
}

// include head file
include_once 'template/admin_header.php';
?>


<div class="container">
	<fieldset>
		<legend>权限</legend>

		<form class="form-search" method="post" action="Permission_settings.php?op=search">
		    <div class="input-append">
			    <input type="text" name = "username"  class="span2 search-query" placeholder="输入用户名查找" />
			    <button type="submit" class="btn btn-primary">查找</button>
		    </div>
		</form>

		<form action="Permission_settings.php?id=<?php echo $userInfo["id"]; ?>&op=update" method="post">
			<div class="row">
				<div class="span4 input-prepend">
					<span class="add-on">用户名*</span>
					<input type="text" value="<?php echo $userInfo["username"]; ?>" placeholder="请输入用户名" name="username" class="span3"/>
				</div>
				
				<div class="span4 input-prepend">
					<span class="add-on">邮箱*</span>
					<input type="text" placeholder="请输入邮箱" name="email" class="span3" value="<?php echo $userInfo["email"]; ?>" />
				</div>
			</div>
			
			<div class="row">
				<div class="span4 input-prepend">
					<span class="add-on">权限*</span>
					<input type="text" placeholder="权限控制" name="permission" class="span3" value="<?php echo $userInfo["permission"]; ?>" />
				</div>
				<div class="span4 input-prepend">
					<span class="add-on">登陆密码</span>
					<input type="password"  placeholder="请设置您登陆的密码" name="password" class="span3" />
				</div>
			</div>

			<legend>权限管理中，管理员权限为1：其他默认为0</legend>
			<div class="btn-group pull-center">
				<button class="btn btn-primary" type="submit">提交</button>
			</div>
		</form>
	</fieldset>
</div>

<script type="text/javascript">
/* Chinese initialisation for the jQuery UI date picker plugin. */
/* Written by Ressol (ressol@gmail.com). */
jQuery(function($){
	$.datepicker.regional['zh'] = {
		closeText: '关闭',
		prevText: '&#x3C;上月',
		nextText: '下月&#x3E;',
		currentText: '今天',
		monthNames: ['一月','二月','三月','四月','五月','六月',
		'七月','八月','九月','十月','十一月','十二月'],
		monthNamesShort: ['一月','二月','三月','四月','五月','六月',
		'七月','八月','九月','十月','十一月','十二月'],
		dayNames: ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'],
		dayNamesShort: ['周日','周一','周二','周三','周四','周五','周六'],
		dayNamesMin: ['日','一','二','三','四','五','六'],
		weekHeader: '周',
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: true,
		yearSuffix: '年'};
	$.datepicker.setDefaults($.datepicker.regional['zh-TW']);
});

$(document).ready(function(){
	$( "input[name=birthday]" ).datepicker( $.datepicker.regional[ "zh" ] );
	$("input[name=birthday]").datepicker();
});
</script>

<?php 
// inlcude footer file
include_once 'template/admin_footer.php';
?>