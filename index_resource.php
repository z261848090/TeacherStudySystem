<?php
include_once 'template/index_header.php';
include_once 'global.php';
require_once TABLE_ROOT."resource.php";
require_once "logic/upfile.php";
$dbRes = new Db_Table_resource();
$resList = $dbRes->getResList();
$path='upfiles';
/*更新点击*/
if ($_POST['m']=='hits'){
  $reshits = $dbRes->hits($_POST['id']);
}
/*更新信息*/
if ($_POST['m']=='update'){
  $id=$_POST['id'];
  $title=$_POST['title'];
  $describe=$_POST['describe'];
  $sql="update tss_resource_file set `title`='{$title}',`describe`='{$describe}' where id={$id}";
  $resList = $dbRes->Resquery($sql);
  
  if($resList){
    echo "<script>alert(\"修改成功!\");window.location.href='admin_resource.php'</script>";
  }
}
/*删除信息*/
if ($_GET['m']=='del'){
  $id=$_GET['id'];
  $delfile=$_GET['url'];
  //删除文件

  if(file_exists($delfile)) {
    @unlink($delfile);
  } 
  
  if($dbRes->deleteRes($id)){
    echo "<script>alert(\"删除成功!\\n{$fs}\");window.location.href='admin_resource.php'</script>";
  }
}
/*查询*/
if(!empty($_POST)) {
  $op = $_GET["op"];
  if($op == "search"){
    $title = $_POST["title"];
    $user_name = $_POST["user_name"];

    $w1=!empty($title)?"and title like '%{$title}%'":'';
    $w2=!empty($user_name)?"and user_name like '%{$user_name}%'":'';
    
    $whereString=$w1.' '.$w2;

    $resList = $dbRes->getResList($whereString);
    //$userInfo = $dbUser->getUserinfoByUsername($userName);
  } 
}
/* 上传文件 */

if($_POST['upload'] && !empty($_FILES['upfiles']['name']))
{
  if(!(upfile("upfiles","",$path)))
  {
    echo"<script>alert(\"上传失败!\");window.location.href='admin_resource.php'</script>";
  }else {
    $title=$_POST['fname'];
    $extension=get_extension($_FILES['upfiles']['name']);
    $size=$_FILES['upfiles']['size'];
    
    $user_name=$_SESSION['user_login'][0]['username'];
    $department=$_SESSION['user_login'][0]['department_id'];
    $department=empty($department)?0:$department;
    $subject=$_SESSION['user_login'][0]['subject_id'];
    $subject=empty($subject)?0:$subject;
    $describe=$_POST['describe'];
    $url=$path.'/'.$_FILES['upfiles']['name'];
    $create_time= date("Y-m-d H:i:s");
    
    $sql="INSERT into tss_resource_file (`title`,`extension`,`user_name`,`create_time`,`size`,`department`,`subject`,`describe`,`url`)
    values(
    '{$title}',
    '{$extension}',
    '{$user_name}',
    '{$create_time}',
    {$size},
    {$department},
    {$subject},
    '{$describe}',
    '{$url}'
    )";
    $resList = $dbRes->Resquery($sql);

    if($resList){
      echo "<script>alert(\"上传成功!\");window.location.href='admin_resource.php'</script>";
    }
  }
}
?>
<script>
function hits(id,url){
  htmlobj=$.post("admin_resource.php", { m: "hits", id: id } );
  window.open(url);

}
function edit_panel(id,title,describe){
  console.debug(title);
  //$("form[name='f2'] > #a").val("even5"); 
  $("#edit #id").val(id);
  $("#edit #title").val(title);
  $("#edit #describe").val(describe);
  $( "#edit" ).dialog();
  

}
</script>

<div class="container">
  <legend>资源查看</legend>
  <form class="form-search" style="margin-bottom:20px;" method="post" action="?op=search">
    <laber>资源名称:</laber>
    <input type="text" name="title" class="input-medium search-query" placeholder="任选一个查询">
    <laber>上传者:</laber>
    <input type="text" name="user_name" class="input-medium search-query" placeholder="任选一个查询">
    <button type="search" class="btn btn-primary">查找</button>
  </form>
  <hr>
  <div class="row">
    <div class="span9">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>序号</th>
            <th>资源名称</th>
            <th>大小</th>
            <th>类型</th>
            <th>上传者</th>
            <th>更新时间</th>
            <th>点击数</th>
            <th>描述</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach ($resList as $k=>$v){
                echo "<tr>";
                echo"<td>{$v['id']}</td>";
                echo"<td><a onclick='hits({$v['id']},\"{$v['url']}\")' title='{$v['describe']}' href='#'>{$v['title']}</a></td>";
                echo"<td>{$v['size']}</td>";
                echo"<td>{$v['extension']}</td>";
                echo"<td>{$v['user_name']}</td>";
                echo"<td>{$v['create_time']}</td>";
                echo"<td>{$v['hits']}</td>";
                echo"<td>{$v['describe']}</td>";
                echo"<td>
                  <a onclick='hits({$v['id']},\"{$v['url']}\")' title='{$v['describe']}' href='#'>下载</a>";
                echo"</tr>";
              }
              ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include_once 'template/index_footer.php'; 
?>