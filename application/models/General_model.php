<?php
class General_model extends CI_Model
{
	function __Construct()
	{
		parent::__Construct();
	}



	function select_where_Products_random()
	{

		$this->db->select('*');
		$this->db->from('wl_products');
		$this->db->order_by('RAND()');
		$this->db->limit(2);
		return $query = $this->db->get();
	}


	function select_where_ASC_DESC_WITH_LIMIT($select, $table, $where, $orderBy_columName, $ASC_DESC, $svalue, $LIMIT)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$this->db->limit($LIMIT, $svalue);
		$result = $this->db->get();
		return $result;
	}



	function addComment($post)
	{
		$this->db->insert('lead_comments', $post);
		return $this->db->insert_id();
	}
}
