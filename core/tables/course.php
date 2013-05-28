<?php
require_once(CORE_PATH."config.php");

class Db_Table_Course extends Mysql{
	private $tableName = "course";
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

	public function addCourse($course){
		$title = $this->filterString($course["title"]);
		$description = $this->filterString($course["description"]);
		$department = $this->filterString($course["department"]);
		$subject = $this->filterString($course["subject"]);
		$sql = "insert into {$this->tableName}(title, description,department,subject) values('{$title}', '$description','$department','$subject')";
		return $this->query($sql);
	}

	public function deleteCourse($id){
		$id = intval($id);
		$sql = "delete from {$this->tableName} where id={$id}";
		return $this->query($sql);
	}

	public function getCourseList(){
		$sql = "select * from {$this->tableName}";
		return $this->fetchAll($sql);
	}

	public function getCourseByTitle($title){
		$title = $this->filterString($title);
		$sql = "select * from {$this->tableName} where title = '{$title}'";
		return $this->fetchAll($sql);
	}

	public function getCourseByTitles($title){
		$title = $this->filterString($title);
		$sql = "select * from {$this->tableName} where title = '{$title}'";
		return $this->fetchOne($sql);
	}

	public function getCourseById($id){
		$id = intval($id);
		$sql = "select * from {$this->tableName} where id={$id}";
		return $this->fetchOne($sql);
	}

	public function modifyCourse($course){
		$id = intval($course["id"]);
		$title = $this->filterString($course["title"]);
		$description = $this->filterString($course["description"]);
		$department = $this->filterString($course["department"]);
		$subject = $this->filterString($course["subject"]);
		$sql = "update {$this->tableName} set title = '{$title}', description = '{$description}' ,department = '{$department}' ,subject = '{$subject}' where id={$id}";
		$this->query($sql);
	}

	public function getTeacherNumber($id){
		$id = intval($id);
		$sql = "select count(department_id) as num from tss_user where department_id={$id}";
		$res = $this->fetchOne($sql);
		return $res["num"];
	}
}