<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts_action extends CI_Controller {
  
	public function index()
	{
	
	$data['name']=$_POST['q1'];
	$data['phone']=$_POST['q2'];
	$data['email']=$_POST['q3'];
	$data['msg']=$_POST['q4'];
	$data['price']=$_POST['q5'];
	$name=stripslashes(htmlspecialchars($data['name']));
	$phone=stripslashes(htmlspecialchars($data['phone']));
	$email=stripslashes(htmlspecialchars($data['email']));
	$msg=stripslashes(htmlspecialchars($data['msg']));
	$price=stripslashes(htmlspecialchars($data['price']));
	$message ="Пишет: $name\nТелефон: $phone\nE-mail: $email\nСообщение: $msg\nЦена: $price";
	$this->load->library('email');
	$config['protocol'] = 'sendmail';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'utf-8';
	$config['wordwrap'] = TRUE;
	$config['smtp_host'] = 'smtp.gmail.com';
	$config['smtp_user'] = 'imediasun@gmail.com';
	$config['smtp_path'] = 'sunimedia1';
	$config['smtp_port'] = '25';
	$this->email->initialize($config);
	$to='imediasun@gmail.com';
	
	$this->email->reply_to($email, $this->_mail_encode($name, "utf-8"));
	$this->email->from($email, $this->_mail_encode($name, "utf-8"));
	$this->email->to($to);
	$this->email->subject("Письмо из контактной формы");
	$this->email->message($message);
	if ($this->email->send())
	// if (mail($this->config_contact_form('mymail'),$this->config_contact_form('topic'),$message,"Content-type:text/plain;charset = utf-8\r\n"))
	{
	print('mail send sucsessfull');
	header('Location: http://www.imedia.in.ua/main/pages/contacts_finish/');
	}
	else{
	$data['error']=$this->config_contact_form('direct_access');
	echo $data['error'];
	}
	
	
	
	}
	public function _mail_encode($text, $encoding) {
	$result = "=?".$encoding."?b?".base64_encode($text)."?=";
	return $result;
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */