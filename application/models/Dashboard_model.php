<?php

class Dashboard_model extends CI_Model{
	function __construct() {	
        parent::__construct();
    }
	
	//---  Getting records  ---//
   public function get_records($table, $columns, $where = ''){
        $this->db->select($columns);
        $this->db->from($table);
        if($where != ''){
            $this->db->where($where);
        }
        $query = $this->db->get();
		return $query;
    }
	
		public function show_submission_to_client($clientEmail)
		{
			$this->db->select("*");
			$this->db->from("submissions");
			$this->db->join('orders', 'orders.id = submissions.order_id');
			$this->db->join('submission_files', 'submissions.submission_id = submission_files.submission_id');
			$this->db->where('orders.client_email',$clientEmail);
			$this->db->where('orders.payment_status !=', 2);
			$this->db->where('submissions.status !=',0);
			//$this->db->where('submissions.my_submission_status !=',0);
			$this->db->group_by('orders.id');
			$this->db->order_by('submissions.submission_id','DESC');
			$query_result = $this->db->get();
			$result = $query_result->result();
			return $result;

		}
	
	 //---  function for updating records  ---//
    public function update_records($table, $data, $where){
        $this->db->where($where);
        $this->db->update($table, $data);
        $affectedRows = $this->db->affected_rows();
        if($affectedRows>0){
            return true;
        }else{
            return false;
        }
    }
	    //---  function for deleting records  ---//
    public function delete_records($table,$where = ''){
        if($where != '')
            $this->db->where($where);
        $this->db->delete($table);
        $affectedRows = $this->db->affected_rows();
        if($affectedRows){
            return true;
        }else{
            return false;
        }
    }//---  End of function delete_records  ---//
	
	
	 //---  function for inserting new records  ---//
    public function insert_record($table, $data, $retID = ''){
        $this->db->insert($table, $data);
		 $affectedRows = $this->db->affected_rows();
        if($retID != ''){
            return $this->db->insert_id();
        }
        elseif($affectedRows){
            return true;
        }else{
            return false;
        }
    }//---  End of function insert_reocord  ---//
	 //---  function for inserting multiple records in batch form  ---//
    public function insert_multiple($tbl,$data)
    {
        $this->db->insert_batch($tbl, $data);
    }//---  End of function insert_multiple  ---//
	
	 public function get_joined_records($pTable, $columns, $joins, $where = '', $or_where='',$order_by=''){
        $this->db->select($columns);
        $this->db->from($pTable);
        if($joins!=''){
            foreach($joins as $join){
                $this->db->join($join['table'],$join['condition'], $join['joinType']);
            }
        }
        if($where != ''){
            $this->db->where($where);
        }
        if($or_where != ''){
            $this->db->or_where('','');

        }
        if($order_by != '') {
            $this->db->order_by($order_by);
        }
        $query = $this->db->get();
        return $query;
    }
	
	public function getstoreDetail($id)
	{
		$result = $this->db->where('id',$id)->get('rent_out')->row_array();
		if(!empty($result)){
		$result['promotions'] = $this->db->where('userID',$result['id'])->
		get('promotion')->result();
		
		$result['galleries'] = $this->db->where('userID',$result['id'])->get('gallery')->result();
		
		return $result;
		}
	}
	
	
	}