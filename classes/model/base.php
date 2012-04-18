<?php

class Model_Base extends Model{
	public $db ;
	function __construct(){
		$this->db = Database::instance();
	}	
	public function fetchOne($sql, $param=array()){
		$ret = $this->db->query(Database::SELECT, $sql, $param);
		return $ret[0];
	}
}
