<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	 {
	parent:: __construct(); 
	
		}  
	public function index()
	{
	
	$data=array();
	$data['title'] = "Интер Медиа рекламное агентство";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/index'; 
	$this->display_lib->main_page($name,$data);  
	}
	public function pages($page)
	{
	switch ($page)
	{
	case 'webdesign':
	
	$data['title'] = "Интер Медиа рекламное агентство";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/articles/webdesign'; 
	$this->display_lib->article_page($name,$data);  
	break;
	case 'portfolio':
	$data['info']='portfolio';
	$data['title'] = "Интер Медиа рекламное агентство";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/portfolio'; 
	$this->display_lib->main_page($name,$data);  
	break;
	case 'packages':
	$data['info']='portfolio';
	$data['title'] = "Интер Медиа рекламное агентство";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/packeges'; 
	$this->display_lib->main_page($name,$data);  
	break;
	case 'promotion':
	$data['info']='portfolio';
	$data['title'] = "Интер Медиа рекламное агентство";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/promotion'; 
	$this->display_lib->main_page($name,$data);  
	break;
	}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */