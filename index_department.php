<?php
// 交换数据
include_once 'logic/department.php';
$subjectList = $GLOBALS["department_list"];
$GLOBALS["module"] = "department";
include_once 'template/index_header.php';
?>


<div class="container">
	<div class="row">
		<div class="span6">
			<legend>部门组</legend>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>序号</th>
						<th>部门组名称</th>
						<th>部门人数</th>
						<th>部门查看</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($subjectList as $key => $department) {
						echo "<tr>";
						echo "<td>{$department["id"]}</td>";
						echo "<td>{$department["title"]}</td>";
						echo "<td>{$department["num"]}</td>";
						echo "<td>
						<button onclick='editsubject({$department["id"]})' class='btn btn-mini btn-primary'><i class=\"icon-edit\"></i> 查看</button>  
						</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<div id="department-edit-modal" class="modal hide fade">
		<form action="index_department.php?action=add" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>部门</h3>
			</div>

			<div class="modal-body">
			
				<div class="control-group">
		          	<label class="control-label" for="input01">部门名称</label>
		          	<div class="controls">
	            		<input placeholder="请输入学科名称" name="title" class="input-xlarge" type="text">
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
			</div>
		</form>
	</div>


	<script type="text/javascript">
	function editsubject(id){
		$.ajax({
			"type":"post",
			"dataType":"json",
			"data":{"id":id},
			"url":"logic/department.ajax.php",
			"success":function(data){
				$modal = $("#department-edit-modal");
				$form = $("form", $modal);
				$form.attr("action", "department.php?action=update&id="+data.id);

				$subjectTitle = $("input[name=title]", $modal);
				$subjectTitle.val(data.title);

				$subjectDescription = $("textarea[name=description]", $modal);
				$subjectDescription.html(data.description);

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
</div>

<?php
include_once 'template/index_footer.php'; 
?>