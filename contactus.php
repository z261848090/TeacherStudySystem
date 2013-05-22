<?php
include_once 'template/index_header.php'; 
?>
<div class="container">
    <div class="jumbotron text-center">
        <h1>联系我们</h1>
        <p class="lead">电话：138xxxxxxxx</p>
        <p class="lead">邮箱：ynxyzgh123@xxxx.com</p>
        <p class="lead">地址：杭州电子科技大学</p>
        <p class="lead">邮编：310018</p>
        <p class="lead">传真：0571-xxxxxxxx</p>
        <a class="btn btn-large btn-success" href="#myModal" role="button"  data-toggle="modal">马上联系！</a>
    </div>
</div>

<div id="myModal" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h3>联系我们</h3>
    </div>
        <div class="modal-body">
            <p>谢谢您的宝贵意见!</p>
            <textarea rows="4" name="description" class="span5"></textarea>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
        <a href="#" class="btn btn-primary">发送</a>
    </div>
</div>
<?php 
include_once 'template/index_footer.php';
?>