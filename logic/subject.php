<?php
require_once 'global.php';
require_once TABLE_ROOT."subject.php";

// Get the action method
$action = $_GET["action"];


$dbSubject = new Db_Table_Subject();

if($action == "delete") {
	$subjectId = $_GET["id"];
	$dbSubject->deleteSubject($subjectId);
}else if($action == "add"){
	// add a new subject
	if(!empty($_POST)) {
		$subject = $_POST;
		$dbSubject->addSubject($subject);
	}
}else if($action == "update"){
	if(!empty($_POST)) {
		$id = $_GET["id"];
		$subject = $_POST;
		$subject["id"] = $id;
		$dbSubject->modifySubject($subject);
	}
}


// Ready the display 
$subjectList = $dbSubject->getSubjectList();
foreach ($subjectList as $key => &$value) {
	$value["num"] = $dbSubject->getTeacherNumber($value["id"]);
}
$GLOBALS["subject_list"] = $subjectList;