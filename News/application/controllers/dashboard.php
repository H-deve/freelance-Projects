<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		 session_start();
		
		//var_dump($this->session->userdata('super_admin'));
		//$this->load->model('user_model');
		$this->load->library('grocery_CRUD');
		$this->data["course_count"]=0;
		$this->data["activity_count"]=0;
		$this->data["news_count"]= 0;
		$this->data["users_count"]= 0;
		
	}

	public function index()
	{
		redirect(base_url()."dashboard/manage_Localnews");
	}
	function manage_contact()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('contact');
		
		$output = $crud->render();
		 $this->data['output'] = $output;
		  $this->data['general_active'] = true;
		  $this->data['contact_active'] = true;
		  $this->data['title']="إدارة معلومات الاتصال";
		 //var_dump($output);
		 $this->data['main_content'] = 'management';	
		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_section()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('section');
		$crud->set_field_upload('image','uploads');
		//$crud->columns('sec_file_name','sec_file_type');
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('More', '', 'demo/action_more','ui-icon-plus');
		$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		  $this->data['sec_active'] = true;
		  $this->data['title']="إدارة الأقسام";
		 //var_dump($output);
		 $this->data['main_content'] = 'management';	
		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}
	
	
	function manage_ad(){

		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة الإعلان";
		 $this->data['general_active'] = true;
		$this->data['AD_active'] = true;
		$crud->set_table('ad');
	
		
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('file','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);

	}
    function manage_caricateer()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة كاريكاتير اليوم";
		$this->data['caricateer_active'] = true;
		$crud->set_table('caricateer');
	
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_news()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة الأخبار";
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","news");
		$crud->field_type('type', 'hidden', "news");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_Banknews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة أخبار التأمين والمصارف";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","banks");
		$crud->field_type('type', 'hidden', "banks");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_Localnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة المحليات";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","local");
		$crud->field_type('type', 'hidden', "local");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_Oilnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة النفط والطاقة";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","oil");
		$crud->field_type('type', 'hidden', "oil");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}

	function manage_Againstnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة أخبار ضد الفساد";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","aginst");
		$crud->field_type('type', 'hidden', "aginst");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}
	function manage_Peoplenews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة أخبار أحوال الناس";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","Peoplestatus");
		$crud->field_type('type', 'hidden', "Peoplestatus");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}
	function manage_marketsnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة الأسواق";
		$this->data['mnews_active'] = true;
		$this->data['news_active'] = true;
		$crud->set_table('news');
		$crud->where("type","markets");
		$crud->field_type('type', 'hidden', "markets");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}
