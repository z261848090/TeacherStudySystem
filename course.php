<?php
// 交换数据
include_once 'logic/course.php';

$courseList = $GLOBALS["course_list"];
$GLOBALS["module"] = "course";
// include head file
include_once 'template/user_header.php';
?>

<div class="row">
	<div class="span6">
		<legend>课程设置</legend>
		<div class="row" style="margin-bottom:20px;">
			<button class="btn btn-primary pull-right" id="add-new">新增</button>
		</div>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>课程名称</th>
					<th>课程所属部门</th>
					<th>课程所属学科</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($courseList as $key => $course) {
					echo "<tr>";
					echo "<td>{$course["id"]}</td>";
					echo "<td>{$course["title"]}</td>";
					echo "<td>{$course["department"]}</td>";
					echo "<td>{$course["subject"]}</td>";
					echo "<td>
					<button onclick='editCourse({$course["id"]})' class='btn btn-mini btn-primary'><i class=\"icon-edit\"></i> 编辑</button>  
					<a class='btn btn-mini btn-danger' href='course.php?action=delete&id={$course["id"]}'>
					<i class='icon-trash'></i> 删除</a>
					</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</div>


<!-- 新增部门的弹出框 -->
<div id="course-add-modal" class="modal hide fade">
	<form action="course.php?action=add" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>新增课程</h3>
		</div>

		<div class="modal-body">
		
			<div class="control-group">
	          	<label class="control-label" for="input01">课程名称</label>
	          	<div class="controls">
            		<input placeholder="请输入课程名称" name="title" class="input-xlarge" type="text">
	            	<small class="help-block"><em>请在该文本框中输入您所要创建的课程的标题</em></small>
	          	</div>
	          	<div class="controls">
            		<input placeholder="请输入课程所属部门" name="department" class="input-xlarge" type="text">
	            	<small class="help-block"><em>请在该文本框中输入课程所属于的部门</em></small>
	          	</div>
	          	<div class="controls">
            		<input placeholder="请输入课程所属学科" name="subject" class="input-xlarge" type="text">
	            	<small class="help-block"><em>请在该文本框中输入课程所属于的学科</em></small>
	          	</div>
        	</div>

		    <div class="control-group">
	          	<label class="control-label">课程描述</label>
	          	<div class="controls">
		            <div class="textarea">
		                  <textarea class="span5" rows="4" name="description"> </textarea>
		            </div>
	          	</div>
       		</div>
		</div>
		

		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			<button class="btn btn-primary" type="submit">新增</button>
		</div>
	</form>
</div>


<!-- 新增部门的弹出框 -->
<div id="course-edit-modal" class="modal hide fade">
	<form action="course.php?action=add" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>编辑课程</h3>
		</div>

		<div class="modal-body">
		
			<div class="control-group">
	          	<label class="control-label" for="input01">课程名称</label>
		          	<div class="controls">
	            		<input placeholder="请输入课程名称" name="title" class="input-xlarge" type="text">
		            	<small class="help-block"><em>请在该文本框中输入您所要创建的课程的标题</em></small>
		          	</div>
		          	<div class="controls">
	            		<input placeholder="请输入课程所属部门" name="department" class="input-xlarge" type="text">
		            	<small class="help-block"><em>请在该文本框中输入课程所属于的部门</em></small>
		          	</div>
		          	<div class="controls">
	            		<input placeholder="请输入课程所属学科" name="subject" class="input-xlarge" type="text">
		            	<small class="help-block"><em>请在该文本框中输入课程所属于的学科</em></small>
		          	</div>
		    <div class="control-group">
	          	<label class="control-label">课程描述</label>
	          	<div class="controls">
		            <div class="textarea">
		                  <textarea class="span5" rows="4" name="description"> </textarea>
		            </div>
	          	</div>
       		</div>
		</div>
		

		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			<button class="btn btn-primary" type="submit">编辑</button>
		</div>
	</form>
</div>

<script type="text/javascript">
function editCourse(id){
	$.ajax({
		"type":"post",
		"dataType":"json",
		"data":{"id":id},
		"url":"logic/course.ajax.php",
		"success":function(data){
			$modal = $("#course-edit-modal");
			$form = $("form", $modal);
			$form.attr("action", "course.php?action=update&id="+data.id);

			$courseTitle = $("input[name=title]", $modal);
			$courseTitle.val(data.title);

			$departmentDescription = $("textarea[name=description]", $modal);
			$departmentDescription.html(data.description);

			$courseDepartment = $("input[name=department]", $modal);
			$courseDepartment.val(data.department);

			$courseSubject = $("input[name=subject]", $modal);
			$courseSubject.val(data.subject);

			$modal.modal();
		}
	});
}


// open the add modal
$(document).ready(function(){
	$("#add-new").click(function(){
		$("#course-add-modal").modal();
	});
});
</script>

<?php
include_once 'template/user_footer.php'; 
?>