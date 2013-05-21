<?php
require_once 'global.php';
include_once 'template/admin_header.php';
?>

<form class="form">
	<legend>用户管理</legend>
	<div>
		<form class="form-search" style="margin-bottom:20px;">
			<laber>用户名:</laber>
		    <input type="text" class="input-medium search-query">
		    <laber>姓名:</laber>
		    <input type="text" class="input-medium search-query">
		    <button type="search" class="btn btn-primary">查找</button>
	    </form>
	    <hr>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>用户名</th>
					<th>姓名</th>
					<th>所在部门</th>
					<th>所在学科</th>
					<th>性别</th>
					<th>出生年月</th>
					<th>身份证号</th>
					<th>宅电</th>
					<th>手机</th>
					<th>名族</th>
					<th>学历</th>
					<th>职称</th>
					<th>职务</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</form>


<?php
include_once 'template/admin_footer.php';
?>
