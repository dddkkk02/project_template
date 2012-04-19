<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

	public function action_index(){
		$user = Model::factory('base');
		$sql = "select  * from school_user limit 1";
		$row = $user->fetchOne($sql);
		$this->page_title = "示例页面";
		$this->template->content = "welcome/model";
	}

} // End Welcome
