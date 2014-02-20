<?php	if( !defined('BASEPATH') ) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __contruct(){
			parent::__construct();
		}
		
		public function index(){
		
			if($this->uri->segment(1) == ''){
				
			}
			
			$data['images_path'] = array(
									site_url(IMG_PATH) . '/banner1.png' => 'OK allright',
									site_url(IMG_PATH) . '/banner2.png' => 'OK allright',
									site_url(IMG_PATH) . '/banner3.png' => 'OK allright',
									site_url(IMG_PATH) . '/banner4.png' => 'OK allright',
									site_url(IMG_PATH) . '/banner5.png' => 'OK allright'
								);
									
			$data['other_nav'] = array(
								'login' => array("Login" , ''),
								'register' => array("Register" , '')
                                
			);	
			
			$data['navigation'] = array(
							 'home' => array('Home' ,'active'),
							 'downloads' => array('Downloads',''),
							 'about' => array('About',''),
							 'contact' => array('Contact','')	 
							
							);
							
            $data['teamporalogo'] = site_url(IMG_PATH). '/teamporalogo.jpg' ; 
			$data['t_pic'] = site_url(IMG_PATH). '/t_pic.jpg' ; 
			
			$this->load->view('home_view', $data);
		}
	}
?>