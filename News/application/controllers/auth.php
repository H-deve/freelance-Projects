<?php
require(APPPATH.'libraries/rest_controller.php');
class auth extends REST_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		 header('Content-Type: text/html; charset=utf-8');
			$this->load->model('log_model');
			$this->load->library('grocery_CRUD');
	}
	
	function index_get()
	{
			if($this->session->userdata('logged_in')&&($this->session->userdata('role')==1))
					redirect("manager");
			else if($this->session->userdata('logged_in')&&($this->session->userdata('role')>1))
					redirect("admin");

			$this->load->view('login');
	}
	function login_get()
	{
			if($this->session->userdata('logged_in')&&($this->session->userdata('role')==1))
					redirect("manager");
			else if($this->session->userdata('logged_in')&&($this->session->userdata('role')>1))
					redirect("admin");

			$this->load->view('login');
	}
	function login_post()
	{
				$a=$this->log_model->validate();
				if($a[1]>0){
					$sess_data=array(
						'logged_in'=>1,
						'user_id'=>$a[3],
						'role'=>$a[2]
						);
					$session_start();
					$this->session->set_userdata($sess_data);
					}
				else
					redirect('login');
	}
	function signup_get()
	{
			$this->load->model('manager_model');
			$data['record']=$this->manager_model->get_types();
			$this->load->view('signup',$data);
	}
	
	function signup_post()
	{
			$this->load->model('manager_model');
			$a=$this->manager_model->signup();
			$sess_data=array(
					'logged_in'=>1,
					'res_id'=>$a[1],
					'name'=>$a[0],
					'role'=>2
					);
			redirect('rest_admin/index');
	}
	
	function logout_get()
	{
		$sess_data=array(
					'logged_in'=>0,
					'user_id'=>0,
					'role'=>-1
					);
				$this->session->set_userdata($sess_data);
		session_unset();
		session_destroy();
		
		redirect("auth");
	}
}