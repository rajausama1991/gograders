<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/stripe-php/init.php';
class Payment extends MY_Controller

{

	function __construct()

	{
		parent::__construct();

		$this->load->helper('date');
		$this->load->model('Adminmodel');
	}

	/*********************** Payment and Saving order Data in DB ***************/



	function index()
	{

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$post = $this->input->post();
			$full_pay = $this->input->post('is_full_pay');
			if (!empty($this->input->post('total'))) {
				$data['order_price'] = $this->input->post('total');
			}
			if ($full_pay == 1) {
				$data['order_status'] = 0;
				$data['payment_status'] = 1;
			} else {
				$data['order_status'] = 0;
				$data['payment_status'] = 0;
			}
			if ($this->input->post('project_subject') == 'Other') {
				$data['subject'] = $this->input->post('otherSubject');
			} else {
				$data['subject'] = $this->input->post('project_subject');
			}

			if ($this->input->post('documentType') == 'Other') {
				$data['client_document'] = $this->input->post('otherdocumentType');
			} else {
				$data['client_document'] = $this->input->post('documentType');
			}

			if (!empty($this->input->post('topic'))) {
				$data['title'] = $this->input->post('topic');
			}

			if (!empty($this->input->post('email'))) {

				$data['client_email'] = $this->input->post('email');
			}

			if (!empty($this->input->post('pages'))) {

				$data['no_of_pages'] = $this->input->post('pages');
			}

			$order_id = $this->input->post('order_id');
			$data2['topic'] = $this->input->post('topic');

			$data2['order_no'] = $order_id;
			$data2['doc_type'] = $data['client_document'];
			$data2['pages'] = $this->input->post('pages');
			$data2['Deadline'] = $this->input->post('DeadlineDate');
			$data2['subject'] = $data['subject'];
			$data2['price'] = $data['order_price'];
			$data2['email'] = $this->input->post('email');

			$data2['title'] = 'Payment';
			$data2['selected_currency'] = $this->input->post('selected_currency');
			$data2['page_name'] = 'Payment Form';
			$var['content'] = $this->load->view('portal/payment/payment_form', $data2, true);
			$this->load->view('portal/template2021', $var);
		} else {
			redirect(base_url());
		}
	}

	function googleCaptachStore()
	{
		// $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		$secret = $this->config->item('google_secret');



		$userIp = $this->input->ip_address();

		// 		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . trim($this->input->post('captcha')) . "&remoteip=" . $userIp;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if ($_SERVER['HTTP_HOST'] == "localhost") {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		}
		$output = curl_exec($ch);
		curl_close($ch);

		$status = json_decode($output, true);

		if ($status['success']) {
			$res = '1';
		} else {
			$res = '0';
		}

		echo $res;
	}
	public function check()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			// $recStatus = 1;
			$post = $this->input->post();

			if (!empty($_POST['stripeToken'])) {

				// die;
				if (!empty($post['order_no'])) {
					$data = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $_POST['order_no']));
					try {
						//get token, card and user info from the form
						$token = $_POST['stripeToken'];

						$name = $_POST['name'];
						if (empty($data->user_email)) {
							$email = '';
						} else {
							$email = $data->user_email;
						}


						$card_num = $_POST['card_num'];
						

						$card_cvc = $_POST['cvc'];

						$card_exp_month = $_POST['exp_month'];

						$card_exp_year = $_POST['exp_year'];
						\Stripe\Stripe::setApiKey($this->config->item('secret_key'));

						\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

						//add customer to stripe
						$customer = \Stripe\Customer::create(array(
							'email' => $email,
							'source' => $token
						));

						//item information
						// $itemName = $_POST['item_name'];
						//item information
						$itemNumber = $_POST['order_no'];
						$pr = number_format($_POST['price'], 2);
						$itemPrice = $pr * 100;
						$currency = $_POST['selected_currency'];

						//charge a credit or a debit card
						$charge = \Stripe\Charge::create(array(
							'amount' => $itemPrice,
							'currency' => $currency,
							'customer' => $customer->id,
							'description' => $itemNumber,
							'metadata' => array(
								'item_id' => $itemNumber
							)
						));
						//retrieve charge details

						$chargeJson = $charge->jsonSerialize();
						//check whether the charge is successful

						if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {

							//order details

							$amount = $chargeJson['amount'];

							$balance_transaction = $chargeJson['balance_transaction'];

							$currency = $chargeJson['currency'];

							$status = $chargeJson['status'];

							if ($status == 'succeeded') {
								$check = $this->common_model->select_where_table_rows('*', 'orders', array('user_phone' => $data->user_phone, 'order_status !=' => 0));

								if ($check >= 1) {
									$update['user_type'] = 1;
									$user_type = 1;
								} else {
									$update['user_type'] = 0;
									$user_type = 0;
								}
								$update['lead_status'] = 10;
								$update['payment_type'] = $data->payment_type;
								$isUpdated = $this->db->where('order_id', $itemNumber)->update('orders', array('order_status' => 1, 'payment_type' => $data->payment_type, 'user_type' => $user_type));
								$isUpdated = $this->db->where('lead_id', $data->lead_id)->update('leads', $update);
								$post = array();
								$post['comment_by'] = 25;
								$post['comment_type'] = 0;
								$post['lead_order_id'] = $data->lead_id;
								$post['comment'] = $data->order_from . '-' . $_POST['order_no'] . ' <span class="badge badge-info">Auto generated</span>';

								$this->general_model->addComment($post);

								$res = $this->send_order_mail($data);
								$this->sendNotification($itemNumber, getDomain(), 2);
								if ($res) {
									redirect('thank-you');
								} else {
									echo  "email not sent";
								}
							} else {

								$this->load->view('payment_error');
							}
						}
						// Use Stripe's library to make requests...

					} catch (\Stripe\Exception\CardException $e) {
						$error['error_message'] = $e->getError()->message;
						$this->load->view('errorpage', $error);
					} catch (\Stripe\Exception\RateLimitException $e) {
						// Too many requests made to the API too quickl
						$error['error_message'] = "Too Many Request";
						$this->load->view('errorpage', $error);
					} catch (\Stripe\Exception\InvalidRequestException $e) {

						// Invalid parameters were supplied to Stripe's API

						$error['error_message'] = "Invalid parameters were supplied to Stripe's API";
						$this->load->view('errorpage', $error);
					} catch (\Stripe\Exception\AuthenticationException $e) {

						// Authentication with Stripe's API failed

						// (maybe you changed API keys recently)

						$error['error_message'] = "Authentication with Stripe's API failed";
						$this->load->view('errorpage', $error);
					} catch (\Stripe\Exception\ApiConnectionException $e) {

						// Network communication with Stripe failed

						$error['error_message'] = "Network communication with Stripe failed";
						$this->load->view('errorpage', $error);
					} catch (\Stripe\Exception\ApiErrorException $e) {

						// Display a very generic error to the user, and maybe send

						$error['error_message'] = "Display a very generic error to the user";
						$this->load->view('errorpage', $error);

						// yourself an email
					} catch (Exception $e) {
						// Something else happened, completely unrelated to Stripe
						$error['error_message'] = 'Something else happened, completely unrelated to Stripe';
						$this->load->view('errorpage', $error);
					}
				} else {
					echo 'Your Order ID is not generated, Something went wrong please contact support team.';
				}
			} else {
				echo 'Something went wrong please contact support team.';
			}
		} else {
			redirect(base_url());
		}
	}
	function send_order_mail($postData)
	{

		$link = base_url() . 'login';

		if ($this->emailFunctionOrder('order_placed', $postData)) {
			return 1;
		} else {
			return 0;
		}
	}
	public function HalfPay()
	{
		\Stripe\Stripe::setApiKey($this->config->item('stripe_key'));
		\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
		// echo '<pre>'; print_r($_POST);exit;
		// If post data is not empty
		if (!empty($_POST['stripeToken'])) {
			$data = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $_POST['order_no']));
			// Retrieve stripe token, card and user info from the submitted form data

			try {
				$token  = $_POST['stripeToken'];
				$email = $data->user_email;
				// Unique order ID
				$orderID = $_POST['order_no'];
				$payment_type = $_POST['payment_type'];
				$paid_in = $_POST['paid_in'];

				// Add customer to stripe
				// $customer = $this->stripe_lib->addCustomer($email, $token);

				$customer = \Stripe\Customer::create(array(

					'email' => $email,
					'source' => $token

				));

				if ($customer) {
					// Charge a credit or a debit card
					// $charge = $this->stripe_lib->createCharge($customer->id, round($_POST['price'] * 100), $orderID);
					$charge = \Stripe\Charge::create(array(
						'amount' => round($_POST['paid_price'] * 100),
						'currency' => $paid_in,
						'customer' => $customer->id,
						'description' => $orderID,
						'metadata' => array(
						'item_id' => $orderID
						)
					));
					// echo '<pre>'; print_r($charge);exit;
					if ($charge) {
						// Check whether the charge is successful
						if ($charge['amount_refunded'] == 0 && empty($charge['failure_code']) && $charge['paid'] == 1 && $charge['captured'] == 1) {
							// Transaction details 
							$transactionID = $charge['balance_transaction'];
							$paidAmount = $charge['amount'];
							$paidAmount = ($paidAmount / 100);
							$paidCurrency = $charge['currency'];
							$payment_status = $charge['status'];
    						if ($payment_status == 'succeeded') {
								if ($payment_type == 1) {
									// $payment_type == 1 in case when user want to pay Unpaid order with Full payment Then Payment type will  change to one.  
									$isUpdated = $this->db->where('order_id', $orderID)->update('orders', array('order_status' => 1, 'payment_type' => 1, ));
									$data = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $orderID));
									$this->common_model->update_array(array('lead_id' => $data->lead_id), 'leads', array('payment_type' => 1, 'lead_status' => 10));
									$this->addPayentcomment($data->lead_id, $data->order_from, $orderID, '<span class="badge badge-success">Full Payment</span>');
								} elseif ($payment_type == 2) {
									// $payment_type== 2 in case when user want to pay Unpaid order with Half payment Then Payment type will  remain 0 
									$isUpdated = $this->db->where('order_id', $orderID)->update('orders', array('order_status' => 1,));
									$data = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $orderID));
									$this->common_model->update_array(array('lead_id' => $data->lead_id), 'leads', array('lead_status' => 10));
									$this->addPayentcomment($data->lead_id, $data->order_from, $orderID, '<span class="badge badge-danger">Half Payment</span>');
								} else {
									// $payment_type == 0 in case when user want to pay Alredy Half Paid Completed Order then  payment status change and Add double amount.  
									$isUpdated = $this->db->where('order_id', $orderID)->update('orders', array('order_status' => 3, 'payment_type' => 1, 'quoted_price' => $_POST['price'] * 2,'paid_price' => $_POST['paid_price'] * 2, 'is_submitted' => 0));
									$data = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $orderID));
									$this->common_model->update_array(array('lead_id' => $data->lead_id), 'leads', array('payment_type' => 1, 'quoted_price' => $_POST['price'] * 2,'paid_price' => $_POST['paid_price'] * 2));
									$this->addPayentcomment($data->lead_id, $data->order_from, $orderID, '<span class="badge badge-success">Half Payment</span>');
								}
								redirect('thank-you');
							} else {
								$error='Something went wrong';
								$this->load->view('errorpage', $error);
							}
						}
					}
				}
			} catch (\Stripe\Exception\CardException $e) {
				$error['error_message'] = $e->getError()->message;
				$this->load->view('errorpage', $error);
			} catch (\Stripe\Exception\RateLimitException $e) {
				// Too many requests made to the API too quickl
				$error['error_message'] = "Too Many Request";
				$this->load->view('errorpage', $error);
			} catch (\Stripe\Exception\InvalidRequestException $e) {
				// Invalid parameters were supplied to Stripe's API
				$error['error_message'] = "Invalid parameters were supplied to Stripe's API";
				$this->load->view('errorpage', $error);
			} catch (\Stripe\Exception\AuthenticationException $e) {
				// Authentication with Stripe's API failed
				// (maybe you changed API keys recently)
				$error['error_message'] = "Authentication with Stripe's API failed";
				$this->load->view('errorpage', $error);
			} catch (\Stripe\Exception\ApiConnectionException $e) {
				// Network communication with Stripe failed
				$error['error_message'] = "Network communication with Stripe failed";
				$this->load->view('errorpage', $error);
			} catch (\Stripe\Exception\ApiErrorException $e) {
				// Display a very generic error to the user, and maybe send
				$error['error_message'] = "Display a very generic error to the user";
				$this->load->view('errorpage', $error);
				// yourself an email
			} catch (Exception $e) {
				// Something else happened, completely unrelated to Stripe
				$error['error_message'] = "Something else happened, completely unrelated to Stripe";
				$this->load->view('errorpage', $error);
			}
		}
		return false;
	}
	
	function addPayentcomment($lead_id, $order_from, $order_id, $type)  {
		$post = array();
		$post['comment_by'] = 25;
		$post['comment_type'] = 0;
		$post['lead_order_id'] = $lead_id;
		$post['comment'] =  $order_from . '-' .$order_id.' '.$type. ' <span class="badge badge-info">Auto generated</span>';

		$this->general_model->addComment($post);
	}

	public function payment_success()

	{

		$this->load->view('payment_success');
	}
	public function payment_error()

	{

		$this->load->view('payment_error');
	}
}
