<?php

defined('BASEPATH') or exit('No direct script access allowed');

class OrderNow extends MY_Controller
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

	function sendmail($email, $username, $password)
	{
		$link = base_url() . 'login';
		$emailData = array(
			'email' => $email, 'username' => ucwords($username), 'subject' => 'Login Password',
			'link' => $link, 'password' => $password
		);

		if ($this->emailFunction('contact_template', $emailData)) {
			return 1;
		} else {
			return 0;
		}
	}

	public function generate_lead()
	{
		$this->form_validation->set_rules('phone', 'country code required, Phone', 'required|regex_match[/^\+\d{1,4}\s*\d{8,14}$/]');
		$this->form_validation->set_rules('documentType', 'Document Type', 'required');
		$this->form_validation->set_rules('academicLevel', 'Acedamic Level', 'required');
		$this->form_validation->set_rules('duedate', 'Deadline Date', 'required|callback_checkDateFormat', array('checkDateFormat' => 'Invalid Date'));
		$this->form_validation->set_rules('duetime', 'Hours', 'required');
		$this->form_validation->set_rules('no_of_page', 'No Of Pages', 'required');
		$this->form_validation->set_error_delimiters('<p class="backend-error-p" style="color: red;">', '</p>');

		if ($this->form_validation->run() == FALSE) {
			$errors =  array(
				'error' => 'errors','phone' => form_error('phone'), 'document_type' => form_error('documentType'), 'academic_level' => form_error('academicLevel'), 'due_date' => form_error('duedate'), 'no_of_page' => form_error('no_of_page')
			);
			echo json_encode($errors);
			die;
		} else {

			//  Getting user Location

			if ($_SERVER['HTTP_HOST'] != "localhost") {
				$region = $this->getRegion();
				$data['region'] = $region;
			}

			$usaTime = $this->getUsaTime();
			$pakTime = $this->getPakTime();
			$data['usa_time'] = $usaTime;
			$data['pak_time'] = $pakTime;
			if ($this->input->post('is_full_pay') == 1) {
				$data['payment_type'] = '1';
			}
			if ($this->input->post('is_full_pay') == 0) {
				$data['payment_type'] = '0';
			}

			if ($this->input->post('documentType') == 'Other') {
				$data['document_type'] = $this->input->post('otherdocumentType');
			} else {
				$data['document_type'] = $this->input->post('documentType');
			}
			if ($data['document_type'] == '') {
				echo json_encode(['error' => "other_doc", 'message' => 'Please Enter Document Type.']);
				die;
			}
			if (!empty($this->input->post('name'))) {
				$data['user_name'] = $this->input->post('name');
			}
			if (!empty($this->input->post('email'))) {
				$data['user_email'] = $this->input->post('email');
			}
			if (!empty($this->input->post('phone'))) {
				$data['user_phone'] = $this->input->post('phone');
			}
            if ($this->input->post('discount') == 1) {
				$data['discount'] = '1';
			}

			$fpID = $this->input->post('finger_print_id');

			if (!empty($this->input->post('academicLevel'))) {
				$data['academic_level'] = $this->input->post('academicLevel');
			}
			if (!empty($this->input->post('duedate'))) {
				$data['due_date'] = $this->input->post('duedate');
			}
			if (!empty($this->input->post('duetime'))) {
				$data['lead_due_time'] = $this->input->post('duetime');
			}
			if (!empty($this->input->post('quotedPrice'))) {
				$data['quoted_price'] = $this->input->post('quotedPrice');
				if ($this->input->post('is_full_pay') == 0) {
					$qp= $this->input->post('quotedPrice');
					$data['quoted_price'] = $qp/2;  // half payment
				}
			}
			if (!empty($this->input->post('paid_price'))) {
				$data['paid_price']  = number_format($this->input->post('paid_price'), 2);
				$data['paid_price'] = str_replace(',', '', $data['paid_price']);
			}
			if (!empty($this->input->post('paid_in'))) {
				$data['paid_in'] = $this->input->post('paid_in');
			}
			if (!empty($this->input->post('no_of_page'))) {
				$data['no_of_pages'] = $this->input->post('no_of_page');
			}
			if ($data['due_date'] < date('Y-m-d')) {
				echo json_encode(['error' => "date_error", 'message' => 'Please insert valid date']);
				die;
			}
			$data['order_from'] = returnSlug();
			$data['domain_name'] = getDomain();
			$lead_id = $this->input->post('lead_id');
			date_default_timezone_set("US/Pacific");
			$data['filterDate'] = date('Y-m-d');
			date_default_timezone_set("Asia/Karachi");
			$data['pakFilter'] = date('Y-m-d');
			$id = '';
			if ($lead_id != 0) {
				$data['isDeleted'] = 0;
				$check = $this->common_model->select_where_table_rows('*', 'orders', array('order_status !=' => 0, 'order_from' => returnSlug(), 'user_phone' => $data['user_phone']));

				if ($check > 0) {
					$data['user_type'] = 1;
				} else {
					$check = $this->common_model->select_where_table_rows('user_phone', 'leads', array('user_phone' => $data['user_phone'], 'order_from' => returnSlug(), 'isDeleted' => 0));
					if ($this->input->post('is_phone') == 1) {
						if ($check > 0) {

							$data['user_type'] = 3;
						} else {
							$data['user_type'] = 0;
						}
					}
				}
				$this->db->where('lead_id', $lead_id)->update('leads', $data);
				$id = $lead_id;
			} else {
				$check = $this->common_model->select_where_table_rows('*', 'orders', array('order_status !=' => 0, 'order_from' => returnSlug(), 'user_phone' => $data['user_phone']));

				if ($check > 0) {
					$data['user_type'] = 1;
				} else {
					$check = $this->common_model->select_where_table_rows('user_phone', 'leads', array('user_phone' => $data['user_phone'], 'order_from' => returnSlug(), 'isDeleted' => 0));
					if ($check > 0) {
						$data['user_type'] = 3;
					}
				}
				$this->db->insert('leads', $data);
				$id = $this->db->insert_id();
				$this->sendNotification($id, getDomain(), 0);
			}

			if ($id) {
				$delete_eng = $this->common_model->select_where_return_row('*', 'leads', array('lead_id' => $id));
				$this->common_model->delete_where(array('phone' => $delete_eng->user_phone), 'engagements');
				echo json_encode(['success' => "success", 'lead_id' => $id]);
			} else {
				echo json_encode(['error' => "error", 'message' => 'Something went wrong.']);
			}
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

	public function generateLeadAutoSave()
	{

		$data['ip_address'] = $this->input->post('fingerPrint');
		// die;


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
		if ($_SERVER['HTTP_HOST'] == "localhost") {
			$data['order_from'] = 'AHT';
		} else {
			$data['order_from'] = getWebinfo()->slug;
		}
		$data['domain_name'] = getDomain();
		if (!empty($this->input->post('lead_id'))) {
			$lead_id = $this->input->post('lead_id');
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
			'is_ordered' => 0,
		);
		$stringifiedValue = json_encode($makeFieldsStringify);

		$ip = '';

		// 		$ip = $this->getIPAddress();
		if (!empty($this->input->post('fingerPrint'))) {
			$ip = $this->input->post('fingerPrint');
		}

		$row = $this->common_model->select_where_return_row('*', 'auto_save_leads', array('ip_address' => $ip));

		$stringifyArray = array(
			'fields_data' => $stringifiedValue,
			'ip_address' => $ip,
			'user_email' => $data['user_email'],
		);

		$id = '';

		if ($row) {
			if ($ip == $row->ip_address) {
				$id = $this->db->where('ip_address', $ip)->update('auto_save_leads', $stringifyArray);
			}
		} else {
			$this->db->insert('auto_save_leads', $stringifyArray);
			$id = $this->db->insert_id();
		}

		if ($id) {
			// echo json_encode($newdata);
			echo json_encode(['success' => "successs"]);
		} else {
			echo json_encode(['error' => "error", 'message' => 'Something went wrong.']);
		}
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


	public function index()
	{
		if (!empty($this->input->post())) {
			$data['order'] = $this->input->post();
		}
		$data['type_of_documents'] = $this->Home_model->get_records('type_of_document', '*')->result();
		$data['title'] = "Get Essay Papers Online: Order In 3 Easy Steps | Academic Help Today";
		$data['meta_description'] = "Purchase our papers online in 3 simple steps and get unlimited corrections. Request from our U.S qualified professional academic writers.";
		// $data['keyword'] = "perfect essay writing";
		$data['canonical'] = "order-now";
		$this->load->view('ordernowView', $data);
	}

	public function orderProcess()
	{
        $this->form_validation->set_rules('phone', 'Phone number must be accurate', 'required|regex_match[/(^\+\d{1,4}\s*)?\d{8,14}$/]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('documentType', 'Document Type', 'required');
		$this->form_validation->set_rules('academicLevel', 'Acedamic Level', 'required');
		$this->form_validation->set_rules('duedate', 'Deadline Date', 'required');
		$this->form_validation->set_rules('duetime', 'Hours', 'required');
		$this->form_validation->set_rules('no_of_page', 'No Of Pages', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('project_subject', 'Project Subject', 'required');
		$this->form_validation->set_rules('citation_style', 'Citation Style', 'required');
		$this->form_validation->set_rules('NumberSources', 'Number Of Sources', 'required');
		$this->form_validation->set_rules('comment', 'Description', 'required');
		//$this->form_validation->set_rules('quotedPrice', 'Order Price', 'required');
		$imagesFiles = array();
		$imagesFilesShow = array();

		if ($this->form_validation->run() == FALSE) {
			$errors = validation_errors();
			echo json_encode(['error' => $errors]);
		} else {

			if ($_SERVER['HTTP_HOST'] != "localhost") {
				$region = $this->getRegion();
				$data['region'] = $region;
			}

			$usaTime = $this->getUsaTime();
			$pakTime = $this->getPakTime();

			$data['usa_time'] = $usaTime;
			$data['pak_time'] = $pakTime;

			if ($this->input->post('project_subject') == 'Other') {
				$data['subject'] = $this->input->post('otherSubject');
			} else {
				$data['subject'] = $this->input->post('project_subject');
			}

			if ($this->input->post('citation_style') == 'Other') {
				$data['citation_style'] = $this->input->post('otherCitation');
			} else {
				$data['citation_style'] = $this->input->post('citation_style');
			}

			if ($this->input->post('documentType') == 'Other') {
				$data['document_type'] = $this->input->post('otherdocumentType');
			} else {
				$data['document_type'] = $this->input->post('documentType');
			}


			if (!empty($this->input->post('name'))) {
				$data['user_name'] = $this->input->post('name');
			}

			if (!empty($this->input->post('otherSubject'))) {
				$data['subject_other'] = $this->input->post('otherSubject');
			}
			if (!empty($this->input->post('otherCitation'))) {
				$data['citation_other'] = $this->input->post('otherCitation');
			}
			if (!empty($this->input->post('order_status'))) {
				$data['order_status'] = $this->input->post('order_status');
				$data['order_status_marketing_leads'] = $this->input->post('order_status');
			}
			if (!empty($this->input->post('comment'))) {
				$data['description'] = $this->input->post('comment');
			}
			if (isset($_POST['NumberSources'])) {
				$data['name_of_sources'] = $this->input->post('NumberSources');
			}

			if (!empty($this->input->post('title'))) {
				$data['title'] = $this->input->post('title');
			}
			if (!empty($this->input->post('email'))) {
				$data['user_email'] = $this->input->post('email');
			}
			if (!empty($this->input->post('lead_id'))) {
				$data['lead_id'] = $this->input->post('lead_id');
			}

			if (!empty($this->input->post('quotedPrice'))) {
				$data['quoted_price'] = $this->input->post('quotedPrice');
				if ($this->input->post('is_full_pay') == 0) {
					$qp= $this->input->post('quotedPrice');
					$data['quoted_price'] = $qp/2;  // half payment
				}
			}
			if (!empty($this->input->post('paid_price'))) {
				$data['paid_price']  = number_format($this->input->post('paid_price'), 2);
				$data['paid_price'] = str_replace(',', '', $data['paid_price']);
			}
			if (!empty($this->input->post('paid_in'))) {
				$data['paid_in'] = $this->input->post('paid_in');
			}
			if ($this->input->post('is_full_pay') == 1) {
				$data['payment_type'] = '1';
			}
			if ($this->input->post('is_full_pay') == 0) {
				$data['payment_type'] = '0';
			}


			if (!empty($this->input->post('phone'))) {
				$data['user_phone'] = $this->input->post('phone');
			}

			if (!empty($this->input->post('academicLevel'))) {
				$data['academic_level'] = $this->input->post('academicLevel');
			}
			if (!empty($this->input->post('duedate'))) {
				$data['due_date'] = $this->input->post('duedate');
			}
			if (!empty($this->input->post('duetime'))) {
				$data['lead_due_time'] = $this->input->post('duetime');
			}

			if (!empty($this->input->post('no_of_page'))) {
				$data['no_of_pages'] = $this->input->post('no_of_page');
			}
			$check = $this->common_model->select_where_table_rows('user_phone', 'orders', array('order_status !=' => 0, 'order_from' => returnSlug(), 'user_phone' => $data['user_phone']));
			if ($check > 0) {
				$data['user_type'] = 1;
			}
			$data['createdAt'] = date('Y-m-d H:i:s');
			date_default_timezone_set("US/Pacific");
			$data['filterDate'] = date('Y-m-d');
			date_default_timezone_set("Asia/Karachi");
			$data['pakFilter'] = date('Y-m-d');

			$data['order_from'] = returnSlug();

			$lead_id = $this->input->post('lead_id');
			$data['domain_name'] = getDomain();
			$data['type'] = 1;

			// echo "<pre>";print_r($data);die;


			$email = $this->input->post('email');

			$usernme = $this->input->post('name');
			// $rnd_password = $this->randomPassword();
			$password = str_replace(' ', '', ucwords($usernme));
			$rnd_password = $password . '123';
			$phone = $this->input->post('phone');
			$order_id = $this->input->post('order_id');


			if ($order_id == 0) {

				$this->db->insert('orders', $data);
				$id = $this->db->insert_id();
				$allToInsertFiles = true;
				$this->sendNotification($id, getDomain(), 1);
			} else {

				$this->db->where('order_id', $order_id)->update('orders', $data);
				$id = $order_id;
				$allToInsertFiles = true;
			}

			if ($id) {
				$myfile_lists = $this->input->post('myf');
				$getClientFiles = explode(',', $myfile_lists);
				if ($myfile_lists != '') {
					$this->common_model->delete_where(array('order_id' => $order_id), 'order_files');
					foreach ($getClientFiles as $value) {
						// $filename = $value;
						$filename = str_replace(' ', '_', $value);
						$imagesFiles[] = array(
							'file_source'	=>	base_url("assets/documents/") . $filename,
							'order_id'	=> $id
						);
						$imagesFilesShow[] = $filename;
					}
					$this->db->insert_batch('order_files', $imagesFiles);
					//END

				}

				$checkAccount = $this->createAccountOrLogin($email, $usernme, $rnd_password, $phone);
				$data['user_id'] = $this->session->userdata('id');
				echo json_encode(['success' => "success", 'orderID' => $id, 'uploadedFiles' => $imagesFilesShow, 'checkAccount' => $checkAccount]);
			} else {
				echo json_encode(['error' => "error", 'message' => 'Something went wrong.']);
			}

			//echo json_encode(['success'=>'Record added successfully.']);
		}
	}
	public function createAccountOrLogin($email, $name, $password, $phone)
	{
		$rnd_password = $password;

		$data['user_name'] = $name;
		$data['user_password'] = md5($password);
		$data['user_coantact'] = $phone;
		$data['user_email'] = $email;
		$data['domain_type'] = returnSlug();
		$data['created_at'] = date('Y-m-d H:i:s');



		// $data['status'] = 1;
		$check_email_exist = $this->common_model->select_where_return_row('*', 'users', array('user_email' => $data['user_email'], 'domain_type' => returnSlug()));

		if ($check_email_exist) {

			$check = $this->login($check_email_exist->user_email, $check_email_exist->user_password);

			return 0;
		} else {
			$user_id = $this->common_model->insert_array('users', $data);
			if ($user_id != '') {

				$this->sendmail($email, $name, $rnd_password);
				$getUser = $this->common_model->select_where_return_row('*', 'users', array('user_id' => $user_id));
				$check = $this->login($getUser->user_email, $getUser->user_password);

				return 1;
			}
		}
	}

	public function returnSlug()
	{
		if ($_SERVER['HTTP_HOST'] == "localhost") {
			$slug = 'AHT';
		} else {
			$slug = getWebinfo()->slug;
		}

		return $slug;
	}
	public function login($email, $password)
	{

		$query = $this->Adminmodel->loginUser($email, $password);
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$this->session->set_userdata('id', $row->user_id);
			$this->session->set_userdata('username', $row->user_name);

			if ($this->session->userdata('userId') != '') {
				return 1;
			} else {
				return 0;
			}
		}
	}

	function randomPassword()
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	public function checkEmailStatus()
	{
		$email = $this->input->post('email');
		if (!empty($email)) {

			$query = $this->db->query('SELECT * FROM users WHERE user_email="' . $email . '" AND domain_type = "AHT"');
			$user = $query->row_array();
			if (!empty($user)) {
				echo json_encode(['status' => "success", 'data' => 'exist']);
			} else {
				echo json_encode(['status' => "success", 'data' => 'not-exist']);
			}
		}
	}

	public function userRegister()
	{
		$data['title'] = 'Register Account | Tefsal';
		$data['page_name'] = 'SignUp';
		$var['content'] = $this->load->view('frontend/users/register', $data, true);
		$this->load->view('frontend/template2021', $var);
	}

	function random_password()
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$password = array();
		$alpha_length = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alpha_length);
			$password[] = $alphabet[$n];
		}
		return implode($password);
	}

	function checkDateFormat($due_date)
	{

		if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $due_date)) {
			if (checkdate(substr($due_date, 5, 2), substr($due_date, 8, 2), substr($due_date, 0, 4)))
				return true;
			else

				return false;
		} else {

			return false;
		}
	}
}
