<?php
require_once 'global.php';
require_once TABLE_ROOT."course.php";

// Get the action method
$action = $_GET["action"];


$dbCourse = new Db_Table_Course();

if($action == "delete") {
	$courseId = $_GET["id"];
	$dbCourse->deleteCourse($courseId);
}else if($action == "add"){
	// add a new course
	if(!empty($_POST)) {
		$course = $_POST;
		$dbCourse->addCourse($course);
	}
}else if($action == "update"){
	if(!empty($_POST)) {
		$id = $_GET["id"];
		$course = $_POST;
		$course["id"] = $id;
		$dbCourse->modifyCourse($course);
	}
}


// Ready the display 
$courseList = $dbCourse->getcourseList();
$GLOBALS["course_list"] = $courseList;