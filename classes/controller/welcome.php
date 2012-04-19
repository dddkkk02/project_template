<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {
	public $template = "template_container";

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	public function action_some(){
		$this->response->body("this is some method");
	}
	public function action_insert(){
		$db = Database::instance();
		$db->set_charset('utf8');
		$ret = $db->query(Kohana_Database::INSERT, 'INSERT INTO  school_user(uid, username, nickname) values(null, "dddkkk01", "我的昵称")');

		var_dump($ret);
	}
	public function action_db(){
		$sql = "SELECT * FROM school_user";
		$ret = DB::query(Database::SELECT, $sql);
		$ret = $ret->execute();
		echo "<pre>";
		foreach($ret as $item){
			var_dump($item);
		}
		var_dump($ret);
		echo "</pre>";
	}

	public function action_delete(){
		$db = Database::instance();
		$ret = $db->query(Kohana_Database::DELETE, 'delete from school_user limit 1');
		var_dump($ret);
	}
	public function action_model(){
		$user = Model::factory('base');
		$sql = "select  * from school_user limit 1";
		$row = $user->fetchOne($sql);
        var_dump($row);
		$this->page_title = "这个是从页面里面复制的";
		$this->template->content = "welcome/model";
	}

} // End Welcome
