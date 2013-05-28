<?php
require_once(CORE_PATH."config.php");

class Db_Table_resource extends Mysql{
	private $tableName = "resource_file";
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

	public function getResList($whereString=''){
		$sql = "select * from {$this->tableName} where 1=1 {$whereString} order by id desc";
		return $this->fetchAll($sql);
	}

	public function Resquery($sql){
		//$sql = "select * from {$this->tableName}";
		return $this->query($sql);
	}
	
	public function hits($id){
		$sql = "update {$this->tableName} set hits = IFNULL(hits+1,1) where id={$id}";
		return $this->query($sql);
	}

	public function deleteRes($id){
		$id = intval($id);
		$sql = "delete from {$this->tableName} where id={$id}";
		return $this->query($sql);
	}
}