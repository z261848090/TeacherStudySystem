<?php
/**
 * @uses conmect to database mysql and operate database
 * @copyright www.hdu.edu.cn
 * @author Zhu.guohui
 */
class Mysql {
	private $_connect;
	
	public function __construct($config){
		$this->_connect = mysql_connect($config["host"], $config["user"], $config["password"]) 
		or error("数据库连接错误".mysql_error());
		
		mysql_select_db($config["dbname"], $this->_connect) 
		or error("无法找到数据库，请确认数据库名称正确！".mysql_error());
		@mysql_query("SET NAMES UTF8");
	}
	
	public function __destruct(){
		mysql_close($this->_connect);
	}
	
	
	public function query($sql){
		if($sql == "") return null;
		$sql = stripcslashes($sql);
		$res = mysql_query($sql, $this->_connect);
		if($res){
			return $res;
		}else {
			error(mysql_error()." sql:".$sql);
		}
	}
	
	public function fetchAll($sql){
		if( ! $result = $this->query($sql) )return array();
		if( ! mysql_num_rows($result) )return array();
		$rows = array();
		while($rows[] = mysql_fetch_array($result,MYSQL_ASSOC)){}
		mysql_free_result($result);
		array_pop($rows);
		return $rows;
	}

	public function fetchOne($sql){
		$res = $this->query($sql);
		return mysql_fetch_array($res);
	}

	public function filterString($str){
		$str = trim($str);
		return stripcslashes($str);
	}
}