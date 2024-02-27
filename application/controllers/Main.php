<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{


	function __construct()
	{

		parent::__construct();
		$this->load->helper('date');
		$this->load->helper('download');
	}


	/*********************** Home Page ***************/

	public function index()
	{

		$data['type_of_documents'] = $this->common_model->select_all('*', 'type_of_document');
		$data['title'] = 'Reach for Top Level Excellence Now | Go Graders';
		$data['page_name'] = 'Home';
		$data['canonical'] = base_url();


		$var['content'] = $this->load->view('frontend/home', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	
	
	public function about()
	{

		
		$data['title'] = 'About Us';
		$data['page_name'] = 'Home';
		


		$var['content'] = $this->load->view('frontend/about', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	
	
	public function reviews()
	{

		
		$data['title'] = 'reviews';
		$data['page_name'] = 'Home';
		


		$var['content'] = $this->load->view('frontend/reviews', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	
	public function contact()
	{

		
		$data['title'] = 'contact';
		$data['page_name'] = 'contact';
		


		$var['content'] = $this->load->view('frontend/contact', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	
	
	public function services($slug)
	{

		
		$data['type_of_documents'] = $this->common_model->select_all('*', 'type_of_document');
		$data['page_name'] = 'services';
		$page= $this->check_slug($slug);
		$data['service_name']= $page['service_name'];
		$data['title'] = $page['service_name'];
		


		$var['content'] = $this->load->view('frontend/services', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	public function check_slug($slug)
	{
        if($slug=='essay-help')
        {
            $page = array(
                'service_name'=> 'Essay Help',
                );
            return $page; 
        } elseif($slug=='dissertation-help'){
            $page = array(
                'service_name'=> 'Dissertation Help',
                );
            return $page; 
        }elseif($slug=='homework-help'){
            $page = array(
                'service_name'=> 'Homework Help',
                );
            return $page; 
        }
        elseif($slug=='coursework-help'){
            $page = array(
                'service_name'=> 'Coursework Help',
                );
            return $page; 
        }
        elseif($slug=='thesis'){
            $page = array(
                'service_name'=> 'Thesis Help',
                );
            return $page; 
        }
        elseif($slug=='articles'){
            $page = array(
                'service_name'=> 'Articles Help',
                );
            return $page; 
        }elseif($slug=='book-report'){
            $page = array(
                'service_name'=> 'Book Report Help',
                );
            return $page; 
        }elseif($slug=='assessment'){
            $page = array(
                'service_name'=> 'Assessment Help',
                );
            return $page; 
        }
	}

	public function palagarismFile()
	{
		$config = [

			'upload_path' => './user_uploads/',

			'allowed_types' => 'doc|docx',

		];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
		}

		echo $this->read_docx('user_uploads/' . $data['file_name']);
	}
	function read_docx($filename)
	{

		$striped_content = '';
		$content = '';
		if (!$filename || !file_exists($filename)) return false;

		$zip = zip_open($filename);
		if (!$zip || is_numeric($zip)) return false;

		while ($zip_entry = zip_read($zip)) {

			if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

			if (zip_entry_name($zip_entry) != "word/document.xml") continue;

			$content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

			zip_entry_close($zip_entry);
		}
		zip_close($zip);
		$content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
		$content = str_replace('</w:r></w:p>', "\r\n", $content);
		$striped_content .= strip_tags($content);

		return $striped_content;
	}
	public function palagarism()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$text =  trim($_POST['text']);
			$sentence = '';
			$sentences_array = array();
			$response = '';
			if (!empty($text)) {
				$text_array = explode(" ", $text);
				if (count($text_array) >= 15) {
					$loop = 15;
					$plagarised_count = 0;
					$plagarised_words = 0;

					foreach ($text_array as $key) {
						--$loop;
						$sentence .= $key . ' ';

						if ($loop == 0) {
							array_push($sentences_array, $sentence);
							$loop = 15;
							$sentence = '';
						}
					}
					$total_words = count($text_array);
					foreach ($sentences_array as $key) {
						$search = strtr($key, array('(' => '', ')' => '', '/' => ''));
						$key = rtrim($search, " ");
						// echo $key;die;
						$endpoint = preg_replace('/\s+/', '+', $key);

						$html = file_get_html("https://www.google.com/search?q=$endpoint");
						$count = 0;
						if ($html !== false) {
							foreach ($html->find('div[id]') as $item => $data) {
								if (preg_match('/' . $key . '/i', $data->outertext)) {

									$response .= '<span class="text-danger">Plagarised Text:' . $key . '</span><br>';
									$count = 1;
								}
							}
							if ($count == 1) {
								$link_count = 6;
								foreach ($html->find('a') as $item) {

									$link = explode("=", $item->href);
									if (strpos($item->href, 'http')) {
										--$link_count;
										$url = explode("&", $link[1]);

										$response .= '<span class="text-info">Reference Link: <a href="' . $url[0] . '" target="_blank">' . $url[0] . '</a></span><br>';
										if ($link_count == 0) {
											break;
										}
									}
								}
							}
						}
						if ($count == 1) {
							++$plagarised_count;
						}
					}

					$palagarised_words = $plagarised_count * 15;

					$palagarised_percentage = ($palagarised_words / $total_words) * 100;
					$uniqueness_perecentage = (($total_words - $palagarised_words) / $total_words) * 100;
					$response .= '<span class="text-warning">Palagarism: ' . round($palagarised_percentage) . '%</span> <br>';
					$response .= '<span class="text-success">Uniqueness: ' . round($uniqueness_perecentage) . '%</span>';

					echo $response;
				} else {
					echo 'Text should be atleast of 15 words';
				}
			} else {
				echo 'Please enter some text';
			}
		} else {
			$this->load->view('palagarism');
		}
	}
	function downloadPDF()
	{
		$text =  trim($_POST['text']);
		$sentence = '';
		$sentences_array = array();
		$response = array();
		$ref_link = array();
		$pla_text = array();
		if (!empty($text)) {
			$text_array = explode(" ", $text);
			if (count($text_array) >= 15 && count($text_array) <= 1000) {
				$loop = 15;
				$plagarised_count = 0;
				$plagarised_words = 0;

				foreach ($text_array as $key) {
					--$loop;
					$sentence .= $key . ' ';

					if ($loop == 0) {
						array_push($sentences_array, $sentence);
						$loop = 15;
						$sentence = '';
					}
				}
				$total_words = count($text_array);
				foreach ($sentences_array as $key) {
					$search = strtr($key, array('(' => '', ')' => '', '/' => ''));
					$key = rtrim($search, " ");
					// echo $key;die;
					$endpoint = preg_replace('/\s+/', '+', $key);

					$html = file_get_html("https://www.google.com/search?q=$endpoint");
					$count = 0;
					if ($html !== false) {
						foreach ($html->find('div[id]') as $item => $data) {
							if (preg_match('/' . $key . '/i', $data->outertext)) {

								$pla_text[] = 'Plagarised Text:' . $key;
								$count = 1;
							}
						}
						if ($count == 1) {
							$link_count = 6;
							foreach ($html->find('a') as $item) {

								$link = explode("=", $item->href);
								if (strpos($item->href, 'http')) {
									--$link_count;
									$url = explode("&", $link[1]);

									$ref_link[] = 'Reference Link: ' . $url[0];
									if ($link_count == 0) {
										break;
									}
								}
							}
						}
					}
					if ($count == 1) {
						++$plagarised_count;
					}
				}

				$palagarised_words = $plagarised_count * 15;

				$palagarised_percentage = ($palagarised_words / $total_words) * 100;
				$uniqueness_perecentage = (($total_words - $palagarised_words) / $total_words) * 100;
				$response['plagiarism'] = 'Plagiarism: ' . round($palagarised_percentage) . "%";
				$response['uniqueness'] = 'Uniqueness: ' . round($uniqueness_perecentage) . '%';
				$response['pla_text'] = $pla_text;
				$response['ref_link'] = $ref_link;
			} else {
				echo 'Text should be atleast of 15 words and not greater than 1000 words';
				die;
			}
		} else {
			echo 'Please enter some text';
			die;
		}

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		// echo '<pre>';print_r($response);
		foreach ($response as $key => $data) {
			$pdf->SetX(100);
			$pdf->Ln(40);
			
			if ($key == 'pla_text' && !empty($pla_text)) {
				foreach ($data as $key2) {
						
					$pdf->SetFillColor(255, 102, 102); // input R ,G , B 
					$pdf->SetDrawColor(255, 1, 1); // input R , G , B 
					$pdf->SetLineWidth(1);
					$pdf->MultiCell(170, 10, $key2, 1, 'L', true);
				}
			}
		
			if ($key == 'ref_link' && !empty($ref_link)) {
				foreach ($data as $key3) {
					$pdf->SetFillColor(51, 153, 255); // input R ,G , B 
					$pdf->SetDrawColor(0, 0, 153); // input R , G , B 
					$pdf->SetLineWidth(1);
					$pdf->MultiCell(170, 10, $key3, 1, 'L', true);
				}
			}
			if ($key == 'plagiarism') {
				$pdf->SetFillColor(255, 51, 0); // input R ,G , B 
				$pdf->SetDrawColor(255, 1, 1); // input R , G , B 
				$pdf->SetLineWidth(1);
				$pdf->MultiCell(170, 10, $data, 1, 'L', true);
			}

			if ($key == 'uniqueness') {
				$pdf->SetFillColor(0, 255, 0); // input R ,G , B 
				$pdf->SetDrawColor(0, 102, 0); // input R , G , B 
				$pdf->SetLineWidth(1);
				$pdf->MultiCell(170, 10, $data, 1, 'L', true);
			}
		}
		
		$pdf->Output('plagiarism_report.pdf', 'I');
		// $pdf->Output('my_file.pdf','D'); // to force download 
	}
	public function privacyPolicy()
	{

		$data['title'] = 'GoGraders.com | Privacy Policy';
		$data['page_name'] = 'PRIVACY POLICY';

		$var['content'] = $this->load->view('frontend/privacy_policy', $data, true);
		$this->load->view('frontend/template2021', $var);
	}
	public function servicesPolicy()
	{

		$data['title'] = 'GoGraders.com | SERVICE POLICIES';
		$data['page_name'] = 'SERVICE POLICIES';

		$var['content'] = $this->load->view('frontend/service_policy', $data, true);
		$this->load->view('frontend/template2021', $var);
	}

	public function download()
	{
		$fullUrl = '';
		$filenamed =  $this->uri->segment(3);
		$fileNameActual =  $this->uri->segment(4);
		$fileDirectory =  $this->uri->segment(5);

		$newUrl = decode($filenamed);
		$domain_name = explode("/", $newUrl);

		if ($_SERVER['HTTP_HOST'] == "localhost") {
			$fullUrl = $domain_name[0] . '//' . $domain_name[2] . '/' . $domain_name[3];
		} else {
			$fullUrl = $domain_name[0] . '//' . $domain_name[2];
		}

		$file = $fullUrl . '/uploads/writer_uploads/' . $fileDirectory . '/' . $fileNameActual;

		$data = file_get_contents($file);
		force_download($fileNameActual, $data);
		exit;
	}

	public function downloadEncFile()
	{
		$fullUrl = '';
		$filenamed =  $this->uri->segment(3);
		$fileNameActual =  $this->uri->segment(4);
		$fileDirectory =  'uploads/';

		$newUrl = decode($filenamed);
		$domain_name = explode("/", $newUrl);

		$fileNameActual = decode($fileNameActual);
		if ($_SERVER['HTTP_HOST'] == "localhost") {
			$fullUrl = $domain_name[0] . '//' . $domain_name[2] . '/' . $domain_name[3];
		} else {
			$fullUrl = $domain_name[0] . '//' . $domain_name[2];
		}
		$file = $fullUrl . '/' . $fileDirectory . '/' . $fileNameActual;
		$data = file_get_contents($file);
		force_download($fileNameActual, $data);
		exit;
	}
}
