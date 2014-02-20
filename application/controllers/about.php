<?php	if( !defined('BASEPATH') ) exit('No direct script access allowed');

class About extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
   
		$data['navigation'] = array(
							 'home' => array('Home' ,''),
							 'downloads' => array('Downloads',''),
							 'about' => array('About','active'),
							 'contact' => array('Contact','')	 
							
							);
		$data['other_nav'] = array(
							'login' => array("Login" , ''),
							'register' => array("Register" , '')
		);
         //$data['teamporalogo'] = site_url(IMG_PATH). '/teamporalogo.jpg' ; 
		$this->load->view('about_view' , $data);
      
	}
	
}
?>