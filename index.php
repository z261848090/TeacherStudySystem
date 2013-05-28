<?php
require_once 'global.php';
require_once TABLE_ROOT."user.php";
require_once TABLE_ROOT."subject.php";
require_once TABLE_ROOT."department.php";
require_once TABLE_ROOT."course.php";
$dbUser = new Db_Table_User();
$dbDepartment = new Db_Table_Department();
$dbSubject = new Db_Table_Subject();
$dbCourse = new Db_Table_Course();
$courseList = $dbCourse->getCourseList();
include_once 'template/index_header.php'; 
?>
<div class="container">
	<div class="hero-unit">
        <h1>欢迎使用中小学教师研修管理系统</h1>
        <p>中小学教师研修管理系统是一个给你介绍好的教师，好的资源，让您的孩子可以接受到更好地教育，得到更好地资源。
        我们致力于更好地管理教师资源。也是一个教师自交互相学习，获取教学资源的一个地方。欢迎您加入到我们。</p>
        <p><a class="btn btn-primary btn-large" href="Configuration.php" target="_blank">了解更多</a></p>
    </div>

    <div class="row">
        <?php foreach ($courseList as $key => $value): ?>
        <div class="span3 text-center">
            <h2><?php echo $value["title"];?></h2>
            <p><?php echo $value["description"]; ?>
            </p>
            <p><a class="btn btn-success" href="index_course.php">查看细节 »</a></p>
        </div>
     <?php endforeach;?>
    </div>
</div>
<hr>
<div class="container">
    <footer>
        <p>&copy;杭州电子科技大学 计算机学院</p>
    </footer>  
</div>
<?php 
include_once 'template/index_footer.php';
?>