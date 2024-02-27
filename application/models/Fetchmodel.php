<?php if (!defined('BASEPATH')) exit('No direct script  allow');



class Fetchmodel extends CI_Model

{

	public $slug;

	public function __construct()
	{
		$this->slug = returnSlug();
	}


	function join_two_tab_where($select, $from, $jointable, $condition, $left_right, $where, $orderBy_columName, $ASC_DESC)

	{

		$this->db->select($select);

		$this->db->from($from);

		$this->db->join($jointable, $condition, $left_right);

		$this->db->where($where);

		//$this->db->limit($recordperpage, $page);

		$this->db->order_by($orderBy_columName, $ASC_DESC);

		$query = $this->db->get();

		return $query->result();
	}



	public function fetchOrderFiles()
	{
		$this->db->select('*');
		$this->db->from('order_files lf');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			// echo '<pre>';print_r($query->result());exit;
			return $query->result();
		} else {
			return false;
		}
	}


	public function searchOrder($id)
	{

		$this->db->select('*');

		$this->db->from('orders o');

		$this->db->where('order_id', $id);

		$this->db->where('order_from', $this->slug);

		// $this->db->order_by('c.track_title','asc');

		$query = $this->db->get();

		// echo '<pre>';print_r($query->result_array());exit;

		if ($query->num_rows() > 0) {

			return $query->row();
		} else {

			return false;
		}
	}

	public function fetchDownloadWork()
	{
		$email = $this->session->userdata('email');
		$this->db->select('*, o.order_id');
		$this->db->from('orders o');
		$this->db->join('submission_files of', 'of.order_id=o.order_id', 'left');
		$this->db->join('revisions r', 'r.order_id=o.order_id', 'left');

		$this->db->where('user_email', $email);
		$this->db->where('order_from', $this->slug);
		$this->db->where('order_status', '3');
		$this->db->where('is_submitted', '1');
		$this->db->where('is_revision', '0');
		$this->db->order_by('id', 'desc');
		// $this->db->limit(1);
		// $this->db->order_by('c.track_title','asc');
		$query = $this->db->get();
		//  echo '<pre>';print_r($query->result_array());exit;
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	// 	function fetchOrders()
	// 	{

	// 		$email = $this->session->userdata('email');
	// 		$this->db->select('*, o.order_id');
	// 		$this->db->from('orders o');
	//         $this->db->join('revisions r', 'o.order_id=r.order_id', 'left');
	// 		$this->db->where('user_email', $email);
	// 		$this->db->where('order_from', $this->slug);
	// 		$this->db->order_by('payment_type', 'asc');
	// 		// $this->db->group_by('r.order_id');
	// 		$query =  $this->db->get();
	// 		// echo '<pre>';print_r($query->result());exit;
	//         return $query->result();

	// 	}


	function fetchOrders()
	{
    
		$email = $this->session->userdata('email');
		$this->db->select('*');
		$this->db->from('orders');
		// $this->db->join('revisions r', 'o.order_id=r.order_id', 'left');
		$this->db->where('user_email', $email);
		$this->db->where('order_from', $this->slug);
		$this->db->order_by('payment_type', 'asc');
		// $this->db->group_by('r.order_id');
		$query =  $this->db->get();
// 		echo '<pre>';print_r($query->result());exit;
		return $query->result();
	}
}
