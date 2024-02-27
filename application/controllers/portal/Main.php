<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/stripe-php/init.php';

class Main extends CI_Controller
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

		$data['title'] = '::User Identification::';
		$data['page_name'] = 'User Identification';

		$var['content'] = $this->load->view('portal/user_identification', $data, true);
		$this->load->view('portal/template2021', $var);
	}

	public function thankYou()
	{

		require_once APPPATH . 'libraries/stripe-php/init.php';
		$stripe = new \Stripe\StripeClient(
			$this->config->item('stripe_secret')
		);

		if (isset($_GET['order_id'])) {
			$res = $stripe->checkout->sessions->retrieve($_GET['session_id']);
			if ($res['payment_status'] == 'paid' && $res['status'] == 'complete') {
				$conditions = '';
				$orderID = $_GET['order_id'];
				$pay_type = $_GET['pay_type'];
				$price = $_GET['price'];
				$order = $this->common_model->select_where_return_row('*', 'orders', array('order_id' => $orderID));

				if ($pay_type == 'hp' && $order->order_status == 1) {
					$conditions = array('payment_type' => 1, 'quoted_price' => $order->quoted_price + $price);
				} else if ($order->order_status == 0) {
					$hfp = 1;
					if ($pay_type == 'hp') {
						$hfp = 0;
					}
					$conditions = array('payment_type' => $hfp, 'order_status' => 1, 'quoted_price' => $price);
				} else {
					$conditions = array('quoted_price' => $price, 'order_status' => 1);
				}
				$this->db->where('order_id', $orderID)->update('orders', $conditions);

				$update['lead_status'] = 10;
				$update['quoted_price'] = $price;
				$this->db->where('lead_id', $order->lead_id)->update('leads', $update);

				$post = array();
				$post['comment_by'] = 25;
				$post['comment_type'] = 0;
				$post['lead_order_id'] = $order->lead_id;
				$post['comment'] = $order->order_from . '-' . $orderID . ' <span class="badge badge-info">Auto generated (Payment Link)</span>';

				$this->general_model->addComment($post);
			}
		}


		$data['title'] = 'Thank You!';
		$data['page_name'] = 'Thank You!';
		$this->load->view('frontend/thankyou');
	}

	public function orderStepOne()
	{
		$currencies = get_currency_rate();
		if (!empty($this->input->post())) {
			$data['order'] = $this->input->post();
		}

		$data['title'] = 'Get Consultancy In Three Easy Steps';
		$data['page_name'] = 'Calculate Price';
		$data['currencies'] = json_encode($currencies);

		$data['type_of_documents'] = $this->common_model->select_all('*', 'type_of_document');
		$data['no_of_pages'] = $this->common_model->select_all('*', 'no_of_pages');
		$data['subjects'] = $this->common_model->select_all('*', 'subject');
		$data['hours'] = $this->common_model->select_all('*', 'hours');
		$var['content'] = $this->load->view('portal/order_steps/step_one', $data, true);
		$this->load->view('portal/template2021', $var);
	}
	public function edit_order($oid)
	{
	    user_auth();
		$currencies = get_currency_rate();
		$this->load->model('fetchmodel');
		$this->load->model('common_model');

		$data['title'] = 'Edit Order';
		$data['page_name'] = 'Edit Order';
		$data['currencies'] = json_encode($currencies);

		$data['order'] = $this->fetchmodel->searchOrder($oid);
		$data['type_of_documents'] = $this->common_model->select_all('*', 'type_of_document');
		$data['no_of_pages'] = $this->common_model->select_all('*', 'no_of_pages');
		$data['subjects'] = $this->common_model->select_all('*', 'subject');
		$data['hours'] = $this->common_model->select_all('*', 'hours');
		$var['content'] = $this->load->view('update_order/edit-order', $data, true);
		$this->load->view('update_order/template2023', $var);
	}

	public function adminDashboard()
	{

		$data['title'] = 'Home | Blooming Dales Nursery';
		$data['page_name'] = 'Dashboard';

		// total orders 

		$orders = $this->common_model->select_where('*', 'bookings', array('status' => 1));

		$data['total_orders'] = $orders->num_rows();

		// total users 

		$orders = $this->common_model->select_where('*', 'users', array('status' => 1));

		$data['total_users'] = $orders->num_rows();

		// end user 

		$var['content'] = $this->load->view('t-administrative/dashboard', $data, true);

		$this->load->view('t-administrative/master', $var);
	}
}
