<?php if (!defined('BASEPATH')) exit ('No direct script  allow');

class Updatemodel extends CI_Model
{

	function updateProfile($post)
	{
		$uid = $this->session->userdata('user_id');
		// echo $uid;exit;
		$q = $this->db->set($post)->where('user_id', $uid)->update('users');
		if($q){
			return true;
		}else{
			return false;
		}
	}

}
