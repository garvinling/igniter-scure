<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	 function __construct(){
			
		session_start();
		date_default_timezone_set('America/Los_Angeles');
		parent::__construct();



	}

	public function index()
	{		
		
		if(!isset($_SESSION['username'])){
			redirect('admin');
		}



		//Get current system armed/disarmed status 
		$email = $_SESSION['username'];
		$this->load->model('welcome_model');
		$result = $this->welcome_model->getSystemStatus($email);
		$system_status = "";

		if($result -> system_status == 0){

			$system_status = "Arm System";				//Passes to the view
			


		}
		else{

			$system_status = "Disarm System";			//Passes to the view
		}

		//Get daily logs and explode strings into array
		$result = $this->welcome_model->getDailyLog($email);
		if($result !== false){


			$daily_log_string = $result -> log_body;
			$daily_log_array  = explode(",",$daily_log_string);
			$_SESSION['daily_log_array'] = $daily_log_array;

		//Get time stamp keys and send them to session 

			$daily_log_time_string = $result -> time_stamp;
			$daily_log_time_array  = explode(",",$daily_log_time_string);
			$_SESSION['daily_log_time_array'] = $daily_log_time_array;


		}//end check result. 





		$_SESSION['system_status'] = $system_status;
		$this->load->view('welcome_message');
	}







	public function settings(){

		$this->load->view('settings_view');
	}


	public function changeAlarmStatus(){
		//Make diagram documentation


		$email = $_SESSION['username'];
		$this->load->model('welcome_model');
		$result = $this -> welcome_model -> getSystemStatus($email); 

		if($result -> system_status == 0){
			
			$data = 1;
			$this-> welcome_model -> setSystemStatus($email,$data);
			//Update log
			$this -> addActivity($email,0);
			/**e
			$system_status_string = "System armed at ";
			$system_status_time_string = date("g:ia");    // 12-hour format with no seconds, no leading zeros, with AM/PM
			$this->welcome_model->addSystemStatusLog($system_status_string,$system_status_time_string);
	**/
		}
		else{
			
				$data = 0;

			$this -> welcome_model -> setSystemStatus($email,$data);
			$this -> addActivity($email,1);

		}

		redirect('welcome');


	}

	public function liveUpdateActivity(){
		$email = $_SESSION['username'];


		$this->load->model('welcome_model');
		$result = $this -> welcome_model -> getSystemStatus($email);

		if($result -> system_status == 0 ){
			$data = 1; 
			$this -> welcome_model -> setSystemStatus($email,$data);
			$this -> addActivity($email,0);
			$system_status = "Arm System";				//Passes to the view
			$_SESSION['system_status'] = $system_status;
			echo "<li>"."- System armed at "."<span style=\"color:red;\">".date("g: ia")."</span>"."</li>";
		}
		else{

			$data = 0;
			$this -> welcome_model -> setSystemStatus($email,$data);
			$this -> addActivity($email,1);
			$system_status = "Disarm System";				//Passes to the view
			$_SESSION['system_status'] = $system_status;
			echo "<li>"."- System disarmed at "."<span style=\"color:red;\">".date("g: ia")."</span>"."</li>";
		}


	}






	private function addActivity($email,$action){
		$this->load->model('welcome_model');

		if($action == 0){
					//Update log
			$result = $this->welcome_model->getDailyLog($email);

			if($result !== false){
				$system_status_string = ",- System armed at ";

				$oldData = $result->log_body;
				$oldData = $oldData.$system_status_string;

				$oldTime = $result->time_stamp;
				$oldTime = $oldTime.",".date("g:ia");// 12-hour format with no seconds, no leading zeros, with AM/PM
				$this -> welcome_model -> addSystemStatusLog($email,$oldData,$oldTime);

			}

	}//end if

	else if($action == 1){

	$result = $this->welcome_model->getDailyLog($email);

			if($result !== false){
				$system_status_string = ",- System disarmed at ";

				$oldData = $result->log_body;
				$oldData = $oldData.$system_status_string;

				$oldTime = $result->time_stamp;
				$oldTime = $oldTime.",".date("g:ia");// 12-hour format with no seconds, no leading zeros, with AM/PM
				$this -> welcome_model -> addSystemStatusLog($email,$oldData,$oldTime);

			}
	}//end elseif

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */