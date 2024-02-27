<?php
class Adminmodel extends CI_Model
{
	function __Construct()
	{
		parent::__Construct();
	}


	/**************************** Login *********************************/
	
	function login($admin_username,$admin_password)
	{
		$this->db->select('*');
		// $this->db->from($this->db->dbprefix.'admin');
		$this->db->from('admin');
		$this->db->where('admin_username',$admin_username);
		$this->db->where('admin_password',md5($admin_password));
		return $this->db->get();
	}


	function loginUser($email,$password)
	{
		$this->db->select('*');
		// $this->db->from($this->db->dbprefix.'admin');
		$this->db->from('users');
		$this->db->where('user_email',$email);
		$this->db->where('user_password',$password);
		$this->db->where('domain_type', 'GOG');
		return $this->db->get();
	}


	/**************************** Change Password *********************************/
	
   function change_pass($table,$data,$data1){
	 
		$this->db->where('admin_password',$data1['admin_password']);
		$this->db->where('admin_id',$this->session->userdata('admin_login'));
		$this->db->update($table,$data);
		return $this->db->affected_rows();
    }


	/**************************** Change Password *********************************/
	
   function change_username($table,$data,$data1){
	 
		$this->db->where('admin_username',$data1['admin_username']);
		$this->db->where('admin_id',$this->session->userdata('admin_login'));
		$this->db->update($table,$data);
		return $this->db->affected_rows();
    }


}?>
