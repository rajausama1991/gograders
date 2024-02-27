<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ApiController extends CI_Controller
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

	public function uploadFileApi()
	{

		$id = $_POST['id'];
		$file_source = $_POST['file_source'];
		$number_o = count($_FILES);

		if (isset($_FILES) &&  !empty($_FILES)) {

			$this->load->library('upload'); //loading the library
			//$file_path = realpath(APPPATH . '../../subdomains/admin.writersverge/documents');
			$imagePath = realpath(APPPATH . '../assets/documents/');

			for ($i = 0; $i <  $number_o; $i++) {
				$_FILES['userfile']['name']     = $_FILES['upload_file_' . $i]['name'];

				$_FILES['userfile']['type']     = $_FILES['upload_file_' . $i]['type'];
				$_FILES['userfile']['tmp_name'] = $_FILES['upload_file_' . $i]['tmp_name'];
				$_FILES['userfile']['error']    = $_FILES['upload_file_' . $i]['error'];
				$_FILES['userfile']['size']     = $_FILES['upload_file_' . $i]['size'];

				//configuration for upload your images

				$config = array(
					// 'file_name'     => random_string('alnum', 16),
					'file_name'     => $_FILES['userfile']['name'],
					'allowed_types' => '*',
					'overwrite'     => FALSE,
					'upload_path'
					=> $imagePath
				);
				$this->upload->initialize($config);
				$errCount = 0; //counting errrs
				if (!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
					$carImages[] = array(
						'errors' => $error
					); //saving arrors in the array
				} else {
					$filename = $this->upload->data();
					$carImages[] = array(
						'file_source'	=>	$file_source . '' . $filename['file_name'],
						'order_id'	=> $id,
					);
				}




				//end new
			}

			$res = $this->db->insert_batch('order_files', $carImages);
			echo $res;
			//END
		}
	}

	public function uploadFileRevApi()
	{
		$id = $_POST['id'];
		$revision_note = $_POST['revision_note'];

		$file_source = $_POST['file_source'];

		// echo $file_source;
		// print_r($_POST);
		// die;

		$number_o = count($_FILES);
		if (isset($_FILES) &&  !empty($_FILES)) {

			$this->load->library('upload'); //loading the library
			//$file_path = realpath(APPPATH . '../../subdomains/admin.writersverge/documents');
			$imagePath = realpath(APPPATH . '../user_uploads/');

			for ($i = 0; $i <  $number_o; $i++) {
				$_FILES['userfile']['name']     = $_FILES['upload_file_' . $i]['name'];
				// echo $_FILES['upload_file_'.$i]['name'];
				// die;

				$_FILES['userfile']['type']     = $_FILES['upload_file_' . $i]['type'];
				$_FILES['userfile']['tmp_name'] = $_FILES['upload_file_' . $i]['tmp_name'];
				$_FILES['userfile']['error']    = $_FILES['upload_file_' . $i]['error'];
				$_FILES['userfile']['size']     = $_FILES['upload_file_' . $i]['size'];

				//configuration for upload your images

				$config = array(
					// 'file_name'     => random_string('alnum', 16),
					'file_name'     => $_FILES['upload_file_' . $i]['name'],
					'allowed_types' => '*',
					'max_size'      => 800000,
					'overwrite'     => FALSE,
					'upload_path'    => $imagePath
				);

				$this->load->library('upload', $config);



				$this->upload->initialize($config);
				$errCount = 0; //counting errrs
				if (!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
					$carImages[] = array(
						'errors' => $error
					); //saving arrors in the array

					echo "not uploaded";
				} else {
					$filename = $this->upload->data();
					$carImages[] = array(
						'revision_file'	=>	$file_source . '' . $filename['file_name'],
						'revision_note' => $revision_note,
						'revision_no' => 1,
						'order_id' => $id,
						'writer_id' => $_POST['writer_id']
					);

					// echo "success";
				}




				//end new
			}
			// get rev and check if exist update else insert
			// $leadData = $this->common_model->select_where_return_row('*', 'revisions', array('order_id' => $order_id));
			$res =  $this->db->insert_batch('revisions', $carImages);
			$res = $this->common_model->update_array(array('order_id' => $id), 'orders', array('is_revision' => 1, 'revision_marked_by' => $_POST['revision_marked_by']));
			echo $res;
			//END
		} else {
			$carImages[] = array(
				'revision_note' => $revision_note,
				'revision_no' => 1,
				'order_id' => $id,
				'writer_id' => $_POST['writer_id']
			);
			$res =  $this->db->insert_batch('revisions', $carImages);
			$res = $this->common_model->update_array(array('order_id' => $id), 'orders', array('is_revision' => 1, 'revision_marked_by' => $_POST['revision_marked_by']));
			echo $res;
		}
	}

	function deleteFile()
	{

		$file_id = $_POST['file_id'];
		$sourceUrl = $_POST['sourceUrl'];
		$filename = $_POST['filename'];
		$original_path = $sourceUrl;

		$path =  $original_path . $filename;
		// echo $filename;exit;

		if (file_exists($path)) {
			unlink($path);

			$result = $this->common_model->delete_where(array('id' => $file_id), 'order_files');
			if ($result) {
				$arr = array("msg" => 1);
			} else {
				$arr = array("msg" => 2);
			}

			echo json_encode($arr);
		} else {
			$arr = array("msg" => 3);
			echo json_encode($arr);
		}
	}
	function unlink_file_image($file_id, $sourceUrl, $filename)
	{
		$original_path = $sourceUrl;

		$path = $original_path . $filename;
		$res = unlink($path);

		if ($res) {
			return true;
		} else {
			return false;
		}
	}
}
