		<?php


		class Order_model extends CI_Model
			{
				function __construct() {
					parent::__construct();
				}







			public function revisionOrder($orderid) {
				$this->db->insert("revisions", $orderid); 
				return  true;
			} 
			public function save_revision_data($data) {   // insert files into revisions files table

				$this->db->insert('revision_files',$data);
				$this->db->insert_id();
				return true;

			}

			public function requestRevisionOrder($orderdata) {
				$this->db->insert("revisions", $orderdata); 
				$lastId =  $this->db->insert_id();
				return  $lastId;
			}   



			public function get_last_revision_id($orderid) {

				$query = $this->db->query("SELECT * FROM revisions WHERE order_id = '$orderid' ORDER BY revision_id DESC LIMIT 1");
				$result = $query->row();
				return $result;
			}  





			public function total_revisions($clientEmail){
				$this->db->select('*');
				$this->db->from("revised_work");
				$this->db->join('orders', 'orders.id = revised_work.order_id');
				$this->db->join('revised_work_files', 'revised_work_files.revised_work_id = revised_work.revised_work_id');
				$this->db->group_by('revised_work.revised_work_id');
				$this->db->where('orders.client_email',$clientEmail);
				$this->db->where('revised_work.status !=',1);
				$query_result = $this->db->get();
				$result = $query_result ->num_rows();
				if($result>0)
				return $result;
				else return 0;
			}

			public function update_total_rivisions($revision_id,$dataStatus){
				$this->db->set($dataStatus);
				$this->db->where("revision_id", $revision_id);
				$this->db->update("revised_work", $dataStatus);
				return true;
			}


		}