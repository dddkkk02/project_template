<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {
	public $page_title = "大学生网上交易平台";
	public $template = "template_container";
	
	public $template_data = array();
	public function get_template_data($key, $default = array()){
		return isset($this->template_data[$key])?$this->template_data[$key]:$default;
	}
	public function before(){
		parent::before();
		$site = Kohana::$config->load('site.site');
		
		View::set_global('site_keywords', $site['keywords']);
		View::set_global('site_description', $site['description']);
		View::set_global('site_js', $site['js']);
		View::set_global('js_path', $site['js_path']);
		View::set_global('site_css', $site['css']);
		View::set_global('css_path', $site['css_path']);
		View::bind_global('page_title', $this->page_title);
		View::bind_global('page_components', $this->page_components);
		View::bind_global('ctl', $this);
	}
	public function after(){
		parent::after();
	}
}
