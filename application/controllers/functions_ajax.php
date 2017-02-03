<?php 

class Functions_ajax extends CI_Controller {

public function __construct()
	 {
	parent:: __construct();
	$this->load->helper('url');
	require('server/FirePHP.class.php');
	$this->load->model('cities_model');
    $firephp = FirePHP::getInstance(true);
    $firephp -> fb("hello world! i'm warning you!",FirePHP::WARN);
	} 
	
	public function index(){
	$data=$this->cities_model->get();
	if($data){
		echo json_encode($data);
		}
		else{
		echo json_encode(NULL);
		} 
	}

}
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */