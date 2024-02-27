<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

//   var $limit  = 6; var $offset = 0; var $pages  = 4;

   function __construct(){
		parent::__construct();
		$this->load->library('phpmailer');
		$this->load->library('paging_products');
//		$this->session->set_userdata('session_id',session_id());
		$this->site_maintenance();
		$this->session->set_userdata('lngid','en');


	}
	
	/*********************** openpopups Page ***************/
		
//	public function openpopups()
//	{
//		$this->load->view('openpopups');
//	}
	
		
	/*********************** Home Page ***************/
		
	public function index()
	{
		$data["pagedata"]  = "home";
		$login_session = $this->session->userdata('id');
		$data['user_id'] = isset($login_session)?$login_session:"";
		$data['categories'] = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_categories',array('cat_parent'=>0,'cat_status'=>1,'lngid'=>'en','home_featured'=>1),'cat_id','DESC',0,3);
		if(isset($data['categories']) and $data['categories'] != ''){
			foreach($data['categories']->result() as $category){
				$sub_category = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_categories',array('cat_parent'=>$category->cat_id,'cat_status'=>1,'lngid'=>'en'),'cat_id','DESC',0,3);
				$category->sub_category = $sub_category;

//				$new_prod[] = 0;

//				$products_array = array();
				if(isset($category->sub_category) and $category->sub_category->num_rows() >0) {
					foreach ($category->sub_category->result() as $sub_category) {
						$products_array = array();
//						echo "<pre>";
						$lproducts = $this->common_model->select_where('*','wl_products',array('lngid'=>'en'));
						if(isset($lproducts) and $lproducts != '') {
							foreach ($lproducts->result() as $lproduct) {
								$cat_ids = explode(",",$lproduct->cat_id);

								if(in_array($sub_category->cat_id,$cat_ids )){
									$products_array[] = $lproduct->products_id;

								}

							}

						}
						if(empty($products_array)){
							$products_array[] = 0;
						}

						$new_product_array = array_slice($products_array, 0, 5);
//						$new_prod = join(",",$products_array);
//						$new_prod = implode(",",$products_array);
//						print_r($products_array);exit;
//						echo "<pre>";
//						print_r($new_prod);

						$products = $this->common_model->select_where_in2('*','wl_products',$new_product_array,'products_id');
						if(isset($products) and $products != '') {
							foreach ($products->result() as $product) {
								$customer_price = $this->common_model->select_where_return_row('*','wl_customer_price',array('user_id'=>$this->session->userdata('id'),'products_id'=>$product->products_id));
								$wish_list		= $this->common_model->select_where_return_row('*','wl_products_wishlists',array('user_id'=>$this->session->userdata('id'),'products_id'=>$product->products_id));
								if(isset($customer_price->customerprice) and $customer_price->customerprice != ""){
									$product_price = $customer_price->customerprice;
								}else{
									$product_price = $product->baseprice;
								}
								$product->product_price = $product_price;
								if(isset($product->suggestedprice) and $product->suggestedprice > 0){
									$final_price    = $product_price;
									//$final_price  = $product->suggestedprice;
									$discount_price = $product_price;
								}else{
									$final_price = $product_price;
									$discount_price = "";
								}
								$product->final_price = $final_price;
								$product->discount_price = $discount_price;
								if(isset($wish_list) and $wish_list != ""){
									$background = '00a0e3';
									$color = 'fff';
								}else{
									$background = 'fff';
									$color = '000';
								}
								$product->background 	= $background;
								$product->color 		= $color;

							}
						}
						$sub_category->products = $products;

					}
				}else{
					// When category is not have an sub category,
					$products_array = array();
//						echo "<pre>";
					$lproducts = $this->common_model->select_where('*','wl_products',array('lngid'=>'en'));
					if(isset($lproducts) and $lproducts != '') {
						foreach ($lproducts->result() as $lproduct) {
							$cat_ids = explode(",",$lproduct->cat_id);
							if(in_array($category->cat_id,$cat_ids )){
								$products_array[] = $lproduct->products_id;
							}
						}
					}
					$new_product_array = array_slice($products_array, 0, 5);
					$new_prod = join(",",$new_product_array);

					$products = $this->common_model->select_where_in2('*','wl_products',$new_prod,'products_id');
					if(isset($products) and $products != '') {
						foreach ($products->result() as $product) {
							$customer_price = $this->common_model->select_where_return_row('*','wl_customer_price',array('user_id'=>$this->session->userdata('id'),'products_id'=>$product->products_id));
							$wish_list		= $this->common_model->select_where_return_row('*','wl_products_wishlists',array('user_id'=>$this->session->userdata('id'),'products_id'=>$product->products_id));
							if(isset($customer_price->customerprice) and $customer_price->customerprice != ""){
								$product_price = $customer_price->customerprice;
							}else{
								$product_price = $product->baseprice;
							}
							$product->product_price = $product_price;
							if(isset($product->suggestedprice) and $product->suggestedprice > 0){
								$final_price = $product->suggestedprice;
								$discount_price = $product_price;
							}else{
								$final_price = $product_price;
								$discount_price = "";
							}
							$product->final_price = $final_price;
							$product->discount_price = $discount_price;
							if(isset($wish_list) and $wish_list != ""){
								$background = '00a0e3';
								$color = 'fff';
							}else{
								$background = 'fff';
								$color = '000';
							}
							$product->background 	= $background;
							$product->color 		= $color;

						}
					}
					$category->products = $products;

				}
			}
		}

		$data['sliders'] = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_sliders',array('sliders_status'=>1,'lngid'=>'en'),'sliders_id','DESC',0,10);

		$data['shortbanners'] = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_banners',array('banners_status'=>1,'lngid'=>'en','banners_type'=>'shortbanner'),'banners_id','asc',0,18);
		
		
		$data['fullbanners1'] = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_banners',array('banners_sort'=>1,'banners_status'=>1,'lngid'=>'en','banners_type'=>'fullbanner'),'banners_id','asc',0,18);

		$data['fullbanners'] = $this->common_model->select_where_ASC_DESC_WITH_LIMIT('*','wl_banners',array('banners_sort >'=>1,'banners_status'=>1,'lngid'=>'en','banners_type'=>'fullbanner'),'banners_id','asc',0,18);

		$wish_list_count =	 $this->common_model->select_where('*','wl_products_wishlists',array('user_id'=>$this->session->userdata('id')));
		$data['wish_list_count'] = count($wish_list_count->result());

		$data['info'] = $this->common_model->select_where_return_row('*','wl_cms_blocks',array('cms_blocks_id'=>1,'cms_blocks_status'=>1,'lngid'=>'en'));
		$data['how_it_works'] = $this->common_model->select_where_return_row('*','wl_cms_blocks',array('cms_blocks_id'=>2,'cms_blocks_status'=>1,'lngid'=>'en'));
		$var['content']    = $this->load->view('home',$data,true);
		$this->load->view('template',$var);
	}


	/***************************** Subscribe  *********************/
	function subscribe()
	{
		$subscriber_email	=	$this->input->post('subscribe2');
		// echo "aa".$subscriber_email;exit;
		if ($subscriber_email!=""){
			$check_subscriber_email	=	$this->common_model->select_where_return_row('*','subscribers',array('subscriber_email'=>$subscriber_email));

			if($check_subscriber_email)
			{
				$data2['msg']='Your email address is already subscribed.';
			} else {

				$data['subscriber_email']	=	$subscriber_email;
				$data['status']				=	1;
				$data['dateadded']			=	time();
				$this->common_model->insert_array('subscribers',$data);

				$data2['msg']='You are subscribed successfully.';
			}
		}else{
			$data2['msg']='Subscriber email is empty.';
		}

		echo $data2['msg'];
	}





	/*********************** Dashboard ***************/
	

	function dashboard(){
		$data["pagedata"]  = "dashboard";
		
		$login_session = $this->session->userdata('id');
		$data['user_id'] = isset($login_session)?$login_session:"";
		$wish_list_count =	 $this->common_model->select_where('*','wl_products_wishlists',array('user_id'=>$this->session->userdata('id')));
		$data['wish_list_count'] = count($wish_list_count->result());		

		$var['content']    = $this->load->view('dashboard',$data,true);
		$this->load->view('template',$var);
	}



	/*********************** Site is Under Maintance ***************/

	function site_maintenance()
	{
		$this->load->view('site_maintenance','');	
	}	
	
}
