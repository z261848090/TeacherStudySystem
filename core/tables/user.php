<?php
require_once(CORE_PATH."config.php");

class Db_Table_User extends Mysql{
	private $tableName = "user";
	
	public function __construct(){
		if(empty($GLOBALS["database"])){
			error("缺少数据库配置");
		}
		$this->tableName = $GLOBALS["database"]["pre"].$this->tableName;
		parent::__construct($GLOBALS["database"]);
	}
	
	public function __destruct(){
		parent::__destruct();
	}
	
	public function getUserByEmail($email){
		$sql = "select * from {$this->tableName} where email = '{$email}'";
		return $this->fetchAll($sql);
	}
	
	public function addUser($userInfo){
		$username = $this->filterString($userInfo["username"]);
		$email = $this->filterString($userInfo["email"]);
		$departmentId = intval($userInfo["department"]);
		$password = $this->filterString($userInfo["password"]);
		$subjectId = intval($userInfo["subject"]);
		$gender = ($userInfo["gender"]);
		$birthday = $userInfo["birthday"];
		$identity = $this->filterString($userInfo["identity"]);
		$tel = $this->filterString($userInfo["tel"]);
		$phone = $this->filterString($userInfo["phone"]);
		$nation = $this->filterString($userInfo["nation"]);
		$degree = ($userInfo["degree"]);
		$titles = ($userInfo["titles"]);
		$position = $this->filterString($userInfo["position"]);
		$description = $userInfo["description"];
		
		$password = md5($password);
		$createTime = date("Y-m-d H:i:s");
		
		$sql = "insert into {$this->tableName}(
			username, email, password, gender, description, create_time, subject_id, department_id,birthday,identity,tel,phone,nation,degree,titles,position) 
			values(
			'{$username}',
			'{$email}',
			'{$password}',
			'{$gender}',
			'{$description}',
			'{$createTime}',
			{$subjectId},
			{$departmentId},
			'{$birthday}',
			'{$identity}',
			'{$tel}',
			'{$phone}',
			'{$nation}',
			'{$degree}',
			'{$titles}',
			'{$position}'
		)";

		$this->query($sql);
	}

	public function getUserList(){
		$sql = "select * from {$this->tableName}";
		return $this->fetchAll($sql);
	}

	public function getUserListByOne(){
		$sql = "select * from {$this->tableName}";
		return $this->fetchOne($sql);
	}

	public function getUserinfoById($id){
		$id = intval($id);
		$sql = "select * from {$this->tableName} where id={$id}";
		return $this->fetchOne($sql);
	}

	public function getUserinfoByUsername($username){
		$username = $this->filterString($username);
		$sql = "select * from {$this->tableName} where username = '{$username}'";
		return $this->fetchOne($sql);
	}


	public function deleteUserinfo($id){
		$id = intval($id);
		$sql = "delete from {$this->tableName} where id={$id}";
		return $this->query($sql);
	}

	public function modifyUserinfo($userInfo){
		$id = intval($userInfo["id"]);
		$username = $this->filterString($userInfo["username"]);
		$email = $this->filterString($userInfo["email"]);
		$departmentId = intval($userInfo["department"]);
		$password = $this->filterString($userInfo["password"]);
		$subjectId = intval($userInfo["subject"]);
		$gender = ($userInfo["gender"]);
		$birthday = $userInfo["birthday"];
		$identity = $this->filterString($userInfo["identity"]);
		$tel = $this->filterString($userInfo["tel"]);
		$phone = $this->filterString($userInfo["phone"]);
		$nation = $this->filterString($userInfo["nation"]);
		$degree = ($userInfo["degree"]);
		$titles = ($userInfo["titles"]);
		$position = $this->filterString($userInfo["position"]);
		$description = $userInfo["description"];

		$sql = "update {$this->tableName} set 
			username = '{$username}', 
			email = '{$email}', 

			gender = '{$gender}',
			description = '{$description}',
			subject_id = {$subjectId},
			department_id = {$departmentId},
			birthday = '{$birthday}',
			identity = '{$identity}',
			tel = '{$tel}',
			phone = '{$phone}',
			nation = '{$nation}',
			degree = '{$degree}',
			titles = '{$titles}',
			position = '{$position}'
			where id={$id}";	
		$this->query($sql);
	}

	public function getTeacherNumber($id){
		$id = intval($id);
		$sql = "select count(id) as num from tss_user where id={$id}";
		$res = $this->fetchOne($sql);
		return $res["num"];
	}

		public function modifyUserinfoBypermission($userInfo){
		$id = intval($userInfo["id"]);
		$permission = intval($userInfo["permission"]);
		$username = $this->filterString($userInfo["username"]);
		$email = $this->filterString($userInfo["email"]);
		$password = $this->filterString($userInfo["password"]);

		$sql = "update {$this->tableName} set 
			username = '{$username}', 
			email = '{$email}', 
			permission = '{$permission}',
			where id={$id}";	
		$this->query($sql);
	}
}