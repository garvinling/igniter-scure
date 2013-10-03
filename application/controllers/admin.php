<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){

		parent::__construct();
		session_start();

	}

	public function index()
	{


		if(isset($_SESSION['username'])){

			redirect('welcome');
		}

		//has the information been posted? 
		$this->load->library('form_validation');   //Load form validation library
		$this->form_validation->set_rules('email_Address', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

		if( $this -> form_validation->run() !== false){
			//then validation has passed. Get from the db.

 				$this->load->model('admin_model');
 				$result = $this
 								->admin_model
 								->verify_user(
 									$this->input->post('email_Address'), 
 									$this->input->post('password'));
 				//same as doing $_POST['email_address']

 				if($result !== false){
 					//person as an account
 						$_SESSION['username'] = $this->input->post('email_Address');
 						redirect('welcome');

 				}
		}

	$this->load->view('login_view');
}
	
	public function tester(){


		$this->load->view('tester');

	}

	public function logout(){

		//session_destroy();
		session_unset();
		$this->load->view('login_view');
	}

}

