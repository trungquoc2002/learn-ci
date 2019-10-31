<?php
	class Authenticate_user extends CI_Controller{
			
		public function __construct(){
			parent::__construct();	
			$this->load->helper(array("form", "url"));
			$this->load->model("authenticate_model");
			
		}

		public function signup(){
			$data_input = $this->input->post();
			echo $data_input["username"];
			echo "</br>";
			echo $data_input["email"];
			echo "</br>";
			echo $data_input["password"];
			$data = array(
				"user_name" => $data_input["username"],
				"user_email" => $data_input["email"],
				"user_pwd" => $data_input["password"]
			);
			$this->authenticate_model->signup_user($data);
			$this->load->view("sigup-page");
		}

		public function login(){
			$data_model = $this->authenticate_model->authenticate_user();
			$this->load->view('login-page'); 
		}
		
		public function proceed(){

			$data = $this->input->post();
			$this->authenticate_model->authenticate_user($data);
		}

	}

?>
