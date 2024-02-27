<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Engagements extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('common_model');
		$this->load->model('Adminmodel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function generate_engagement()
	{
		if ($_SERVER['HTTP_HOST'] != "localhost") {
			$region = $this->getRegion();
			$data['region'] = $region;
		}

		$usaTime = $this->getUsaTime();
		$pakTime = $this->getPakTime();

		$data['usa_time'] = $usaTime;
		$data['pak_time'] = $pakTime;


		if ($this->input->post('documentType') == 'Other') {
			$data['doc_type'] = $this->input->post('otherdocumentType');
		} else {
			$data['doc_type'] = $this->input->post('documentType');
		}
		if (!empty($this->input->post('phone'))) {
			$data['phone'] = $this->input->post('phone');
		}
		if (!empty($this->input->post('academic_level'))) {
			$data['academic_level'] = $this->input->post('academic_level');
		}
		if (!empty($this->input->post('client_deadline'))) {
			$data['client_deadline'] = $this->input->post('client_deadline');
		}
		if (!empty($this->input->post('hours'))) {
			$data['hours'] = $this->input->post('hours');
		}
		if (!empty($this->input->post('no_of_page'))) {
			$data['no_of_pages'] = $this->input->post('no_of_page');
		}
		$data['order_from'] = returnSlug();

		$data['domain_name'] = getDomain();
		$lead_id = $this->input->post('eng_id');
		
		$id = '';
		if ($lead_id != 0) {
			$data['isDeleted'] = 0;
			$this->db->where('eng_id', $lead_id)->update('engagements', $data);
			$id = $lead_id;
		} else {
			$this->db->insert('engagements', $data);
			$id = $this->db->insert_id();
		}

		if ($id) {
			echo json_encode(['success' => "success", 'eng_id' => $id]);
		} else {
			echo json_encode(['error' => "error", 'message' => 'Something went wrong.']);
		}
	}

	function getRegion()
	{
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

	function getPakTime()
	{
		date_default_timezone_set("Asia/Karachi");
		$dateTime = date('Y-m-d h:i:A');
		return $dateTime;
	}

	function getUsaTime()
	{
		date_default_timezone_set('US/Pacific');

		$time = time();

		if ($time >= strtotime("Second Sunday March 0")  && $time < strtotime("First Sunday November 0")) {

			return date('Y-m-d H:i', $time);
		} else {
			return date('Y-m-d H:i', $time);
		}
		die;
	}

	function getIPAddress()
	{
		//whether ip is from the share internet
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		//whether ip is from the proxy
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		//whether ip is from the remote address
		else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	
}
