<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//Function starts here
function admin_auth()
{
	$CIH = &get_instance();

	$admin_id = $CIH->session->userdata('admin_login');


	if ($admin_id == '') {

		redirect("admin");
	}
}

//user Function starts here
//Function starts here
function user_auth()
{
	$CIH = &get_instance();

	$user_id = $CIH->session->userdata('user_id');

	if ($user_id == '') {
		redirect("login");
	}
}

//Function starts here
function user_auth2()
{
	$CIH = &get_instance();

	$user_id = $CIH->session->userdata('user_login');

	if ($user_id == '') {
		redirect("user/login");
	}
}


/************* Settting ***************/

function settings($field)
{
	$cih = &get_instance();
	$cih->db->select($field);
	$cih->db->from('settings');
	$result = $cih->db->get();
	$result = $result->row();
	$val = $result->$field;
	return $val;
}


/************* Settting ***************/

function userpermission_status($cur_user_group, $cur_requested_option)
{
	$cih = &get_instance();

	$current_user_group = $cih->common_model->select_where_return_row('*', 'usergroups', array('usergroups_id' => $cur_user_group));
	if ($current_user_group) {
		$currnet_usergroups_permissions = $current_user_group->usergroups_permissions;

		$data['current_allowed_menu'] = explode(",", $currnet_usergroups_permissions);

		if (in_array($cur_requested_option, $data['current_allowed_menu'])) {
			return true;
		} else {
			return false;
		}
	} else {

		return false;
	}
}


//user Function starts here
/************* Settting ***************/

function settingsimages($field)
{
	$cih = &get_instance();
	$cih->db->select($field);
	$cih->db->from('imagesizes');
	$result = $cih->db->get();
	$result = $result->row();
	$val = $result->$field;
	return $val;
}


//user Function starts here
/************* Settting ***************/

function adloadpopup($field)
{
	$cih = &get_instance();
	$cih->db->select($field);
	$cih->db->from('wl_popupsetup');
	$cih->db->where('popupstatus', '1');
	$cih->db->where('popupposition', 'onload');
	$cih->db->order_by("popupid", "asc");
	$cih->db->limit(1, 0);
	$result = $cih->db->get();
	if ($result->row()) {
		$result = $result->row();
		$val = $result->$field;
	} else {
		$val = 0;
	}
	return $val;
}

function encode($value)
{
	if (!$value)
		return false;
	$ci = &get_instance();
	return strtr($ci->encryption->encrypt($value), array('+' => '--1', '=' => '--2', '/' => '--3'));
}

function decode($value)
{
	if (!$value)
		return false;
	$ci = &get_instance();
	return $ci->encryption->decrypt(strtr($value, array('--1' => '+', '--2' => '=', '--3' => '/')));
}

function manageCart()
{
	$ci = &get_instance();
	$dataArray = array();
	$user_id = $ci->session->userdata('id');


	if ($ci->session->userdata('id') != '') {
		$cartValues = $ci->common_model->select_where('*', 'cart', array('user_id' => $user_id));

		if ($cartValues and $cartValues != '') {
			foreach ($cartValues->result() as $cartValue) {
				$dataArray[] = get_object_vars($cartValue);
			}
		}
	} else {

		if (isset($_SESSION['cart']) and $_SESSION['cart'] != '') {
			foreach ($_SESSION['cart'] as $cart) {
				$dataArray[] = $cart;
			}
		}
	}
	return $dataArray;
}

function manageCartByID($id)
{

	$ci = &get_instance();
	$dataArray = array();
	$user_id = $ci->session->userdata('id');

	if ($user_id == '') {
		if (isset($_SESSION['cart']) and $_SESSION['cart'] != '') {

			if (!empty($_SESSION["cart"])) {
				foreach ($_SESSION["cart"] as $select => $val) {
					if ($val["cat_id"] == $id) {
						$dataArray[] = $val;
					}
				}
			}
		}
		return $dataArray;
	} else {
		$cartValues = $ci->common_model->select_where_return_row('*', 'cart', array('cart_id' => $id));
		$dataArray2[] = get_object_vars($cartValues);
		return $dataArray2;
	}
}

