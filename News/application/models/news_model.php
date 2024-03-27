<?php

class news_model extends CI_Model {

   function show_breaking_news() {

		$query=$this->db->select("description")->from("breaking_news")->where(array("avaliable"=>1))->get();
		$res=$query->result();
		return $res;

   }
	function show_newsarea()
	{
		$query= $this->db->select("id,title")->from("news")->where(array("show"=>1))->get();
		$res= $query->result();
		return $res;

	}
	function from_archive()
	{
	   	$query= $this->db->query("SELECT * FROM `news` WHERE `NewsDate` < NOW() - INTERVAL 1 DAY ORDER BY RAND() LIMIT 0,5 ");
	   		$res= $query->result();
		return $res;
	}
    public function get_caricateer()
    {
        	$query= $this->db->query("SELECT * FROM caricateer WHERE DATE(`date`) = CURDATE()");
        	$res= $query->result();
		return $res;
    }
     public function record_count($type="news") {
        return $this->db->where("type",$type)->count_all_results("news");
    }

	function getContact()
	{
		$query= $this->db->get("contact");
		$res= $query->result();
		return $res[0];

	}

	function getnewsdetails($id){

		$query=$this->db->select("*")->from("news")->where(array("id"=>$id))->get();
		if($query->num_rows()>0)
		{
			$res= $query->result();
			return $res[0];
		}
		return false;
	}
	function get_allnews ($type="news",$limit=0, $start=0){
                if($limit != 0)
                {
                    $this->db->limit($limit, $start);
                }
			   $query=$this->db->select('*')->from('news')->where(array("type"=>$type))->order_by("id","DESC")->get();
			   if($query->num_rows()>0)
			   {
			     $res=$query->result();
			     return $res;
			   }

	   }
	   function get_allnews_except ($type="news",$limit=0, $id){
                if($limit != 0)
                {
                    $this->db->limit($limit, 0);
                }
			   $query=$this->db->select('*')->from('news')->where(array("type"=>$type))->where('id !=',$id)->order_by("id","DESC")->get();
			   if($query->num_rows()>0)
			   {
			     $res=$query->result();
			     return $res;
			   }

	   }
	
	function get_NesHome($type)
	{
		  $query=$this->db->select('*')->from('news')->where(array("type"=>$type))->order_by("id","DESC")->limit(5, 0)->get();
			   if($query->num_rows()>0)
			   {
			     $res=$query->result();
			     return $res;
			   }
	} 

	function get_NesHome2(){
      $query=$this->db->select('*')->from('news')->order_by('id',"desc")->limit(5,0)->get();

			   if($query->num_rows()>0)
			   {
			     $res=$query->result();
			     return $res;
			   }


	}

function get_edatingfamily(){

			   $query=$this->db->select('*')->from('family')->get();
			   if($query->num_rows()>0)
			   {
			     $res=$query->result();
			     return $res[0];
			   }

	   } 

   function get_sidbarad(){

		   	$query = $this->db->limit('3')->order_by("id", "desc")->where(array('position' =>"يمين" ,"active"=>1))->get('ad');
		   	$res=$query->result();
		   	return $res;


	   } 

   function get_footer(){

		   	$query = $this->db->limit('1')->order_by("id", "desc")->where(array('position' =>"أسفل" ,"active"=>1))->get('ad');
		   	$res=$query->result();
		   	return $res[0];


	   } 

 function get_header(){

		   	$query = $this->db->order_by("id", "desc")->where(array('position' =>"أعلى" ,"active"=>1))->get('ad');
		   	$res=$query->result();
		   	return $res;


	   } 
	    function get_onSide(){

		   	$query = $this->db->limit('2')->order_by("id", "desc")->where(array('position' =>"على الجوانب" ,"active"=>1))->get('ad');
		   	$res=$query->result();
		   	return $res;


	   } 
	   
	   function inc($id){
      
		 	$query=$this->db->set('visited', '`visited`+ 1', FALSE)->where(array('id'=>$id))->update('news');
		 	
		   	return $query;
     	}
     	function most_viewed(){

     		$query=$this->db->limit('5')->order_by("visited","desc")->get('news');
     		$res=$query->result();
     		return $res;
     	}
     	
     	
       function search_news($search){

          $query = $this->db->select("*",$search)->from('news')->like('title',$search)->get();
              $res=$query->result();
             //die($this->db->last_query());
                 return $res;
     	}


}