<?php
require_once 'global.php';
require_once TABLE_ROOT."department.php";
require_once TABLE_ROOT."user.php";
require_once TABLE_ROOT."subject.php";

// Get the action method
$action = $_GET["action"];


$dbUser = new Db_Table_User();


# ready department and subject data
 $dbDepartment = new Db_Table_Department();
 $departmentList = $dbDepartment->getDepartmentList();
 $GLOBALS["departmentList"] = $departmentList;

 $dbSubject = new Db_Table_Subject();
 $subjectList = $dbSubject->getSubjectList();
 $GLOBALS["subjectList"] =  $subjectList;
