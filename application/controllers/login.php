<?php	if( !defined('BASEPATH') ) exit('No direct script access allowed');

class Login extends CI_Controller{
	

	public function index(){
        $data['teamporalogo'] = site_url(IMG_PATH). '/teamporalogo.jpg' ; 
		$data['form_data'] = array(
						'to' => $this->uri->segment(1) . '/checkCredentials',
						'attrib' => array(
							'class' => 'form-horizontal'
						)
		);
	
		$data['navigation'] = array(
							 'home' => array('Home' ,''),
							 'downloads' => array('Downloads',''),
							 'about' => array('About',''),
							 'contact' => array('Contact','')	 
							);
		$data['other_nav'] = array(
							'login' => array("Login" , 'active'),
							'register' => array("Register" , '')
		);
		
		$data['login_attrib'] = array(
					
					'Email' => array(
						'placeholder' => 'Email',
						'id' => 'inputEmail',
						'rel' => 'popover',
						'data-title' => 'Email Input',
						'data-content' => 'Input Email with @ example : johndoe@mail.com'
					),
					
					"Password" => array(
						'placeholder' => 'Password',
						'id' => 'inputPassword',
						'rel' => 'popover',
						'data-title' => 'Password Input',
						'data-content' => 'Input Password ******'
					)
		);

		$this->load->view('login_view' , $data);
	}
	
	public function checkCredentials(){
	
	}
}

?>