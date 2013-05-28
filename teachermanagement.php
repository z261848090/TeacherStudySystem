<?php
require_once 'global.php';
require_once TABLE_ROOT."user.php";
require_once TABLE_ROOT."subject.php";
require_once TABLE_ROOT."department.php";
$dbUser = new Db_Table_User();
$dbDepartment = new Db_Table_Department();
$dbSubject = new Db_Table_Subject();
$userList = $dbUser->getUserList();
$GLOBALS["module"] = "look_teacher";
//$userListByOne = $dbUser->getUserListByOne();


if(!empty($_POST)) {
	$userName = $_POST["username"];
	$userList = array();
	$userList[0] = $dbUser->getUserinfoByUsername($userName);
}

include_once 'template/user_header.php';
?>

<div >
	<legend>用户管理</legend>

	<form class="form-search" method="post" action="teachermanagement.php">
	    <div class="input-append">
		    <input type="text" name = "username"  class="span2 search-query" placeholder="输入用户名查找" />
		    <button type="submit" class="btn btn-primary">查找</button>
	    </div>
	</form>

	<div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>用户名</th>
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
				<?php
				foreach ($userList as $key => $value) {
					if (($value["id"]) != 0){
					echo "<tr>";
					echo "<td>{$value["id"]}</td>";
					echo "<td>{$value["username"]}</td>";
					$subject = $dbSubject->getSubjectById($value["subject_id"]);
					$department = $dbDepartment->getDepartmentById($value["department_id"]);
					echo "<td>{$department["title"]}</td>";
					echo "<td>{$subject["title"]}</td>";
					echo "<td>{$value["gender"]}</td>";
					echo "<td>{$value["birthday"]}</td>";
					echo "<td>{$value["identity"]}</td>";
					echo "<td>{$value["tel"]}</td>";
					echo "<td>{$value["phone"]}</td>";
					echo "<td>{$value["nation"]}</td>";
					echo "<td>{$value["degree"]}</td>";
					echo "<td>{$value["titles"]}</td>";
					echo "<td>{$value["position"]}</td>";
					echo "</tr>";
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>


<?php
include_once 'template/user_footer.php';
?>
