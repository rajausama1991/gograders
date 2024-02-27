<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{


	function __construct()
	{
	
		parent::__construct();
		$this->session->set_userdata('lngid', 'en');
		$this->load->helper('date');
		$this->load->library('cart');
	}

	
	/*********************** Home Page ***************/

	public function index()
	{
		
		$order = $this->common_model->select_return_row_ASD_DESC('*', 'orders','id', 'DESC');
		$data2 = array(
			'order_id' => $order,
		);
		
		echo json_encode($data2);
	}

	public function generate_lead(){
		// echo "<pre>";print_r($this->input->post());
		$this->form_validation->set_rules('name', 'Name', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone number must be accurate', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('documentType', 'Document Type', 'required');
        $this->form_validation->set_rules('academicLevel', 'Acedamic Level', 'required');
        $this->form_validation->set_rules('duedate', 'Deadline Date', 'required');
        $this->form_validation->set_rules('duetime', 'Hours', 'required');
        $this->form_validation->set_rules('no_of_page', 'No Of Pages', 'required');
	    //$this->form_validation->set_rules('quotedPrice', 'Order Price', 'required');
		
		if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }else{
			
		if ($this->input->post('documentType') == 'Other') {
			$data['document_type']=$this->input->post('otherdocumentType');
		}else{
			$data['document_type']=$this->input->post('documentType');
		}	
			
    	if (!empty($this->input->post('name'))) {
    		$data['user_name']=$this->input->post('name');
    	}
    	if (!empty($this->input->post('email'))) {
    		$data['user_email']=$this->input->post('email');
    	}
    	if (!empty($this->input->post('phone'))) {
    		$data['user_phone']=$this->input->post('phone');
    	}
    	
    	if (!empty($this->input->post('academicLevel'))) {
    		$data['academic_level']=$this->input->post('academicLevel');
    	}
    	if (!empty($this->input->post('duedate'))) {
    		$data['due_date']=$this->input->post('duedate');
    	}
    	if (!empty($this->input->post('duetime'))) {
    		$data['lead_due_time']=$this->input->post('duetime');
    	}
    	if (!empty($this->input->post('quotedPrice'))) {
    		$data['quoted_price']=$this->input->post('quotedPrice');
    	}
    	if (!empty($this->input->post('no_of_page'))) {
    		$data['no_of_pages']=$this->input->post('no_of_page');
    	}
    	$data['created_at'] = date('Y-m-d H:i:s');
		$data['order_from'] = 'GOG-';
		$data['domain_name'] = 'gograders.com';
		$lead_id = $this->input->post('lead_id');
		if($lead_id == 0){
		
		$this->db->insert('leads', $data);
		$id = $this->db->insert_id();
		}else{
		
		$this->db->where('lead_id',$lead_id)->update('leads',$data);	
		$id = $lead_id;
		}	
		$newdata['lead_id'] = $id;
		
    	// $this->db->insert('leads', $data);
		// $id = $this->db->insert_id();
		if ($id) {
			echo json_encode($newdata);
			// echo json_encode(['success'=>"success",'lead_id'=>$id]);
		}else{
			echo json_encode(['error'=>"error",'message'=>'Something went wrong.']);
		}
    }
	}

public function generateLeadAutoSave(){
	    
	    $data['ip_address'] = $this->input->post('fingerPrint');
	   // die;
	    
	   if(base_url() !='http://localhost/acdemic/'){
		$region = $this->getRegion();
		 $data['region'] = $region;
		}
	 
	  $usaTime = $this->getUsaTime();
	  // echo $usaTime;
	  // die;
	  $pakTime = $this->getPakTime();
	  // $data[''] = $usaTime;
	  // $data['pak_time'] = $pakTime;
	    
		if (!empty($this->input->post('documentType'))) {
			if ($this->input->post('documentType') == 'Other') {
				$data['document_type'] = $this->input->post('otherdocumentType');
			} else {
				$data['document_type'] = $this->input->post('documentType');
			}
		} else {
			$data['document_type'] = '';
		}

		if (!empty($this->input->post('name'))) {
			$data['user_name'] = $this->input->post('name');
		} else {
			$data['user_name'] = '';
		}
		if (!empty($this->input->post('email'))) {
			$data['user_email'] = $this->input->post('email');
		} else {
			$data['user_email'] = '';
		}
		if (!empty($this->input->post('phone'))) {
			$data['user_phone'] = $this->input->post('phone');
		} else {
			$data['user_phone'] = '';
		}

		if (!empty($this->input->post('academicLevel'))) {
			$data['academic_level'] = $this->input->post('academicLevel');
		} else {
			$data['academic_level'] = '';
		}
		if (!empty($this->input->post('duedate'))) {
			$data['due_date'] = $this->input->post('duedate');
		} else {
			$data['due_date'] = '';
		}
		if (!empty($this->input->post('duetime'))) {
			$data['lead_due_time'] = $this->input->post('duetime');
		} else {
			$data['lead_due_time'] = '';
		}
		if (!empty($this->input->post('quotedPrice'))) {
			$data['quoted_price'] = $this->input->post('quotedPrice');
		} else {
			$data['quoted_price'] = '';
		}
		if (!empty($this->input->post('no_of_page'))) {
			$data['no_of_pages'] = $this->input->post('no_of_page');
		} else {
			$data['no_of_pages'] = '';
		}
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['order_from'] = 'GOG';
		$data['domain_name'] = getDomain();
			
			$ip ='';

// 		$ip = $this->getIPAddress();
		// if (!empty($this->input->post('fingerPrint'))) {
			$ip = $this->input->post('fingerPrint');
		// }

		$row = $this->common_model->select_where_return_row('*', 'auto_save_leads', array('ip_address' => $ip));

		$o_status = '';
		if($row->is_ordered == 1){
		    $o_status = 1;
		}else{
		    $o_status = 0;
		}

		$makeFieldsStringify = array(
			'document_type' => $data['document_type'],
			'user_name' => $data['user_name'],
			'user_email' => $data['user_email'],
			'user_phone' => $data['user_phone'],
			'due_date' => $data['due_date'],
			'no_of_pages' => $data['no_of_pages'],
			'created_at' => $data['created_at'],
			'order_from' => $data['order_from'],
			'domain_name' => $data['domain_name'],
			'ip_address' => $data['ip_address'],
			'usa_time' => $usaTime,
			'pak_time' => $pakTime,
			'is_ordered' => $o_status,
			'ip_address' => $ip,
		);
		$stringifiedValue = json_encode($makeFieldsStringify);

		$stringifyArray = array(
			'fields_data' => $stringifiedValue,
			'ip_address' => $ip,
			'user_email' => $data['user_email'],
			'usa_time' => $usaTime,
			'pak_time' => $pakTime,
		);

		$id = '';
		if ($row) {
			if ($ip == $row->ip_address) {
				$id = $this->db->where('ip_address', $ip)->update('auto_save_leads', $makeFieldsStringify);
			}
		}else{
			$this->db->insert('auto_save_leads', $makeFieldsStringify);
			$id = $this->db->insert_id();
		}
		

		if ($id) {
			echo json_encode(['success'=>"success",'eng_id'=>$ip]);
		}else{
			echo json_encode(['error'=>"error",'message'=>'Something went wrong.']);
		}
    
	}
	
	function getRegion(){
		// Get User 
	 
	 //Gets the IP Address from the visitor
	 $PublicIP = $_SERVER['REMOTE_ADDR'];
	 //Uses ipinfo.io to get the location of the IP Address, you can use another site but it will probably have a different implementation
	 $json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
	 //Breaks down the JSON object into an array
	 $json     = json_decode($json, true);
	 //This variable is the visitor's county
	 $country  = $json['country'];
	 //This variable is the visitor's region
	 $region   = $json['region'];
	 //This variable is the visitor's city
	 $city     = $json['city'];

	 return $country;
 }
 function getPakTime(){
	 date_default_timezone_set("Asia/Karachi");
	 $dateTime = date('Y-m-d h:i:A');
	 return $dateTime;

 }

 function getUsaTime(){
	 date_default_timezone_set('America/Los_Angeles');

	 $time = time();

	 if ($time >= strtotime("Second Sunday March 0")  && $time < strtotime("First Sunday November 0")) 
	 {

		 return date('m/d/y h:i a', $time);

	 } else {
		 return date('m/d/y h:i a', $time);
	 }
 }

	

}
