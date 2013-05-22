<?php
// 交换数据
include_once 'logic/adduser.php';

if(!empty($GLOBALS["userinfo"])){
	$userInfo = $GLOBALS["userinfo"];
}
$departmentList = $GLOBALS["departmentList"];
$subjectList = $GLOBALS["subjectList"];
$GLOBALS["module"] = "add_user";
// include head file
include_once 'template/admin_header.php';
?>


<form class="form" action="adduser.php" method="post" >
	<fieldset>
		<legend>入校</legend>
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
				<span class="add-on">所属部门*</span>
				<select name="department">
					<option value="0" <?php if($userInfo["department"] == 0) echo "selected" ?> >==请选择==</option>
					<?php
					foreach ($departmentList as $key => $department) {
						if($userInfo["department"] == $department["id"]){
							echo "<option value='{$department["id"]}'  selected>{$department["title"]}</option>";
						}else{
							echo "<option value='{$department["id"]}'>{$department["title"]}</option>";
						}
						
					}
					?>
				</select>
			</div>
			
			<div class="span4 input-prepend">
				<span class="add-on">所属学科*</span>
				<select name="subject">
					<option value="0" <?php if($userInfo["subject"] == 0) echo "selected" ?>>==请选择==</option>
					<?php
					foreach ($subjectList as $key => $subject) {
						if($userInfo["subject"] == $subject["id"]){
							echo "<option value='{$subject["id"]}'  selected>{$subject["title"]}</option>";
						}else{
							echo "<option value='{$subject["id"]}'>{$subject["title"]}</option>";
						}
						
					}
					?>
				</select>
			</div>
		</div>
		
		<div class="row">
			<div class="span4 input-prepend">
				<span class="add-on">性别 </span>
				<input type="text" placeholder="请输入性别" name="gender" class="span3"  value="<?php echo $userInfo["gender"]; ?>"/>
				</label>
			</div>
			
			<div class="span4 input-prepend">
				<span class="add-on">登陆密码</span>
				<input type="password"  placeholder="请设置您登陆的密码" name="password" class="span3" />
			</div>
		</div>
		
		<div class="row">
			<div class="span4 input-prepend">
				<span class="add-on">身份证号</span>
				<input type="text" placeholder="请输入身份证号" name="identity" class="span3"  value="<?php echo $userInfo["identity"]; ?>"/>
			</div>
			
			<div class="span4 input-prepend">
				<span class="add-on">出生年月</span>
				<input type="text"  placeholder="XXXX-XX-XX" name="birthday" class="span3" value="<?php echo $userInfo["birthday"]; ?>" />
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="span4 input-prepend">
				<span class="add-on">宅电</span>
				<input type="text" placeholder="请输入电话号码" name="tel" class="span3" value="<?php echo $userInfo["tel"]; ?>"/>
			</div>
			
			<div class="span4 input-prepend">
				<span class="add-on">手机</span>
				<input type="text" placeholder="请输入手机号码" name="phone" class="span3" value="<?php echo $userInfo["phone"]; ?>" />
			</div>
		</div>
		<div class="row">
			<div class="span4 input-prepend">
				<span class="add-on">民族</span>
				<input type="text" name="nation" class="span3" placeholder="请输入民族，比如汉" value="<?php echo $userInfo["nation"]; ?>" />
			</div>
			
			<div class="span4 input-prepend">
				<span class="add-on">学历</span>
				<input type="text" name="degree" class="span3" placeholder="请输入您的学历" value="<?php echo $userInfo["degree"]; ?>" />
			</div>
		</div>
		<div class="row">
			<div class="span4 input-prepend">
				<span class="add-on">职称</span>
				<input type="text" name="titles" class="span3" placeholder="请输入您的职务" value="<?php echo $userInfo["titles"]; ?>" />
			</div>
			<div class="span4 input-prepend">
				<span class="add-on">职务</span>
				<input type="text" placeholder="请输入职位" name="position" class="span3" value="<?php echo $userInfo["position"]; ?>" />
			</div>
		</div>
		<hr/>
		<div>
			<label for="description">工作简历</label>
			<textarea rows="4" name="description" class="span10"><?php echo $userInfo["description"]; ?></textarea>
		</div>
		
		<div class="btn-group pull-right">
			<button class="btn btn-primary" type="submit">提交</button>
			<button class="btn" type="submit">保存</button>
		</div>
	</fieldset>
</form>

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