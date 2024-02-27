<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends My_Controller
{


	function __construct()
	{
		parent::__construct();

		$this->load->helper('date');
		$this->load->model('Adminmodel');
		$this->load->library('encryption');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['page_name'] = 'Home';

		$var['content'] = $this->load->view('frontend/users/login', $data, true);
		$this->load->view('frontend/template2021', $var);
	}

	public function dashboard()
	{
		user_auth();
		$data['title'] = 'Dashboard';
		$data['page_name'] = 'Dashboard';
		$data['states'] = $this->common_model->select_where('*', 'states', array('status' => 1));
		$user_id = $this->session->userdata('id');
		$data['user'] = $this->common_model->select_where_return_row('*', 'users', array('status' => 1, 'user_id' => $user_id));
		$data['user_addresses'] = $this->common_model->select_where('*', 'user_addresses', array('status' => 1, 'user_id' => $user_id));
		$data['orders'] = $this->common_model->select_where('*', 'orders', array('user_id' => $user_id, 'payment_status' => 'PAID'));
		$data['dependents'] = $this->common_model->select_where('*', 'dependents', array('user_id' => $user_id));
		$data['owner_name'] = $this->common_model->select_single_field('username', 'users', array('user_id' => $user_id));

		$var['content'] = $this->load->view('frontend/users/dashboard', $data, true);
		$this->load->view('frontend/template2021', $var);
	}


	public function userRegister()
	{
		$data['title'] = 'Register Account';
		$data['page_name'] = 'SignUp';
		$var['content'] = $this->load->view('frontend/users/register', $data, true);
		$this->load->view('frontend/template2021', $var);
	}

	public function createAccount()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === FALSE) {

			$data['title'] = 'Register Account';
			$data['page_name'] = 'SignUp';
			$var['content'] = $this->load->view('frontend/users/register', $data, true);
			$this->load->view('frontend/template2021', $var);
		} else {

			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['phone'] = $this->input->post('phone');
			$data['email'] = $this->input->post('email');
			$data['status'] = 1;
			$check_email_exist = $this->common_model->select_where_return_row('*', 'users', array('email' => $data['email']));

			if ($check_email_exist) {
				$this->session->set_flashdata('msg_register', 'email Already Exist');
				redirect('sign-up');
			} else {
				$user_id = $this->common_model->insert_array('users', $data);
				if ($user_id != '') {
					$this->session->set_flashdata('msg', 'Successfully Registered! Please Login here.');
					redirect('login');
				}
			}
		}
	}


	public function login()
	{

		$this->form_validation->set_rules('user_name', 'user_name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() === FALSE) {

			$data['title'] = 'Login Page';
			$data['page_name'] = 'Login Page';

			$var['content'] = $this->load->view('portal/users/login', $data, true);
			$this->load->view('portal/template2021', $var);
		} else {

			$username = $this->input->post('user_name');
			$password = md5($this->input->post('password'));
			$remember = $this->input->post('remember_me');

			if ($remember != '') {
				set_cookie("cookename", $username, time() + 60 * 60 * 24 * 14);
				set_cookie("cookepass", $this->input->post('password'), time() + 60 * 60 * 24 * 14);
				set_cookie("remeber", 1, time() + 60 * 60 * 24 * 14);
			} else {
				delete_cookie('cookename');
				delete_cookie('cookepass');
				delete_cookie('remeber');
			}
			$query = $this->Adminmodel->loginUser($username, $password);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata('user_id', $row->user_id);
				$this->session->set_userdata('user_name', $row->user_name);
				$this->session->set_userdata('email', $row->user_email);
				$this->session->set_userdata('phone', $row->user_coantact);

				//End For Saving Cart Data On Login
				redirect('dashboard');
			} else {
				$this->session->set_userdata('msg', 'Username Or Password is wrong!');
				redirect('login');
			}
		}
	}
	function login_link($token){

		$login_token=$this->common_model->select_where_return_row('*', 'login_token', array('token' => $token));
		if($login_token){
			$user=$this->common_model->select_where_return_row('*', 'users', array('user_id' => $login_token->user_id));
			if ($user) {
				$this->session->set_userdata('user_id', $user->user_id);
				$this->session->set_userdata('user_name', $user->user_name);
				$this->session->set_userdata('email', $user->user_email);
				$this->session->set_userdata('phone', $user->user_coantact);
				//End For Saving Cart Data On Login
				if($login_token->redirect_link)
				{
					redirect($login_token->redirect_link);
				} else {
					redirect('dashboard');
				}
			} 
			else {
				$this->session->set_userdata('msg', 'Enter Email and password for login!');
				redirect('login');
			}
		} else {
			$this->session->set_userdata('msg', 'Enter Email and password for login!');
			redirect('login');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('user_id');
		$this->session->set_userdata('is_login', '');
		redirect(site_url());
	}

	function deleteAddress()
	{
		$address_id = $this->uri->segment(2);
		$user_id = $this->session->userdata('id');
		$this->common_model->delete_where(array('address_id' => $address_id, 'user_id' => $user_id), 'user_addresses');
		$this->session->set_flashdata('msg_address', '<strong>Success: Address Deleted Successfully.</strong>');
		redirect('my-profile');
	}

	function updateProfile()
	{

		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$user_id = $this->session->userdata('id');

		$is_updated = $this->common_model->update_array(array('user_id' => $user_id), ' users', $data);

		if ($is_updated) {
			$this->session->set_flashdata('msg_address', '<strong>Success: Profile Updated Successfully.</strong>');
			redirect('my-profile');
		} else {
			$this->session->set_flashdata('msg_address', '<strong>Error: Not Updated.</strong>');
			redirect('my-profile');
		}
	}
	function changePassword()
	{
		$old_password = md5($this->input->post('old_password'));
		$new_password = md5($this->input->post('new_password'));
		$user_id = $this->session->userdata('id');

		$check_pass_exist = $this->common_model->select_where_return_row('*', 'users', array('password' => $old_password, 'user_id' => $user_id, 'status' => 1));
		if ($check_pass_exist) {
			$data['password'] = $new_password;
			$is_updated = $this->common_model->update_array(array('user_id' => $user_id), ' users', $data);
			if ($is_updated) {
				$this->session->set_flashdata('msg_address', '<strong>Success: Password Updated Successfully.</strong>');
				redirect('my-profile');
			} else {
				$this->session->set_flashdata('msg_address', '<strong>Error: Not Updated Something Went Wrong.</strong>');
				redirect('my-profile');
			}
		} else {
			$this->session->set_flashdata('msg_address', '<strong>Error: Old Password Not Matched!.</strong>');
			redirect('my-profile');
		}
	}

	//STEP 1
	public function forgotPassword()
	{
		if ($_SERVER['REQUEST_METHOD']  == 'POST') {
			$this->form_validation->set_rules('reset_email', 'Email', 'required|valid_email');
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			if ($this->form_validation->run() == TRUE) {
				$email = $this->input->post('reset_email');
				$validEmail =  $this->common_model->select_where_return_row('*', 'users', array('user_email' => $email));
				if ($validEmail != false) {
					$row = $validEmail;
					$user_id = $row->user_id;
					$string = time() . $user_id . $email;
					$hash_string = hash('sha256', $string);
					/*$current_date = date("Y-m-d H:i");
				$hash_expiry = date("Y-m-d H:i", strtotime($current_date, ' 1 Days'));*/
					$hash_expiry = date("U") + 1800;
					$data = array(
						'hash_key' => $hash_string,
						'hash_expiry' => $hash_expiry
					);

					$resetLink = base_url() . 'reset-password?hash=' . $hash_string;
					$body = '<p>Your reset password Link is here</p>' . $resetLink;

					if (!$this->sendForgotPasswordMail($email, $body)) {
						echo $this->sendForgotPasswordMail($email, $body);
						echo 'Message could not be sent. Mailer Error:';
						exit;
					} else {
						$this->common_model->update_array(array('user_email' => $email), 'users', $data);
						$this->session->set_flashdata('success', 'Reset password link successfully sent');
						redirect('forgot-password');
					}
				} else {
					$this->session->set_flashdata('error', 'This Email is not Registered with us');
					redirect('forgot-password');
				}
			} else {
				$data['title'] = 'Forgot Password';
				$data['page_name'] = 'Forgot Password';

				$var['content'] = $this->load->view('frontend/users/forgot_password', $data, true);
				$this->load->view('frontend/template2021', $var);
			}
		} else {
			$data['title'] = 'Forgot Password';
			$data['page_name'] = 'Forgot Password';

			$var['content'] = $this->load->view('frontend/users/forgot_password', $data, true);
			$this->load->view('frontend/template2021', $var);
		}
	}
	function sendForgotPasswordMail($to_email, $body)
	{
		$from_email = "no-reply@gograders.com";
		$config = array();
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'host',
			'smtp_port' => 25,
			'smtp_user' => 'no-reply@gograders.com',
			'smtp_pass' => 'Password',
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'wordwrap' => TRUE
		);

		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$this->email->from($from_email, 'gograders.com');
		$this->email->to($to_email);
		$this->email->subject('Forgot Password');
		$this->email->message($body);
		if ($this->email->send()) {
			return 1;
		} else {
			return 0;
		}
	}
	function resetPassword(){
		if($this->input->get('hash')){
			$hash = $this->input->get('hash');
			
			$getHash = $this->common_model->select_where_return_row('*', 'users', array('hash_key' => $hash));
			if($getHash != false){
			  $hash_expiry = $getHash->hash_expiry;
			  $current_date = date("U");
			  if($current_date <= $hash_expiry){
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
				  $this->form_validation->set_rules('password', 'Password', 'required');
				  $this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[password]');
				  $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
					if($this->form_validation->run() == TRUE){
					  $new_password = md5($this->input->post('password'));
					  $result = $this->common_model->update_array(array('hash_key' => $hash), 'users', array('user_password' => $new_password));
					  if($result != false){
						$this->session->set_flashdata('success', 'Password updated successfully');
						redirect('login');
					  }else{
		
					  }
					}else{
						$data['title'] = 'Reset Password';
						$data['page_name'] = 'Reset Password';
						$data['hash'] = $hash;
						$var['content'] = $this->load->view('frontend/users/reset-password', $data, true);
						$this->load->view('frontend/template2021', $var);
					}
				}else {
					$data['title'] = 'Reset Password';
					$data['page_name'] = 'Reset Password';
					$data['hash'] = $hash;
					$var['content'] = $this->load->view('frontend/users/reset-password', $data, true);
					$this->load->view('frontend/template2021', $var);
				}
			  }else{
				$this->session->set_flashdata('error', 'Link is expired');
				redirect('forgot-password');
			  }
			}else {
			  echo 'invalid details';exit;
			}
		  }else{
			redirect('forgot-password');
		  }
	}
	public function send_forgot_password_email()
	{
		$this->form_validation->set_rules('reset_email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {
			$resultUser = $this->common_model->select_where_return_row('*', 'users', array('email' => html_escape($this->input->post('reset_email'))));
			if (!$resultUser) {
				$responsedata['msg'] = INVALID_EMAIL;
				$responsedata['status'] = 0;
			} else {
				$updateData['userPasswordResetToken'] = encode(time());
				$link = base_url() . 'reset-password/' . encode($resultUser->email) . '/' . $updateData['userPasswordResetToken'];
				$emailData = array(
					'email' => $resultUser->email, 'username' => ucwords($resultUser->username), 'subject' => 'Password Reset Link',
					'link' => $link, 'stuff_is' => 'reset'
				);

				if ($this->emailFunction('reset_password', $emailData)) {

					$this->common_model->update_array(array('user_id' => $resultUser->user_id), 'users', $updateData);
					$responsedata['msg'] = "Email sent. Please check your inbox for further instructions.";
					$responsedata['status'] = 1;
				} else {
					$responsedata['msg'] = "Email sending failed. Please try again later.";
					$responsedata['status'] = 0;
				}
			}
		}
		echo json_encode($responsedata);
	}


	public function show_password_reset()
	{

		$email = ($this->uri->segment(2));
		$token = $this->uri->segment(3);
		$data['resultUser'] = $this->common_model->select_where_return_row('*', 'users', array('email' => decode($email), 'userPasswordResetToken' => $token));
		$data['title'] = 'Recover Password';
		$data['page_name'] = 'Recover Password';

		$var['content'] = $this->load->view('frontend/users/recover_password', $data, true);
		$this->load->view('frontend/template2021', $var);
	}


	public function update_forgot_password()
	{
		$this->form_validation->set_rules('token', 'Token', 'trim|required', array('required' => INVALID_REQUEST));
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules(
			'confirm_password',
			'Confirm Password',
			'trim|required|matches[password]',
			array('matches' => 'Password does not match.')
		);

		if ($this->form_validation->run() == FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {
			$userId = decode(html_escape($this->input->post('token')));
			$resultUser = $this->common_model->select_where_return_row('*', 'users', array('user_id' => $userId));

			if (!$resultUser) {
				$responsedata['msg'] = INVALID_REQUEST;
				$responsedata['status'] = 0;
			} else {
				$upddata['userPasswordResetToken'] = '';
				$upddata['password'] = md5($this->input->post('password'));
				$status = $this->common_model->update_array_check(array('user_id' => $resultUser->user_id), ' users', $upddata);

				if ($status == true) {
					$responsedata['msg'] = 'Password Updated Successfully!';
					$responsedata['status'] = 1;
				} else {
					$responsedata['msg'] = 'Password Not Updated';
					$responsedata['status'] = 0;
				}
			}
		}
		echo json_encode($responsedata);
	}

	public function sendContactInfo()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		if ($this->form_validation->run() == FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {
			$emailData = array(
				'name' => $name, 'email' => $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message,
				'stuff_is' => 'contact'
			);
			if ($this->emailFunction('contact_template', $emailData)) {
				$responsedata['msg'] = "Email sent. Please check your inbox for further instructions.";
				$responsedata['status'] = 1;
			} else {
				$responsedata['msg'] = "Email sending failed. Please try again later.";
				$responsedata['status'] = 0;
			}
		}
		echo json_encode($responsedata);
	}


	//	Login From Modal

	public function loginModal()
	{
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$remember = $this->input->post('remember_me');

			if ($remember != '') {
				set_cookie("cookename", $email, time() + 60 * 60 * 24 * 14);
				set_cookie("cookepass", $password, time() + 60 * 60 * 24 * 14);
				set_cookie("remeber", 1, time() + 60 * 60 * 24 * 14);
			} else {
				delete_cookie('cookename');
				delete_cookie('cookepass');
				delete_cookie('remeber');
			}
			$query = $this->Adminmodel->loginUser($email, $password);

			if ($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata('id', $row->user_id);
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('is_login', 'loginbymodal');
				$responsedata['status'] = 1;
				$responsedata['msg'] = "Logged In";
				$getDependents = array();

				//				Getting Dependents
				$user_addresses = $this->common_model->select_where('*', 'user_addresses', array('status' => 1, 'user_id' => $row->user_id));
				$totalAdresses = $user_addresses->num_rows();
				$dependentsList = $this->common_model->select_where('*', 'dependents', array('user_id' => $row->user_id));

				foreach ($dependentsList->result() as $dependent) {
					$getDependents[] = $dependent;
				}
				$getAddresses = array();
				foreach ($user_addresses->result() as $user_address) {
					$getAddresses[] = $user_address;
				}
				$responsedata['dependents'] = $getDependents;
				$responsedata['user_addresses'] = $getAddresses;
				$responsedata['have_addresses'] = $totalAdresses;
			} else {
				$responsedata['msg'] = "Email Or Password is wrong!";
				$responsedata['status'] = 0;
			}
		}
		echo json_encode($responsedata);
	}

	public function createAccountByModal()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {

			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['phone'] = $this->input->post('phone');
			$data['email'] = $this->input->post('email');
			$email = $data['email'];
			$password = $data['password'];

			$data['status'] = 1;
			$check_email_exist = $this->common_model->select_where_return_row('*', 'users', array('email' => $data['email']));

			if ($check_email_exist) {
				$responsedata['status'] = 0;
				$responsedata['msg'] = "Email Already Exist";
			} else {
				$user_id = $this->common_model->insert_array('users', $data);
				$check_user = $this->common_model->select_where_return_row('*', 'users', array('user_id' => $user_id));

				if ($check_user->user_id != '') {
					$this->session->set_userdata('id', $check_user->user_id);
					$this->session->set_userdata('username', $check_user->username);

					$responsedata['status'] = 1;
					$responsedata['msg'] = "Successfully Registered! Please Login";

					//	Getting Dependents
					$getDependents = array();
					$user_addresses = $this->common_model->select_where('*', 'user_addresses', array('status' => 1, 'user_id' => $check_user->user_id));
					$totalAdresses = $user_addresses->num_rows();
					$dependentsList = $this->common_model->select_where('*', 'dependents', array('user_id' => $check_user->user_id));
					foreach ($dependentsList->result() as $dependent) {
						$getDependents[] = $dependent;
					}
					$getAddresses = array();
					foreach ($user_addresses->result() as $user_address) {
						$getAddresses[] = $user_address;
					}

					$responsedata['dependents'] = $getDependents;
					$responsedata['user_addresses'] = $getAddresses;
					$responsedata['have_addresses'] = $totalAdresses;
				}
			}
		}
		echo json_encode($responsedata);
	}

	function add_addressWizard()
	{

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('block', 'Block', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('apartment', 'Apartment', 'required');
		$this->form_validation->set_rules('area', 'Area', 'required');

		$data['title'] = $this->input->post('title');
		$data['state'] = $this->input->post('state');
		$data['block'] = $this->input->post('block');
		$data['street'] = $this->input->post('street');
		$data['apartment'] = $this->input->post('apartment');
		$data['area'] = $this->input->post('area');
		$data['building'] = $this->input->post('building');
		$data['is_selected'] = 0;
		$data['user_id'] = $this->session->userdata('id');

		$address_array = array();

		if ($this->form_validation->run() === FALSE) {
			$responsedata['errors'] = validation_errors();
			$responsedata['status'] = 'fromErrors';
		} else {
			$data['status'] = 1;
			$data['dateadded'] = time();

			$ret_id = $this->common_model->insert_array('user_addresses', $data);
			$addressObj = $this->common_model->select_where_return_row('*', 'user_addresses', array('address_id' => $ret_id));

			$responsedata['address_id'] = $addressObj->address_id;
			$responsedata['user_id'] = $addressObj->user_id;
			$responsedata['title'] = $addressObj->title;
			$responsedata['state'] = $addressObj->state;
			$responsedata['block'] = $addressObj->block;
			$responsedata['street'] = $addressObj->street;
			$responsedata['apartment'] = $addressObj->apartment;
			$responsedata['building'] = $addressObj->building;
			$responsedata['area'] = $addressObj->area;

			if ($ret_id != '') {
				$responsedata['status'] = 1;
				$responsedata['msg'] = "Address Added successfully";
			} else {
				$responsedata['status'] = 0;
				$responsedata['msg'] = "Address Not Added";
			}
		}
		echo json_encode($responsedata);
	}

	function showSelectedAddress($address_id)
	{
		$check_address_exist = $this->common_model->select_where_return_row('*', 'user_addresses', array('address_id' => $address_id));
		if ($check_address_exist) {
			$responsedata = $check_address_exist;
		} else {
			$responsedata = null;
		}
		echo json_encode($responsedata);
	}
}
