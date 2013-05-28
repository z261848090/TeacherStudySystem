<?php
require_once '../global.php';
require_once TABLE_ROOT."course.php";

if(!empty($_POST)){
	$id = $_POST["id"];

	$dbCourse = new Db_Table_Course();
	$course = $dbCourse->getCourseById($id);
	echo json_encode($course);
}