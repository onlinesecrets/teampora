<?php	if( !defined('BASEPATH') ) exit('No direct script access allowed');
	
class Downloads extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		
		$data['navigation'] = array(
							 'home' => array('Home' ,''),
							 'downloads' => array('Downloads','active'),
							 'about' => array('About',''),
							 'contact' => array('Contact','')	 
							
							);
		$data['other_nav'] = array(
							'login' => array("Login" , ''),
							'register' => array("Register" , '')
		);
      //  $data['teamporalogo'] = site_url(IMG_PATH). '/teamporalogo.jpg' ; 
		$this->load->view('downloads_view', $data);
       
	}
}

?>