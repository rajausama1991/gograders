<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Operations extends CI_Controller
{

  public function edit_order($oid)
  {
    $this->load->model('fetchmodel');
    $this->load->model('common_model');

    $data['title'] = 'Calculate Price';
    $data['page_name'] = 'Calculate Price';


    $data['order'] = $this->fetchmodel->searchOrder($oid);
    $data['type_of_documents'] = $this->common_model->select_all('*', 'type_of_document');
    $data['subjects'] = $this->common_model->select_all('*', 'subject');
    $data['no_of_pages'] = $this->common_model->select_all('*', 'no_of_pages');
    $data['hours'] = $this->common_model->select_all('*', 'hours');

    $var['content'] = $this->load->view('edit-order', $data, true);
    $this->load->view('portal/template2021', $var);
  }

  public function searchOrder()
  {



    $search = $this->input->get();

    $oid = $search['oid'];

    // echo "<pre>";print_r($search);exit;
    if (strpos($oid, "-")) {
      $array = explode("-", $oid);
      $oid = $array[1];
    }



    $this->load->model('fetchmodel');







    $allOrders = $this->fetchmodel->searchOrder($oid);
    $data2 = '';
    $data2 = '<div class="orderdetailstable">';
    $data2 .= ' <table class="table table-bordered data-table-orders table-responsive" style="width:100%; color:#000; text-align: center;" id="">
           <thead>
           <tr>
               <th>Order ID</th>
                <th>Document Type</th>
               <th>Academic Level</th>
               <th>No. of pages</th>
               <th>Title</th>
               <th>Subject</th>
               <th>Citation Style</th>
               <th>Order Price</th>
               <th>Payment Status</th>
                <th>Order Status</th>
           </tr>
           </thead>';

    if (!empty($allOrders)) {



      if ($allOrders->payment_type == '0') {

        $payment = 'Half';
      } elseif ($allOrders->payment_type == '1') {



        $payment = 'Full';
      }

      if ($allOrders->order_status == '0') {

        $order_status = 'Unpaid';
      } elseif ($allOrders->order_status == '1') {

        $order_status = 'Paid';
      } elseif ($allOrders->order_status == '2') {

        $order_status = 'Completed';
      } elseif ($allOrders->order_status == '3') {

        $order_status = 'In Progress';
      } elseif ($allOrders->order_status == '4') {

        $order_status = 'Revision';
      } elseif ($allOrders->order_status == '5') {

        $order_status = 'Disputed';
      } elseif ($allOrders->order_status == '6') {

        $order_status = 'Credited';
      } elseif ($allOrders->order_status == '7') {

        $order_status = 'Pending';
      }

      $data2 .= '<tr>

      <td>' . $allOrders->order_from . '-' . $allOrders->order_id . '</td>
      <td>' . $allOrders->document_type . '</td>
      <td>' . $allOrders->academic_level . '</td>



      <td>' . $allOrders->no_of_pages . '</td>
      <td>' . $allOrders->title . '</td>
      <td>' . $allOrders->subject . '</td>
      <td>' . $allOrders->citation_style . '</td>
      <td>' . $allOrders->quoted_price . '</td>
      <td>' . $payment . '</td>
      <td>' . $order_status . '</td>
           </tr>';
    } else {
      $data2 .= '<tr><td colspan="11">No orders yet</td></tr>';
    }
    $data2 .=  '</table></div>';
    echo $data2;
  }

  public function contactus()
  {

    $this->form_validation->set_rules('full_name', 'Full Name', 'required');

    $this->form_validation->set_rules('phone', 'Phone Number', 'required|numeric');

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    $this->form_validation->set_rules('form_Subject', 'Subject', 'required');

    $this->form_validation->set_rules('message', 'Message', 'required');

    $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

    if ($this->form_validation->run()) {

      $post = $this->input->post();

      $this->load->model('insertmodel');

      $insertContactUsForm = $this->insertmodel->insertContactUsForm($post);

      if ($insertContactUsForm) {

        $this->session->set_flashdata('success', 'Thanks For Contacting Us We will get in touch with you shortly');

        redirect("contact-us");
      } else {

        $this->session->set_flashdata('error', 'There is an error while submiting your form');

        redirect("contact-us");
      }
    } else {

      $this->load->view('header2');

      $this->load->view('contact');

      $this->load->view('footer');
    }
  }

  public function insertOrder()
  {

    $config = [



      'upload_path' => './user_uploads/',



      'allowed_types' => 'jpeg|jpg|png|doc|docx|pdf|xls',



    ];



    $this->load->library('upload', $config);

    $this->load->model('insertmodel');

    $post = $this->input->post();

    $post['phone'] = $post['contact_no'];

    if (empty($post['document_other'])) {

      unset($post['document_other']);
    }

    unset($post['contact_no'], $post['DeadlineDate'], $post['hours']);

    if (!empty($_FILES['file']['name'])) {

      if ($this->upload->do_upload('file')) {

        $data = $this->upload->data();

        $file_path = base_url("user_uploads/" . $data['raw_name'] . $data['file_ext']);

        $post['file'] = $file_path;





        $insertOrder = $this->insertmodel->insertOrder($post);

        if ($insertOrder) {

          $this->session->set_flashdata('success', 'Thanks For order. We will get in touch with you shortly');

          redirect("order-now");
        } else {

          $this->session->set_flashdata('error', 'There is an error while submiting your order');

          redirect("order-now");
        }
      } else {



        $upload_error = $this->upload->display_errors();



        $this->session->set_flashdata('error', "$upload_error");



        redirect('order-now');
      }
    } else {

      $insertOrder = $this->insertmodel->insertOrder($post);

      if ($insertOrder) {

        $this->session->set_flashdata('success', 'Thanks For order. We will get in touch with you shortly');

        redirect("order-now");
      } else {

        $this->session->set_flashdata('error', 'There is an error while submiting your order');

        redirect("order-now");
      }
    }
  }
}
