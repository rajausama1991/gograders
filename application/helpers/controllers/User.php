<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

   function __construct(){
		parent::__construct();
		$this->load->library('phpmailer');
		$this->site_maintenance();

	}

	/*********************** Become a Member ****************/

	public function becomeAMember(){
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('company', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('address1', 'Company Address', 'trim|required');
		$this->form_validation->set_rules('country_id', 'Country', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		
		

		if ( $this->form_validation->run() === FALSE ){
			$data["pagedata"]  = "member";
			$data["page_name"]  = "Become A Customer";

			$var['content']    = $this->load->view('user/signup',$data,true);
			$this->load->view('template',$var);
		}else{
			$data['first_name']		= 	$this->input->post('first_name');
			$data['company']		= 	$this->input->post('company');
			$data['email']			= 	$this->input->post('email');
			$data['phone']		    = 	$this->input->post('phone');

			$data['address1']		= 	$this->input->post('address1');
			$data['address2']		= 	$this->input->post('address2');
			$data['city']		    = 	$this->input->post('city');
			$data['postcode']		= 	$this->input->post('postcode');
			$data['country_id']		= 	$this->input->post('country_id');
			$data['zone_id']		= 	$this->input->post('zone_id');
			$data['is_active']		= 	1;
			$data['created_at']		= 	strtotime(date("Y-m-d"));
			$data['vat_no']			= 	$this->input->post('vat_no');
			$data['remarks']		= 	$this->input->post('remarks');
		
			$this->common_model->insert_array('register',$data);
			
//////////////// EMAIL CODE HERE ////////////



///////////////////// EMAIL CODE END HERE ///////////////

			
			$this->session->set_flashdata('msg_register','Your Request Has Been Received. Our Concerned Person Will Contact You Very Soon. Thanks !');
			redirect(site_url().'become-a-member');
		}

	}

	/*********************** Login ****************/
	public function signIn(){
		$data["pagedata"]  = "member";
		$data["page_name"]  = "Become A Member";

		$var['content']    = $this->load->view('user/login',$data,true);
		$this->load->view('template',$var);
	}



	/**************************** login ************************/

		function login()
		{
		user_auth();
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ( $this->form_validation->run() === FALSE )
		{
			$data['page_name']	=	"Sign In";
			$var['content']	    =	$this->load->view('user/login',$data,true);
			$this->load->view('template',$var);
		} else {
			
			$user_email				= 	$this->input->post('email');
			$user_password			= 	md5($this->input->post('password'));
			
			$query = $this->common_model->select_where('*','customers',array('user_email'=>$user_email,'user_password'=>$user_password,'status'=>1,'is_delete'=>0));
			if($query->num_rows() > 0) {
				$row = $query->row();
				$this->session->set_userdata('id',$row->user_id);
				$this->session->set_userdata('user_refer_id',$row->refer_id);
				$this->session->set_userdata('user_fullname',$row->user_fname.' '.$row->user_lname);
				//redirect(site_url().'main');
				redirect(site_url());
			} else {

			$this->session->set_flashdata('msg_login','No match found for given information.');
			redirect(site_url().'user/login');
			}
			
		}
	}
	
	
	/************************** User Logout *********************/
	
	function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('user_refer_id');
		$this->session->unset_userdata('user_fullname');
		redirect(site_url());

	}
	

	/******************************** Dashboard ***************************/
	
	function dashboard()
	{
		user_auth2();
			$data['page_name']	=	"Dashboard";
			$var['content']	=	$this->load->view('user/dashboard',$data,true);
			$this->load->view('template',$var);
	}



	/************************* Check Email Address ***************/
	
	function check_email()
	{
		$user_email =  $this->input->post('user_email');
		$query = $this->common_model->select_where('user_email','customers',array('user_email'=>$user_email));
		if ($query->num_rows() == 0) {
		 return true;
		 }
		else
		{
			$this->form_validation->set_message('check_email', 'Email already exists!');
			 return FALSE;
		}
	}
	

		
	/************************* Get Zones By Coountry Sign up ***************/
	
	function getzones ($country_id)
	{
		$zones = $this->common_model->select_where_ASC_DESC('*','zone',array('lngid'=>$this->session->userdata('lngid'),'status'=>1,'country_id'=>$country_id),'name','ASC');
//		 	$this->load->view('zones/zones_by_country',$data);
			echo json_encode($zones->result());
	}	

	/*********************** Site is Under Maintance ***************/
	
	function site_maintenance()
	{
		$this->load->view('site_maintenance','');	
	}	
	
	
	
		
}
?>