function manage_fromworldnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$this->data['title']="إدارة أخبار من العالم";
		 $this->data['mnews_active'] = true;
		$this->data['fromworldnews_active'] = true;
		$crud->set_table('news');
		$crud->where("type","fromworld");
		$crud->field_type('type', 'hidden', "fromworld");
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$crud->set_field_upload('image','uploads');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}


	function manage_Editing_family(){

       $crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		 $this->data['title']="إدارة الأخبار";
		  $this->data['general_active'] = true;
		  $this->data['breakingnews_active'] = true;
		$crud->set_table('family');
		$crud->unset_add();
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);


	}
	
	function manage_Breakingnews()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		 $this->data['title']="إدارة الأخبار";
		 $this->data['mnews_active'] = true;
		  $this->data['breakingnews_active'] = true;
		$crud->set_table('breaking_news');
	
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		//$crud->add_action('إدارة النشاطات', '', '','ui-icon-image',array($this,'activity'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	

		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}



	function manage_courses()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		 $this->data['course_active'] = true;
		$this->data['title']="إدارة الدورات";
		$crud->set_table('course');
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		$crud->display_as('cat_id','Course Category');
		$crud->set_relation('cat_id','category','name_ar');
		$crud->set_field_upload('image','uploads2');
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $data['main_content'] = 'management';	
		 //$this->load->view('includes/template',$data);
		 $this->load->view( $data['main_content'],$this->data);
	}
	
	function manage_activity($sec_id)
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$this->data['title']="إدارة النشاطات";
		$crud->set_table('activity');
		$crud->where("section_id",$sec_id);
		$crud->field_type('section_id', 'hidden', $sec_id);
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		$crud->set_field_upload('main_image','uploads');
		
		
			$crud->callback_after_upload(array($this,'compress_callback_after_upload'));
			$crud->add_action('الألبوم', '', '','ui-icon-image',array($this,'album'));
		$output = $crud->render();
		 $this->data['output'] = $output;
			 $data['main_content'] = 'management';	
			 //$this->load->view('includes/template',$data);
			 $this->load->view( $data['main_content'],$this->data);
	}
	function album($primary_key , $row)
	{
		return base_url('/dashboard/manage_album').'/'.$row->id;
	}
	function manage_album($act_id)
	{
		 $this->load->library('image_CRUD');
		$image_crud = new image_CRUD();
	 
		$image_crud->set_table('actimage');
	 
		
		$image_crud->set_url_field('image');
	 
		$image_crud->set_relation_field('act_id')
		->set_image_path('uploads');
		
		$output = $image_crud->render();
		// var_dump($output);die();
		 $this->data['output'] = $output;
			 $data['main_content'] = 'management';	
			 //$this->load->view('includes/template',$data);
			 $this->load->view( $data['main_content'],$this->data);
	 
	}
	
	public function manage_users(){
		if(!$this->session->userdata('super_admin'))
		{
			redirect(base_url()."dashboard/manage_section");
		}
		$crud = new grocery_CRUD();
		$crud->set_table('user');
		$crud->set_subject('User');
		$crud->required_fields('username');
	  
		$crud->columns('username','first_name','last_name','active');
		$crud->fields('username','first_name','password','last_name','active');
		$crud->change_field_type('password', 'password');
	  
	  $crud->callback_before_insert(array($this,'encrypt_password_callback'));
	  $crud->callback_before_update(array($this,'encrypt_password_callback'));
		  
	  $crud->callback_edit_field('password',array($this,'decrypt_password_callback'));

			$output = $crud->render();
				 $this->data['output'] = $output;
			 $data['main_content'] = 'management';	
			 //$this->load->view('includes/template',$data);
			 $this->load->view( $data['main_content'],$this->data);
		}

	function encrypt_password_callback($post_array, $primary_key = null)
	{
	  $this->load->library('encrypt');
	  $key = 'bcb04b4a8b6a0cffe54763945cef08bc88abe000fdebae5e1d417e2ffb2a12a3';
	  $post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
	  return $post_array;
	}

	function decrypt_password_callback($value)
	{
	  $this->load->library('encrypt');
	  $key = 'bcb04b4a8b6a0cffe54763945cef08bc88abe000fdebae5e1d417e2ffb2a12a3';
	  $decrypted_password = $this->encrypt->decode($value, $key);
	  //var_dump($decrypted_password);die();
	  return "<input type='password' name='password' value='$decrypted_password' />";
	}


	function manage_users2()
	{
		if(!$this->session->userdata('super_admin'))
		{
			redirect(base_url()."dashboard/manage_section");
		}
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		 $this->data['title']="ادارة المستخدمين";
		  $this->data['users_active'] = true;
		$crud->set_table('admin');
		//$crud->set_relation('sec_file_sec_id','section','sec_id');
		$output = $crud->render();
		 $this->data['output'] = $output;
		 $this->data['main_content'] = 'management';	
		 //$this->load->view('includes/template',$data);
		 $this->load->view( $this->data['main_content'],$this->data);
	}
	
	

	function _video_player($value, $row) {
		if($row->sec_file_type=='video')
			return "<a href='#' id='".$row -> sec_file_id."' class='btn btn-sucess video_play'>Play</a>";
		else 
			return $row;
	}
	
	public function copy_data($post_array,$primary_key)
	{
		$q=$this->db->query("INSERT INTO updated_files(description,url,date,user_id) SELECT description,url,NOW(),".$this->session->userdata('user_id')." FROM files WHERE id= ".$primary_key);
		 return $post_array;
	}
	
	function compress_callback_after_upload($uploader_response,$field_info, $files_to_upload)
	{
		$this->load->library('image_moo');
		//var_dump($field_info->upload_path);die();
		//Is only one file uploaded so it ok to use it with $uploader_response[0].
		$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
		$target=$field_info->upload_path.'/thumb/'.$uploader_response[0]->name; 
		$this->image_moo->load($file_uploaded)->resize(750,500)->save($target,true);
		
		//$this->image_moo->load($file_uploaded)->resize(250,250)->save($target,true);
	 
		return true;
	}
	

}