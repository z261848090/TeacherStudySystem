<?php
include_once 'template/index_header.php';
?>

<div class="container">
  <legend>资源查看</legend>
  <form class="form-search" style="margin-bottom:20px;">
    <laber>资源名称:</laber>
    <input type="text" class="input-medium search-query" placeholder="任选一个查询">
    <laber>上传者:</laber>
    <input type="text" class="input-medium search-query" placeholder="任选一个查询">
    <button type="search" class="btn btn-primary">查找</button>
  </form>
  <hr>
  <div>
    <button class=" btn btn-large" id=""><i class="icon-arrow-up"></i><strong class = "text-info">向上</strong></button>
    <button class=" btn btn-large" id=""><i class="icon-folder-close"></i><strong class = "text-info">根目录</strong></button>
    <button class=" btn btn-large" id=""><i class="icon-refresh"></i><strong class = "text-info">刷新</strong></button>
    <button class=" btn btn-large" id=""><i class="icon-download-alt"></i><strong class = "text-info">下载</strong></button>
  </div>
  <hr>
  <div class="row">
    <div class="span6">
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
            <th>操作</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
include_once 'template/index_footer.php'; 
?>