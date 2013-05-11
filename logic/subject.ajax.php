<?php
require_once '../global.php';
require_once TABLE_ROOT."subject.php";

if(!empty($_POST)){
	$id = $_POST["id"];

	$dbSubject = new Db_Table_Subject();
	$subject = $dbSubject->getSubjectById($id);
	echo json_encode($subject);
}