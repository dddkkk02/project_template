<?php
class Db_Wrapper extends Database{
	public function exec($sql, $param = array()){
		return $this->query(Database::SELECT, $sql, $param);
	}
}
