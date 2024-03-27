<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class academy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		// $this->load->library("session");
		 $this->load->library("pagination");
		 //
		 session_start();
		 
		 //var_dump("bef".$_SESSION["language"]);
		if(!isset($_SESSION["language"]))
		{
			$_SESSION["language"]="arabic";
		}
		$this->lang->load('titles', $_SESSION["language"]);
		//var_dump($_SESSION["language"]);
		
		$this->load->model('academy_model');
		//var_dump("gg");die();
		$this->data["sections"]=$this->academy_model->get_sections();
		$this->add_count();
		//$this->load->library('grocery_CRUD');
	}
	function add_count() { // load cookie helper 
		$this->load->helper('cookie'); // this line will return the cookie which has slug name 
		$check_visitor = $this->input->cookie("teshamacademy", FALSE); // this line will return the visitor ip address 
		$ip = $this->input->ip_address(); // if the visitor visit this article for first time then // //set new cookie and update article_views column .. //you might be notice we used slug for cookie name and ip //address for value to distinguish between articles views 
		if ($check_visitor == false) { 
				$cookie = array( "name" => "teshamacademy", "value" => "$ip", "expire" => time() + 72000, "secure" => false ); 
				$this->input->set_cookie($cookie); 
				$this->academy_model->update_counter($ip);
			} 
	} 
	public function index()
	{
		$this->data['title'] = $this->lang->line('home');;
		$this->data["course_count"]=$this->db->count_all("course");
		$this->data["activity_count"]= $this->db->count_all("activity");
		$this->data["section_count"]= $this->db->count_all("section");
		$this->data["visitors_count"]= $this->academy_model->getvisitorNumber();
		$this->data["courses"]=$this->academy_model->get_newest_courses(null,9);
		$this->data["activities"]=$this->academy_model->get_activities();
		$this->data["breaking_news"]=$this->academy_model->get_breaking_news();
		$this->data["all_news"]=$this->academy_model->get_news();
			$this->data['main_content'] = 'index';	
		 //$this->load->view('/includes/template',$this->data);
		 $this->load->view( 'includes/template_web',$this->data);
	}
	public function sendEmail()
	{
		$this->load->library('email');
		var_dump($this->input->post("author")."  ".$this->input->post("subject")."  ".$this->input->post("message"));
		$this->email->from($this->input->post("email"),$this->input->post("author"));
		//var_dump($this->input->post("to"));
		$to="teshamacademy.org@gmail.com";
		$this->email->to($to); 
		
		
		$this->email->subject($this->input->post("subject"));
		$this->email->message($this->input->post("message"));	
		
		$this->email->send();
		//echo $this->email->print_debugger();
		redirect(base_url().'academy/contact');
	}
	function change_languge()
	{
		$lang=$_GET["lang"];
		
		if($lang=='en')
		{
			
			$_SESSION["language"]="english";
			
		}
		else
		{
			$_SESSION["language"]="arabic";
		}
		redirect($_SERVER['HTTP_REFERER']);

	}
	
	function contact()
	{
		$this->data['title'] = $this->lang->line('contact');;	
		$this->data['sec_contact']=true;
		$this->data['main_content'] = 'contact';	
		$this->load->view('includes/template_web',$this->data);
		
	}
	function allnews()
	{
		$this->data['main_content'] = 'allnews';	
		$this->load->view('includes/template_web',$this->data);
	}
	function news()
	{
		$news_id=$_GET["news"];
		$this->data['main_content'] ='dnews';	
		$n=$this->academy_model->get_news($news_id);
		$this->data["news"]=$n[0];
		$this->load->view( 'includes/template_web',$this->data);
	}
	function about()
	{
		$this->data['title'] = $this->lang->line('about');;	
		$this->data['sec_about']=true;
		$this->data['main_content'] ='about';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	
	function courses()
	{
	//var_dump($course_id);die();
		$this->data['sec_courses']=true;
		$this->data['title'] = $this->lang->line('courses');
		  $config = array();
        $config["base_url"] = base_url() . "academy/courses/";
       	$config['full_tag_open'] = "<ul class='pagination'>";
	$config['full_tag_close'] ="</ul>";
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	$config['next_tag_open'] = "<li>";
	$config['next_tagl_close'] = "</li>";
	$config['prev_tag_open'] = "<li>";
	$config['prev_tagl_close'] = "</li>";
	$config['first_tag_open'] = "<li>";
	$config['first_tagl_close'] = "</li>";
	$config['last_tag_open'] = "<li>";
	$config['last_tagl_close'] = "</li>";
        $config["per_page"] = 4;
        $config["uri_segment"] = 4;
		$course_cat= ($this->uri->segment(3)) ? $this->uri->segment(3) : "all";
		 $config["total_rows"] = $this->academy_model->record_count($course_cat);
		$config["base_url"] = base_url() . "academy/courses/".$course_cat."/";
		
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$this->data["courses"]=$this->academy_model->get_courses($course_cat,$config["per_page"], $page);
		//var_dump($this->data["courses"]);die();
        $this->data["links"] = $this->pagination->create_links();
		$this->data["newest_courses"]=$this->academy_model->get_newest_courses();
		//var_dump($this->data["newest_courses"]);
		$this->data["categories"]=$this->academy_model->get_categories();
		$this->data['main_content'] = 'courses';	
		$this->load->view( 'includes/template_web',$this->data);
		
	}
	function search_courses()
	{
	//var_dump($course_id);die();
		$this->data['sec_courses']=true;
		$this->data['title'] = $this->lang->line('courses');
		  $config = array();
       
        $search=isset($_GET["search"])?$_GET["search"]:"";
		if($search=="")
		{
			redirect(base_url()."academy/courses");
		}
		$this->data["courses"]=$this->academy_model->search_courses($search);
		//var_dump($this->data["courses"]);die();
		$this->data["newest_courses"]=$this->academy_model->get_newest_courses();
		//var_dump($this->data["newest_courses"]);
		$this->data["categories"]=$this->academy_model->get_categories();
		$this->data['main_content'] = 'courses';	
		$this->load->view( 'includes/template_web',$this->data);
		
	}
	function course()
	{
		$this->data['sec_courses']=true;
		$this->data['title'] = $this->lang->line('course');;	
		$course_id=$_GET["course"];
		//
		$this->data["course"]=$this->academy_model->get_course($course_id);
		if(!$this->data["course"])
		{
			redirect(base_url()."academy/error");
		}
		$this->data["categories"]=$this->academy_model->get_categories();
		$this->data["related_courses"]=$this->academy_model->get_related_courses($course_id);
		$this->data["newest_courses"]=$this->academy_model->get_newest_courses($course_id);
		$this->data['main_content'] = 'course';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	
	function activities()
	{
		$this->data['sec_activities']=true;
		$this->data['title'] = $this->lang->line('activities');;	
		$section_id=$_GET["section"];
		$this->data["section"]=$this->academy_model->get_section($section_id);
		//var_dump($this->data["section"]);die();
		$this->data["activities"]=$this->academy_model->get_activities($section_id);
		$this->data['main_content'] = 'sections';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	function gallery()
	{
		$this->data['sec_gallery']=true;
		$this->data['title'] = $this->lang->line('gallery');
		$this->data["album"]=$this->academy_model->get_gallery();
		//print_r($this->data["activity"]);die();
		$this->data['main_content'] = 'gallery';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	function activity()
	{
		$this->data['sec_activities']=true;
		$this->data['title'] = $this->lang->line('activity');
		$activity_id=$_GET["activity"];
		$this->data["activity"]=$this->academy_model->get_activity($activity_id);
		$this->data["images"]=$this->academy_model->get_activity_album($activity_id);
		$this->data['main_content'] = 'activity';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	
	function error()
	{
		$this->data['main_content'] = '404.html';	
		$this->load->view( 'includes/template_web',$this->data);
	}
	
}