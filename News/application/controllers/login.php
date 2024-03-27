<?php
require(APPPATH.'libraries/rest_controller.php');
class login extends REST_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
		 header('Content-Type: text/html; charset=utf-8');
		
	}
	
	function index_get()
	{
		 if($this->session->userdata('logged_in'))
		{
			redirect(base_url()."dashboard/manage_section");
		}
		$this->load->view('login');
	}
	
	function user_get()
	{
	
		$this->load->view('login');
			
	}
	function log_in_post()
	{
		$a=$this->login_model->validate();
		if($a==false)
		{
			redirect(base_url().'login/user');
		}
		else
		{
			session_start();
			$sess_data=array(
					'logged_in'=>1,
					'user_id'=>$a->id,
					'super_admin'=>$a->is_admin,
					'name'=>$a->first_name." ".$a->last_name,
					);
			$this->session->set_userdata($sess_data);	
			redirect(base_url().'dashboard/manage_courses');
		}
		
	}
	function create_user_post()
	{
		$a=$this->login_model->create_user();
		if($a!=false)
		{
			$sess_data=array(
					'logged_in'=>1,
					'user_id'=>$a,
					'name'=>$this->input->post('first_name')." ".$this->input->post('last_name'),
					);
			$this->session->set_userdata($sess_data);	
			redirect(base_url().'dashboard/file_maneg');
		}
		else{
			redirect(base_url().'login/user');
		}
			
	}
	function logout_get()
	{
		$sess_data=array(
					'logged_in'=>0,
					'user_id'=>0,
					'name'=>0,
					'super_admin'=>0
					);
				$this->session->set_userdata($sess_data);
		session_unset();
		session_destroy();
		
		redirect("login/user");
	}
	

}