function manageCartAfterSubmit($isLoggedIn)
{
	$ci = &get_instance();
	$dataArray = array();
	$user_id = $ci->session->userdata('id');

	if ($isLoggedIn == false) {

		if (isset($_SESSION['cart']) and $_SESSION['cart'] != '') {
			foreach ($_SESSION['cart'] as $cart) {
				$dataArray[] = $cart;
			}
		}
	} else {
		$cartValues = $ci->common_model->select_where('*', 'cart', array('user_id' => $user_id));

		if ($cartValues and $cartValues != '') {
			foreach ($cartValues->result() as $cartValue) {
				$dataArray[] = get_object_vars($cartValue);
			}
		}
	}
	return $dataArray;
}


function getDomain()
{
	$CI = &get_instance();
	return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/", "$1", $CI->config->slash_item('base_url'));
}

function getWebinfo()
{
	$cih = &get_instance();
	$obj = $cih->common_model->select_where_return_row('*', 'our_websites', array('website_name' => getDomain()));
	if ($obj) {
		return $obj;
	} else {
		return '';
	}
}

function returnSlug()
{
	if ($_SERVER['HTTP_HOST'] == "localhost") {
		$slug = 'PPL';
	} else {
		$slug = getWebinfo()->slug;
	}

	return $slug;
}

function fetchDownloadWorkNoti($id)
{
	$slug = returnSlug();
	$cih = &get_instance();
	$email = $cih->session->userdata('email');
	$cih->db->select('*, o.order_id');
	$cih->db->from('orders o');
	if ($id != 1) {
		$cih->db->join('submission_files of', 'of.order_id=o.order_id', 'left');
	}

	$cih->db->join('revisions r', 'r.order_id=o.order_id', 'left');

	$cih->db->where('user_email', $email);
	$cih->db->where('order_from', $slug);
	if ($id == 1) {
		$cih->db->where('status', '5');
		$cih->db->where('is_rev_submitted', '1');
		$cih->db->where('r.is_work_downloaded', '0');
	} else {
		$cih->db->where('order_status', '3');
		$cih->db->where('is_submitted', '1');
		$cih->db->where('is_revision', '0');
		$cih->db->where('of.is_work_downloaded', '0');
		$cih->db->order_by('id', 'desc');
	}


	$query = $cih->db->get();
	return $query->num_rows();
}


function fetchRevisedWork()
{
	$cih = &get_instance();
	$email = $cih->session->userdata('email');
	$data = $cih->common_model->join_three_tab_where('*', 'orders o', 'revisions r', 'r.order_id=o.order_id', 'revised_work_files rwf', 'r.revision_id=rwf.revision_id', 'right', array('domain_name' => getDomain(), 'user_email' => $email, 'status' => 5, 'is_rev_submitted' => 1, 'order_from' => returnSlug()), 'o.order_id', 'DESC');

	return count($data);
}

function is_json($str)
{
	json_decode($str);
	return json_last_error() === JSON_ERROR_NONE;
}

// ------------Get Currency Rate ---------------------
function get_currency_rate(){
	$ci = &get_instance();
	$ci->load->library('session');
	$currencies =  $ci->session->userdata('currencies');
    if(!empty($currencies)){
		return $currencies;
	} else {
		$currencies=store_currency_session();
		return $currencies;
	}
}
function store_currency_session() {
		$ci = &get_instance();
		$ci->load->library('session');
		$req_url = 'https://admins.writersplanet.net/exchangerate-api/USD';
		$response_json = file_get_contents($req_url);
		if (false !== $response_json) {
			// Try/catch for json_decode operation
			try {
				// Decoding
				$response = json_decode($response_json);
				if ('success' === $response->result) {
					$currencies = array(
						'CAD_SYMBOL' => 'CAD',
						'CAD' => 'C$',
						'CAD_RATE' => $response->conversion_rates->CAD,
						'AUD_SYMBOL' => 'AUD',
						'AUD' => 'A$',
						'AUD_RATE' => $response->conversion_rates->AUD,
						'GBP_SYMBOL' => 'GBP',
						'GBP' => '£',
						'GBP_RATE' => $response->conversion_rates->GBP,
						'EUR_SYMBOL' => 'EUR',
						'EUR' => '€',
						'EUR_RATE' => $response->conversion_rates->EUR,
						'USD' => '$',
					);
				}
				$ci->session->set_userdata('currencies', $currencies);
				return $currencies;
			} catch (Exception $e) {
				// Handle JSON parse error...
				
			}
		}
}