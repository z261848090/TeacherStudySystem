<?php
require_once(CORE_PATH."config.php");

class Db_Table_Subject extends Mysql{
	private $tableName = "subject";


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

	public function addSubject($Subject){
		$title = $this->filterString($Subject["title"]);
		$description = $this->filterString($Subject["description"]);
		$sql = "insert into {$this->tableName}(title, description) values('{$title}', '$description')";
		return $this->query($sql);
	}

	public function deleteSubject($id){
		$id = intval($id);
		$sql = "delete from {$this->tableName} where id={$id}";
		return $this->query($sql);
	}

	public function getSubjectList(){
		$sql = "select * from {$this->tableName}";
		return $this->fetchAll($sql);
	}

	public function getSubjectByTitle($title){
		$title = $this->filterString($title);
		$sql = "select * from {$this->tableName} where title = '{$title}'";
		return $this->fetchAll($sql);
	}

	public function getSubjectById($id){
		$id = intval($id);
		$sql = "select * from {$this->tableName} where id={$id}";
		return $this->fetchOne($sql);
	}

	public function modifySubject($Subject){
		$id = intval($Subject["id"]);
		$title = $this->filterString($Subject["title"]);
		$description = $this->filterString($Subject["description"]);
		$sql = "update {$this->tableName} set title = '{$title}', description = '{$description}' where id={$id}";
		$this->query($sql);
	}

	public function getTeacherNumber($id){
		$id = intval($id);
		$sql = "select count(id) as num from tss_user where id={$id}";
		$res = $this->fetchOne($sql);
		return $res["num"];
	}
}