<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userportal extends MY_Controller
{

	public $slug;


	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_id') == '') {

			redirect('login');
		}

		//$this->load->model('Adminmodel');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->userRole = 'User';
		$this->userTable = 'users';
		$this->siteLink = $_SERVER['SERVER_NAME'];
		$this->slug = returnSlug();
	}

	public function revision_request()
	{
		$config = [

			'upload_path' => './user_uploads/',

			'allowed_types' => 'jpeg|jpg|png|doc|docx|pdf|xls|zip|xlsx',

		];

		$this->load->library('upload', $config);
		$this->load->model('insertmodel');
		$post = $this->input->post();
		$explode = explode("-", $post['order_id']);
		$order_id = $explode[0];
		$post['order_id'] = $explode[0];
		$post['writer_id'] = $explode[1];
		$post['created_by'] = $this->session->userdata('user_id');
		$check_revision = $this->common_model->select_where_return_row('*', 'orders', array('order_id'=>$post['order_id'], 'is_revision'=>1));
		if(!$check_revision){
		date_default_timezone_set("America/Los_Angeles");
		$post['created_at'] = date('Y-m-d H:i:s');
		if (!empty($_FILES['revision_file']['name'])) {
			if ($this->upload->do_upload('revision_file')) {
				$data = $this->upload->data();
				$file_path = base_url("user_uploads/" . $data['raw_name'] . $data['file_ext']);
				$post['revision_file'] = $file_path;


				$insertOrder = $this->insertmodel->insertRevision($post);
				if ($insertOrder) {
					$update = $this->common_model->update_array(array('order_id' => $order_id), 'orders', array('is_revision' => 1));
					$this->session->set_flashdata('success', 'Revision placed successfully. We will get in touch with you shortly');
					$this->sendNotification($order_id, getDomain(), 3);
					redirect("req-revision");
				} else {
					$this->session->set_flashdata('error', 'There is an error while submiting your revision');
					redirect("req-revision");
				}
			} else {

				$upload_error = $this->upload->display_errors();

				$this->session->set_flashdata('error', "$upload_error");

				redirect('req-revision');
			}
		} else {
			$insertOrder = $this->insertmodel->insertRevision($post);
			$update = $this->common_model->update_array(array('order_id' => $order_id), 'orders', array('is_revision' => 1));
			if ($insertOrder) {
				$this->session->set_flashdata('success', 'Revision placed successfully. We will get in touch with you shortly');
				$this->sendNotification($order_id, getDomain(), 3);
				redirect("req-revision");
			} else {
				$this->session->set_flashdata('error', 'There is an error while submiting your revision');
				redirect("req-revision");
			}
		}
		}else {
			$this->session->set_flashdata('error', 'Revision already marked against Order ID '.$check_revision->order_from.'-'.$post['order_id']);
			redirect("req-revision");
		}
	}
	public function invalidRevision()
	{

		$email = $this->session->userdata('email');
		$domain_name = getDomain();
		// echo '<pre>'; print_r($domain_name);exit;	
		$data = $this->common_model->join_two_tab_where('*', 'orders o', 'revisions r', 'r.order_id=o.order_id', 'right', array('domain_name' => $domain_name, 'user_email' => $email, 'status' => 2, 'show_to_user' => 1, 'order_from' => $this->slug), 'o.order_id', 'DESC');
		// echo '<pre>'; print_r($data);exit;	
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/invalid_revision', ["orders" => $data]);
		$this->load->view('userPortal/footer');
	}
	public function req_revision()
	{
		//  $data = $this->common_model->select_where('*', 'orders', array('order_status' => 2));
		$user_id = $this->session->userdata('userId');

		$email = $this->session->userdata('email');

		$domain_name = getDomain();
		$data = $this->common_model->join_two_tab_where_groupby('*', 'orders o', 'assign_order a', 'o.order_id=a.order_id', 'left', array('order_status' => 3, 'is_submitted' => 1, 'payment_type' => 1, 'domain_name' => $domain_name, 'user_email' => $email, 'order_from' => $this->slug, 'a.writer_id !=' => 0), 'o.order_id', 'a.id', 'DESC')->result();
		// echo '<pre>'; print_r($data);exit;
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/req-revision', ["orders" => $data]);
		$this->load->view('userPortal/footer');
	}
	public function revised_work()
	{
		//  $data = $this->common_model->select_where('*', 'orders', array('order_status' => 2));
		$email = $this->session->userdata('email');

		$domain_name = getDomain();
		$data = $this->common_model->join_three_tab_where('*', 'orders o', 'revisions r', 'r.order_id=o.order_id', 'revised_work_files rwf', 'r.revision_id=rwf.revision_id', 'right', array('domain_name' => $domain_name, 'user_email' => $email, 'status' => 5, 'is_rev_submitted' => 1, 'order_from' => $this->slug), 'o.order_id', 'DESC');
		// echo '<pre>'; print_r($data);exit;	
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/revised-work', ["orders" => $data]);
		$this->load->view('userPortal/footer');
	}
	public function check_progress()
	{
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/check-progress');
		$this->load->view('userPortal/footer');
	}
	public function download_work()
	{
		$this->load->model('fetchmodel');
		$data = $this->fetchmodel->fetchDownloadWork();
		$currences = get_currency_rate();
		// $data2 = $this->fetchmodel->fetchOrderFiles();
		// echo '<pre>';print_r($data);exit;
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/download-work', ["downloadWork" => $data, 'currences'=>$currences]);
		$this->load->view('userPortal/footer');
	}

	public function download_notification()
	{
		$order_id = $_POST['order_id'];
		$check = $_POST['check'];
		$array = array('is_work_downloaded' => 1);

		if ($check == 1) {
			$status = $this->common_model->update_array(array('revision_id' => $order_id), 'revisions', $array);
		} else {
			$status = $this->common_model->update_array(array('order_id' => $order_id), 'submission_files', $array);
		}
		if ($status) {
			// $arr = array("msg" => "success");
			// echo json_encode($arr);
			echo 1;
		}
	}

	public function dashboard()
	{

		$this->load->model('fetchmodel');
		$data = $this->fetchmodel->fetchOrders();
		$data2 = $this->fetchmodel->fetchOrderFiles();
		$currences = get_currency_rate();
		// echo '<pre>'; print_r($data);exit;
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/dashboard', ["orders" => $data, "files" => $data2, 'currences'=>$currences]);
		$this->load->view('userPortal/footer');
	}

	public function profile()
	{
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/profile');
		$this->load->view('userPortal/footer');
	}

	public function editProfile()
	{

		$this->form_validation->set_rules('user_password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[user_password]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run()) {
			$post = $this->input->post();
			$post['user_password'] = md5($this->input->post('user_password'));
			unset($post['confirm_password']);
			$this->load->model('updatemodel');
			$password = $this->updatemodel->updateProfile($post);
			if ($password) {
				$this->session->set_flashdata('success', 'Your Password Updated Successfully');
				redirect("profile");
			} else {
				$this->session->set_flashdata('error', 'An error occurred while updating your password.');
				redirect("profile");
			}
		} else {
			$this->session->set_flashdata('error', 'An error occurred while updating your password.');
			redirect("profile");
		}
	}
	function userFeedback($order_id=''){
		$this->load->model('fetchmodel');
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$post= $this->input->post();
			$explode = explode("-", $post['order_id']);
			$order_id = $explode[0];
			$post['order_id'] = $explode[0];
			$post['writer_id'] = $explode[1];
			$post['user_id'] = $this->session->userdata('user_id');
			
			$check_feedback=$this->common_model->select_where_return_row('*', 'client_feedback', array('order_id' => $order_id));
			if(isset($check_feedback)){
				$status= $this->common_model->update_array(array('feedback_id' => $check_feedback->feedback_id), 'client_feedback', $post);
			}
			else {
				$status=$this->common_model->insert_array('client_feedback', $post);
			}
			if($status){
					$this->session->set_flashdata('success', 'Thanks for your feedback');
					$slug=returnSlug(getDomain());
					$notification_body='Client Give his Feedback for order id '.$slug.'-'.$order_id;
					$redrict_url='https://admins.writersplanet.net/client-feedback';
					$this->customNotification($order_id, $redrict_url, 'Client Feedback', $notification_body, 1);
					// $this->sendNotification($order_id, getDomain(), 4);
				redirect("dashboard");
			}
		}
		$email = $this->session->userdata('email');
		$domain_name = getDomain();
		$data = $this->common_model->join_two_tab_where_groupby('*', 'orders o', 'assign_order a', 'o.order_id=a.order_id', 'left', array('order_status' => 3, 'is_submitted' => 1, 'payment_type' => 1, 'domain_name' => $domain_name, 'user_email' => $email, 'order_from' => $this->slug, 'a.writer_id !=' => 0), 'o.order_id', 'a.id', 'DESC')->result();
		$order_id = decode($order_id);
		$check_feedback=$this->common_model->select_where_return_row('*', 'client_feedback', array('order_id' => $order_id));
		$this->load->view('userPortal/header');
		$this->load->view('userPortal/user-feedback', ["orders" => $data,'feedback'=>$check_feedback, 'orderId'=>$order_id]);
		$this->load->view('userPortal/footer');
	}
	function insertToken()
	{
		$token = $this->input->post('token_id');
		$user_id=$this->session->userdata('user_id');
		$array['token_id'] = $token;
		$array['user_id'] = $user_id;
		$array['user_type'] = 3;
		$array2 = array();
		// print_r($array);die;
		$tokens = $this->common_model->select_where('*', 'user_notifications',  array('user_id' => $user_id));
		$status = '';
		foreach ($tokens as $key) {
			$array2[] = $key->token_id;
		}
		if (in_array($token, $array2)) {
		} else {
			$status = $this->common_model->insert_array('user_notifications', $array);
		}

		if ($status) {
			echo 'Token inserted';
		} else {
			echo 'Token not inserted';
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
