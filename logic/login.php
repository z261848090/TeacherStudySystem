<?php
/**
 * Logic login
 * @copyright www.hdu.edu.cn
 * @author Zhu.Guohui
 * @uses used to deal user login
 */
require_once '../global.php';
require_once TABLE_ROOT."user.php";
if(!empty($_POST)){
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$dbUser = new Db_Table_User();
	$user = $dbUser->getUserByEmail($email);
	var_dump($user);
	if(count($user) == 0){
		redirect(SITE."login.php");
	}

	if(md5($password) == $user[0]["password"]) {
		$_SESSION["user_login"] = $user;
		redirect($_SERVER["HTTP_REFERER"]);
	}else {
		redirect(SITE."login.php");
	}
}