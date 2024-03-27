<?php
	$q=100;
class login_model extends CI_Model {
	
	function create_user()
	{
		$q="SELECT * FROM admin where username=?";
		$sql=$this->db->query($q,array($this->input->post('username'))); 
		if ($sql->num_rows > 0)
           { return 0;}
		else {
		$this->db->trans_begin();
		
			$key = pack('H*', "bcb04b4a8b6a0cffe54763945cef08bc88abe000fdebae5e1d417e2ffb2a12a3");
			
			# show key size use either 16, 24 or 32 byte keys for AES-128, 192
			# and 256 respectively
			
			$plaintext = $this->input->post('password');

			
			$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
			$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			
			$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,$plaintext, MCRYPT_MODE_CBC, $iv);

			
			$ciphertext = $iv . $ciphertext;
			
			
			$ciphertext_base64 = base64_encode($ciphertext);
		
		
		$npass=$ciphertext_base64;
			
			
			
			$new_insert_data = array(
			'username'=>$this->input->post('username'),
			'password'=>$npass,
			'first_name'=> $this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			);				
			$insert = $this->db->insert('admin', $new_insert_data);
			$user_id=$this->db->insert_id();
		if ($this->db->trans_status() === FALSE)
		 {
			$this->db->trans_rollback();
			return false;
		 }
		else
		 {
			$this->db->trans_commit();
			return $user_id;
		 }	
		}			 
	}
	
	function decrypt_password($value)
	{
	  $this->load->library('encrypt');
	  $key = 'bcb04b4a8b6a0cffe54763945cef08bc88abe000fdebae5e1d417e2ffb2a12a3';
	  $decrypted_password = $this->encrypt->decode($value, $key);
	  //var_dump($decrypted_password);die();
	  return $decrypted_password;
	}
	function validate()
	{
		$q="SELECT * FROM user where username='".$this->input->post('username')."'";
		$sql=$this->db->query($q);
		
		foreach ($sql->result() as $raw ) {
					$data[]=$raw;
				}
		$user_num=$sql->num_rows;
		if ($sql->num_rows > 0)
			{	
					$dec=$this->decrypt_password($data[0]->password);
				if($this->input->post('password')==$dec){
					unset($data[0]->password);
					//var_dump($data[0]);die();
						return $data[0];
					}
				else{
						return false;
					}
			}
		else 
			return false;
	}
}