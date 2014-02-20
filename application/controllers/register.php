<?php	if( !defined('BASEPATH') ) exit('No direct script access allowed');

class Register extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
        $data['teamporalogo'] = site_url(IMG_PATH). '/teamporalogo.jpg' ; 
		$data['form_data'] = array(
						'to' => $this->uri->segment(1) . '/checkCredentials',
						'attrib' => array(
							'class' => 'form-horizontal',
							'id' => 'register-form'
						)
		);
	
		$data['navigation'] = array(
							 'home' => array('Home' ,''),
							 'downloads' => array('Downloads',''),
							 'about' => array('About',''),
							 'contact' => array('Contact','')	 
							);
		$data['other_nav'] = array(
							'login' => array("Login" , ''),
							'register' => array("Register" , 'active')
		);

		$data['register_attrib'] = array(
					
					'Email' => array(
						'type' => 'text',
						'placeholder' => 'Email',
						'id' => 'inputEmail',
						'rel' => 'popover',
						'data-title' => 'Email Input',
						'data-content' => 'This is used for user name with login',
						'class' => 'required email'
					),
					
					"Password" => array(
						'placeholder' => 'Password',
						'id' => 'inputPassword',
						'rel' => 'popover',
						'data-title' => 'Password Input',
						'data-content' => 'This is used for password in login',
						'class' => 'required password',
						'type' => 'password'

					),
					
					"Confirm Password" => array(
						'placeholder' => 'Confirm Password',
						'id' => 'confirmPassword',
						'rel' => 'popover',
						'data-title' => 'Password Input',
						'data-content' => 'Just to confirm your password',
						'class' => 'required',
						'equalTo' => '#inputPassword',
						'type' => 'password'
						
					),
					
					
		);


		$this->load->view('register_view' , $data);
	}
	
	public function checkEmail(){
		if($this->input->get('email')){
			echo true;
		}
		echo false;
		exit;
	}
}
?>