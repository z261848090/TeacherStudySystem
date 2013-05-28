<?php
// 交换数据
include_once 'logic/department.php';

$departmentList = $GLOBALS["department_list"];


$GLOBALS["module"] = "department";
// include head file
include_once 'template/user_header.php';
?>

<div class="row">
	<div class="span6">
		<legend>部门组设置</legend>
		<div class="row" style="margin-bottom:20px;">
			<button class="btn btn-primary pull-right" id="add-new">新增</button>
		</div>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>部门组名称</th>
					<th>人数</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($departmentList as $key => $department) {
					echo "<tr>";
					echo "<td>{$department["id"]}</td>";
					echo "<td>{$department["title"]}</td>";
					echo "<td>{$department["num"]}</td>";
					echo "<td>
					<button onclick='editDepartment({$department["id"]})' class='btn btn-mini btn-primary'><i class=\"icon-edit\"></i> 编辑</button>  
					<a class='btn btn-mini btn-danger' href='department.php?action=delete&id={$department["id"]}'>
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
<div id="department-add-modal" class="modal hide fade">
	<form action="department.php?action=add" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>新增部门</h3>
		</div>

		<div class="modal-body">
		
			<div class="control-group">
	          	<label class="control-label" for="input01">部门名称</label>
	          	<div class="controls">
            		<input placeholder="请输入部门名称" name="title" class="input-xlarge" type="text">
	            	<small class="help-block"><em>请在该文本框中输入您所要创建的部门的标题</em></small>
	          	</div>
        	</div>

		    <div class="control-group">
	          	<label class="control-label">部门描述</label>
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
<div id="department-edit-modal" class="modal hide fade">
	<form action="department.php?action=add" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>编辑部门</h3>
		</div>

		<div class="modal-body">
		
			<div class="control-group">
	          	<label class="control-label" for="input01">部门名称</label>
	          	<div class="controls">
            		<input placeholder="请输入部门名称" name="title" class="input-xlarge" type="text">
	            	<small class="help-block"><em>请在该文本框中输入您所要创建的部门的标题</em></small>
	          	</div>
        	</div>

		    <div class="control-group">
	          	<label class="control-label">部门描述</label>
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
function editDepartment(id){
	$.ajax({
		"type":"post",
		"dataType":"json",
		"data":{"id":id},
		"url":"logic/department.ajax.php",
		"success":function(data){
			$modal = $("#department-edit-modal");
			$form = $("form", $modal);
			$form.attr("action", "department.php?action=update&id="+data.id);

			$departmentTitle = $("input[name=title]", $modal);
			$departmentTitle.val(data.title);

			$departmentDescription = $("textarea[name=description]", $modal);
			$departmentDescription.html(data.description);

			$modal.modal();
		}
	});
}


// open the add modal
$(document).ready(function(){
	$("#add-new").click(function(){
		$("#department-add-modal").modal();
	});
});
</script>

<?php
include_once 'template/user_footer.php'; 
?>