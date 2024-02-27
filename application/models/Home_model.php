<?php

class Home_model extends CI_Model{
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

	function select_where($select,$table,$where)
	{
		$this->db->select( $select );
		$this->db->from( $table );
		$this->db->where( $where );
		$query =  $this->db->get();
		return $query->result();
	}
	function select_all($select,$table)
	{
		$this->db->select( $select );
		$this->db->from( $table );
		// return $this->db->get();
		$query =  $this->db->get();
		return $query->result();
	}
	// QUERY FOR DASHBOARD 
	function getDashboard($userID){
	  $query = $this->db->select('*')
					->from('users')
					->join('company','company.user_id = users.id')
					->join('user_subscriptions','user_subscriptions.id = company.subscription_id')
					->get()->row();
		return $query;
	}
	
	public function GetSelectedRecord($table, $slug = NULL){
       
        if($slug != ''){
            $this->db->where('page_slug',$slug);
        }
        $query = $this->db->get($table)->row_array();
		// echo $this->db->last_query();
        return $query;
    }
	
	
	function store($post,$schedule,$random_key,$companyID)
	{
		$chargeJson = $schedule->jsonSerialize();
		
		$customerID                  = $chargeJson['customer'];
		$subscriptionID     = $chargeJson['id'];
		$plain_start_date   = $chargeJson['phases'][0]['start_date'];
		$status            = $chargeJson['status'];
		
		//STORE SUBSCRIPTION TABLE
		$subscriptions = array(
						'stripe_customer_id'=>$customerID,
						'stripe_subscription_id'=>$subscriptionID,
						'plan_period_start'=>$plain_start_date,
						'token_id' => $post['stripeToken'],
						'status'=>$status
				);	
		//echo "<pre>";print_r($subscriptions);die;			
		$this->db->insert('user_subscriptions',$subscriptions);
		$subscriptionsID = $this->db->insert_id();
		
		
		
		// second table 
		$users = array(
				'username' => $post['company']['users_attributes'][0]['username'],
				'password' => $post['company']['users_attributes'][0]['password'],
				'created' => date("Y-m-d H:i:s"),
				'encryption_key'=> $random_key
		);
		
		$this->db->insert('users',$users);
		$userID = $this->db->insert_id();
		
		//3rd table
			$company= array(
						'corporate' => $post['company']['corporate'],
						'name' => $post['company']['name'],
						'email' => $post['company']['email'],
						'poslight' => $post['company']['poslight'],
						'tk_subscription' => $post['stripeToken'],
						'user_id' => $userID,
						'subscription_id' => $subscriptionsID,
						'company_id' => $companyID
			
				);
				$this->db->insert('company',$company);
		return ($this->db->affected_rows() != 1) ? false : true;
		
		
		
	}
	
	
	
	 function updateVerify($key)
    {
        $this->db->where('encryption_key',$key);
		 $this->db->update('users',array('status'=>'1'));
		 //echo "<pre>";echo $this->db->last_query();die;
        
    }
	function updateCompany($userID,$accountID)
    {
        $this->db->where('user_id',$userID);
		$this->db->update('company',array('account_id'=>$accountID));
		 
        
    }
	function login($post)
    {
        $this->db->where('phone',$post['phone']);
        $this->db->where('password',$post['password']);
        $res = $this->db->get('rent_out');
        return count($res->result()) == 1 ? $res->row() : FALSE;
    }
	
	
			
	
	
	
	
	
	
	
	
}