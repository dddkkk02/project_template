<?php

class Controller_Vtemplate extends Controller_Template{

	public $title = "default";

	public function action_index(){

		$this->title = "in index";
		$this->template->bind('title', $this->title);
echo Kohana::$config->load('site.TEMPLATE_PATH');
echo "------------";
		/*
		$view = View::factory('vt');
		$this->template = $view;
		$param = $this->request->action();
		$param = $this->request->controller();
		var_dump($param);
		//		$this->template->render(['name'=>'hello','views'=>'vt']);
		//		$this->render(['name'=>'hello world']);
		 */
	}
	public function before(){
		$action = $this->request->action();
		$controller = $this->request->controller();
		$this->template = View::factory($controller."/".$action);
	}
	public function after(){
		echo "after callback";
		$this->title = "中文啊中文";
		$this->response->body($this->template);
	}

}
