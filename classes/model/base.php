<?php

class Model_Base extends Model_Database {
	protect $tablename="";	
	public function fetchOne($sql, $param=array()){
		$ret = $this->_db->query(Database::SELECT, $sql, $param);
		return $ret[0];
	}

	/**
	 * 更新一些列的值
	 * @params array $updateData field=>val
	 * @params array $condition field=>val
	 * @return boolean
	 */
	public function update($updateData, $condition=array()){
			$state = DB::update($this->tablename)->set($updateData);
			foreach($condition as $field=>$val){
				$state->where($field, '=', $val);
			}
			return $state->execute();
	}
	/**
	 * 插入一行
	 * @params array $data
	 * @return boolean
	 */
	public function insert($data){
		return DB::insert($this->tablename, array_keys($data))->values(array_values($data));
	}
}
