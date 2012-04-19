<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
	public $page_title = "大学生网上交易平台";
	public $page_components = array(
		'nav' => 'common/nav',
		'foot'=> 'common/foot',
);
	public function before(){
		parent::before();
		$site = Kohana::$config->load('site.site');
		
		View::set_global('site_keywords', $site['keywords']);
		View::set_global('site_description', $site['description']);
		View::bind_global('page_title', $this->page_title);
		View::bind_global('page_components', $this->page_components);
	}
	public function after(){
		parent::after();
	}
}
