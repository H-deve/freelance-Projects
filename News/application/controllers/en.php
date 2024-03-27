<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class en extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		
		//$this->load->model('user_model');
		//$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		
	}
	
	
	function contact_us()
	{
		
	}
	function allnews()
	{
		
	}
	function news()
	{
		$news_id=$_GET["news_id"];
	}
	function about()
	{
		
	}
	
	function courses()
	{
		
	}
	
	function course()
	{
		$course_id=$_GET["course_id"];
	}
	
	function activities()
	{
		
	}
	
	function activity()
	{
		$activity_id=$_GET["activity_id"];
	}
	function sections()
	{
		
	}
}