<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


	function __construct()
	{
	
		parent::__construct();
		$this->load->helper('date');
		$this->load->library('cart');
		user_auth();
	}

	
	/*********************** Home Page ***************/

	public function index()
	{
		
		$data['title'] = 'Order History';
		$data['page_name'] = 'Order History';

		$var['content'] = $this->load->view('user_dashboard/dashboard', $data, true);
		$this->load->view('user_dashboard/template_ud', $var);
	}

	function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect(site_url());
	}

	
}
