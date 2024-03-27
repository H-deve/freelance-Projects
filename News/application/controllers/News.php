<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {

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
		
		//var_dump($_SESSION["language"]);
		
		$this->load->model('news_model');
		//S$this->data["b"]=$this->news_model->show_breaking_news():
		$this->data["b"]=$this->news_model->show_breaking_news();
		$this->data["newsarea"]=$this->news_model->show_newsarea();
		$this->data["ad_sidebar"]=$this->news_model->get_sidbarad();
		$this->data["ad_footer"]=$this->news_model->get_footer();
		$this->data["ad_header"]=$this->news_model->get_header();
		$this->data["ad_onSide"]=$this->news_model->get_onSide();
		$this->data["most"]=$this->news_model->most_viewed();
		//$this->data["from_archive"]=$this->news_model->from_archive();
		 $this->data["caricateer"]=$this->news_model->get_caricateer();
		/*
		$title=$this->data["main_content"]
		$this->data["t"]=$title;*/
		//$this->data["most_followed"]=$this->news_model->get_most_followed();
		//var_dump("gg");die();
		//$this->load->library('grocery_CRUD');
	}
	
	public function index()
	{
	   $this->main();
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

	


	function inc1(){
		$id=$_GET["id"];

	$this->load->model('news_model');
    $this->news_model->inc($id);
	}
    	
    function pag_config($fun,$type)
    {
         $config = array();
        $config["base_url"] = base_url() . "News/".$fun;
        $config["total_rows"] = $this->news_model->record_count($type);
      //  var_dump($config["total_rows"] );die();
        $config["per_page"] = 4;
        $config["uri_segment"] = 3;
        $config['cur_tag_open'] = '&nbsp;<a style="background-color: darkgrey;">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';
        
        // By clicking on performing NEXT pagination.
       // $config['next_link'] = 'Next';
        
        // By clicking on performing PREVIOUS pagination.
        //$config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        
         $this->data["links"] = $this->pagination->create_links();
    }
    
	 function search()
        {
        	$this->data['title'] = "نتائج البحث";
	
		$this->data["news"]=true;

        $search =  $this->input->get('search');
        $this->data['result'] = $this->news_model->search_news($search);
        //var_dump($this->data['results']);die();
        $this->data['main_content'] = 'allNews';     
        $this->load->view('includes/template_web',$this->data);
		  
        }
	
    function main(){

   $this->data['title']="الرئيسية";
   $this->data['main_content'] = 'main';
   $this->data['main']=true;
   $this->data["home"]=true;

   $this->data["result"]=$this->news_model->get_NesHome("local");
  
    $this->data["banks"]=$this->news_model->get_NesHome("banks");
    $this->data["oil"]=$this->news_model->get_NesHome("oil");
    $this->data["markets"]=$this->news_model->get_NesHome("markets");
    $this->data["aginst"]=$this->news_model->get_NesHome("aginst");
    $this->data["fromworld"]=$this->news_model->get_NesHome("fromworld");
    $this->data["Peoplestatus"]=$this->news_model->get_NesHome("Peoplestatus");
   
    //var_dump($this->data["caricateer"]);die();
  	if(count($this->data["result"])>0)
  		$this->data["slider"][]= $this->data["result"][0];
     if(count($this->data["banks"])>0)
    	$this->data["slider"][]= $this->data["banks"][0];
     if(count($this->data["oil"])>0)
    	$this->data["slider"][]= $this->data["oil"][0];
     if(count($this->data["markets"])>0)
    	$this->data["slider"][]= $this->data["markets"][0];//$this->news_model->get_NesHome2("slider");
     if(count($this->data["aginst"])>0)
    	$this->data["slider"][]= $this->data["aginst"][0];
	 if(count($this->data["fromworld"])>0)
		$this->data["slider"][]= $this->data["fromworld"][0];
	 if(count($this->data["Peoplestatus"])>0)	
		$this->data["slider"][]= $this->data["Peoplestatus"][0];
   
   $this->load->view('includes/template_web',$this->data);

    }

	function NewsDetails()
	{
		$this->data['title'] = "تفاصيل الخبر";
		$this->data["x"]="true";
		$id=$this->input->get("id");
		 $this->news_model->inc($id);
		$this->data["result"]=$this->news_model->getnewsdetails($id);
		$this->data['title'] .=" / ".$this->data["result"]->title;	
		$this->data["related"]=$this->news_model->get_allnews_except($this->data["result"]->type,3,$id);
		$this->data['main_content'] = 'NewsDetails';
		$this->load->view('includes/template_web',$this->data);
	}
	

	function allnews()
	{
		$this->data['title'] = "الأخبار";
		$this->pag_config("allnews","local");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$this->data["result"]=$this->news_model->get_allnews("local",4,$page);
		$this->data['main_content'] = 'allNews';
		$this->data["news"]=true;
		$this->load->view('includes/template_web',$this->data);
	}

	
	
	function contact()
	{
		//var_dump("fff");die();
		$this->data['title'] = "اتصل بنا";	
		$this->data['sec_contact']=true;
		$this->data['main_content'] = 'contact';	
		$this->data["result"]=$this->news_model->getContact();
		$this->load->view('includes/template_web',$this->data);
		
	}
	
	function about()
	{
		$this->data['title'] = "حولنا";
		$this->data['sec_about']=true;
		$this->data['main_content'] ='about';	
		$this->load->view( 'includes/template_web',$this->data);
	}

	function editing()
	{
		$this->data['title'] = "أسرة التحرير";
		$this->data['main_content'] ='editing';	
		$this->data["result"]=$this->news_model->get_edatingfamily();
		$this->load->view( 'includes/template_web',$this->data);
	}
	
	
	function error()
	{
		$this->data['main_content'] = '404.html';	
		$this->load->view( 'includes/template_web',$this->data);
	}

	//another pages..........................
	function banks()
	{
	    $this->pag_config("banks","banks");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "مصارف و تأمين";
		$this->data["result"]=$this->news_model->get_allnews("banks",4,$page);
		$this->data['main_content'] = 'allNews';
		$this->data["banks_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	
	function markets()
	{
	    $this->pag_config("markets","markets");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "أسواق";
		$this->data["result"]=$this->news_model->get_allnews("markets",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["markets_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	function oil()
	{
	    $this->pag_config("oil","oil");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "النفط والطاقة";
		$this->data["result"]=$this->news_model->get_allnews("oil",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["oil_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	
	function fromworld()
	{
	    $this->pag_config("fromworld","fromworld");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "من العالم";
		$this->data["result"]=$this->news_model->get_allnews("fromworld",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["fromworld_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	function aginst()
	{
	    $this->pag_config("aginst","aginst");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "ضد الفساد";
		$this->data["result"]=$this->news_model->get_allnews("aginst",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["against_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	function Peoplestatus()
	{
	    $this->pag_config("Peoplestatus","Peoplestatu");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "أحوال العالم";
		$this->data["result"]=$this->news_model->get_allnews("Peoplestatu",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["peoplestatus_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
	function local()
	{
	    $this->pag_config("local","local");
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data['title'] = "محليات";
		$this->data["result"]=$this->news_model->get_allnews("local",4,$page);
		$this->data['main_content'] = 'allNews';
			$this->data["local_header"]=true;
		$this->load->view('includes/template_web',$this->data);
	}
}