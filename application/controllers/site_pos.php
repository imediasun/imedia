<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_pos extends CI_Controller {

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
	
	$this->load->library('google_site'); 
	} 

	public function google_position(){
	header('Content-Type: application/json');
	$this->input->post();
	$domen=$_POST['data'];
	$keyword=$_POST['keyword'];
	$position=$this->google_site->index($keyword,$domen);
	if (isset ($position)){
	echo json_encode($position); 
	}
	else{
	print_r($_POST);
	}
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */