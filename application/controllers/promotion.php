<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

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
	$data['title'] = "Продвижение веб сайтов в сети интернет";
	$data['description'] = "Интер Медиа рекламное агентство";
	$data['keywords'] = "Интер Медиа рекламное агентство";
	$name='/promotion'; 
	$this->display_lib->promotion_page($name,$data);  
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */