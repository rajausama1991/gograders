<?php if (!defined('BASEPATH')) exit('No direct script  allow');

class Common_model extends CI_Model
{

	function select_all($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);
		// return $this->db->get();
		$query =  $this->db->get();
		return $query->result();
	}

	function increament_in_field($fieldname, $fieldincreament, $table, $where)
	{
		$this->db->where($where);
		$this->db->set($fieldname, $fieldname . "+" . $fieldincreament, FALSE);
		$this->db->update($table);
	}


	function decreament_in_field($fieldname, $fieldincreament, $table, $where)
	{
		$this->db->where($where);
		$this->db->set($fieldname, $fieldname . "-" . $fieldincreament, FALSE);
		$this->db->update($table);
	}


	function select_where($select, $table, $where)
	{
		// print_r($where);
		// die;
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		// return $this->db->get();
		$query =  $this->db->get();
		return $query->result();
	}

	function select_where_pagination($select, $table, $where, $startfrom, $end)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->limit($startfrom, $end);
		$this->db->where($where);
		return $this->db->get();
	}


	function select_where_sort($select, $table, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		return $this->db->get();
	}

	function select_groupby($select, $table, $where, $groupby)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->group_by($groupby);
		return $this->db->get();
	}

	function select_groupby_all($select, $table, $groupby)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->group_by($groupby);
		return $this->db->get();
	}


	function select_distinct($select, $table, $where)
	{
		$this->db->distinct($select);
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}


	function select_where_in($select, $table, $where_in, $in_fld)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, $where_in);
		$this->db->group_by($select);
		return $this->db->get();
	}

	function select_where_inn($select, $table, $where_in, $in_fld)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, $where_in);
		// $this->db->group_by($select);
		$query = $this->db->get();
		return $query->result();
	}


	function select_single_field($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$qry = $this->db->get();
		$rr = $qry->row_array();
		return $rr[$select];
	}

	function select_limit_order($select, $table, $page, $recordperpage, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}


	function select_without_where_ASC_DESC_WITH_LIMIT($select, $table, $orderBy_columName, $ASC_DESC, $svalue, $LIMIT)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$this->db->limit($LIMIT, $svalue);
		$result = $this->db->get();
		return $result;
	}


	function select_where_ASC_DESC_WITH_LIMIT($select, $table, $where, $orderBy_columName, $ASC_DESC, $svalue, $LIMIT)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$this->db->limit($LIMIT, $svalue);
		$result = $this->db->get();
		return $result;
	}


	function select_where_and_orwhere_ASC_DESC($select, $table, $where, $or_where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->or_where($or_where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}


	function select_where_ASC_DESC($select, $table, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	function select_where_ASC_DESC_Last_ID($select, $table, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$this->db->limit(1, 0);
		$result = $this->db->get();
		//return $result->$row;	
		if ($result->num_rows > 0) {
			$row = $result->row();
			return $row->$orderBy_columName;
		} else {
			return 0;
		}
	}

	function select_without_where_order($select, $table, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	function select_where_order_where($select, $table, $orderBy_columName, $ASC_DESC, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	function select_where_order($select, $table, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	function select_where_limit_order($select, $table, $where, $page, $recordperpage, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	function select_where_table_rows($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function select_where_return_row($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}
	function select_return_row_ASD_DESC($select, $table, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result->row();
	}

	function select_where_return_row_limit_1($select, $table, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit(1, 0);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$query = $this->db->get();
		return $query->row();
	}

	function select_where_return_row_with_limit($select, $table, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit(1);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$query = $this->db->get();
		return $query->row();
	}

	function select_data_where_return_row($where)
	{

		$sql = "select * from products where cat_id like '%$where%' ";
		return $this->db->query($sql);
	}

	function select_limit($select, $table, $page, $recordperpage)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->limit($recordperpage, $page);
		$result = $this->db->get();
		return $result;
	}


	function select_table_rows($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->num_rows();
	}


	function update_array($where, $table, $data)
	{
		$this->db->where($where);
		$query = $this->db->update($table, $data);
		if ($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function update_array_check($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);

		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			return FALSE;
			// generate an error... or use the log_message() function to log your error
		} else {
			return TRUE;
		}
	}

	function update_data_array($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function insert_array($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	function delete_where($where, $tbl_name, $columnName = null, $whereNotIn = null)
	{
		$this->db->where($where);
		if ($columnName && $whereNotIn)
			$this->db->where_not_in($columnName, $whereNotIn);
		$this->db->delete($tbl_name);
		return true;
	}

	function join_two_tab($select, $from, $jointab, $condition, $orderBy_columName, $ASC_DESC)
	{

		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointab, $condition);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		return $this->db->get();
	}

	function join_two_tab_where($select, $from, $jointable, $condition, $left_right, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition, $left_right);
		$this->db->where($where);
		//$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$query = $this->db->get();
		return $query->result();
	}


	function join_two_tab_where_numrow($select, $from, $jointable, $condition, $where)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}


	function select_or_like($select, $table, $where, $orcondition, $recordperpage, $page, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		//$this->db->like( $like );
		$this->db->or_like($orcondition);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		return $this->db->get();
	}

	function like_search($select, $table, $where, $like, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->or_like($like);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$this->db->where($where);
		return $this->db->get();
	}


	function select_or_like_rows($select, $table, $where, $orcondition)
	{
		$this->db->select($select);
		$this->db->from($table);
		//$this->db->like( $like );
		$this->db->or_like($orcondition);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}


	function join_tab_where($select, $from, $jointab, $condition, $where, $orderBy_columName, $ASC_DESC)
	{

		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointab, $condition);
		$this->db->where($where);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		return $this->db->get();
	}


	function select_where_like($select, $table, $where_con, $where, $limit)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where_con);
		$this->db->like($where);
		$this->db->limit($limit);
		return $this->db->get();
	}


	function join_three_tab_where($select, $from, $jointable1, $condition1, $jointable2, $condition2, $left_right, $where, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable1, $condition1, $left_right);
		$this->db->join($jointable2, $condition2, $left_right);
		$this->db->where($where);
		// $this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$query = $this->db->get();
		return $query->result();
	}

	function join_three_tab_where_rows($select, $from, $jointable1, $condition1, $jointable2, $condition2, $where)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable1, $condition1);
		$this->db->join($jointable2, $condition2);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}


	function select_limit_by($select, $table, $where, $page, $recordperpage, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}


	function join_two_tab_where_numrows($select, $from, $jointable, $condition, $where)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition);
		$this->db->where($where);
		return $this->db->get();
	}


	function select_limit_where($select, $table, $where, $page, $recordperpage)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$result = $this->db->get();
		return $result;
	}


	function select_table_rows_where($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}


	function join_two_tab_where_limit($select, $from, $jointable, $condition, $where, $page, $recordperpage)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$query = $this->db->get();
		return $query;
	}


	function join_two_tab_where_numrw($select, $from, $jointable, $condition, $where)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function join_two_tab_where_simple($select, $from, $jointable, $condition, $where)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition);
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}


	function join_two_tab_where_groupby($select, $from, $jointable, $condition, $left_right, $where, $group_by, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($from);
		$this->db->join($jointable, $condition, $left_right);
		$this->db->where($where);
		$this->db->group_by($group_by);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$query = $this->db->get();
		return $query;
	}


	function select_limit_order_where($select, $table, $where, $page, $recordperpage, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->limit($recordperpage, $page);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}

	/******************************* Listing Order ******************************/

	function listing_order($table, $col, $ac)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($col, $ac);
		return $result = $this->db->get();
	}


	/******************** Search By Tags ********************/

	function productbytagssearch($search_text)
	{
		$sql = "select * from wl_products where (tags like '%$search_text%') order by products_sort";
		return $this->db->query($sql);
	}

	/******************** Search ********************/

	function search($search_text)
	{
		//echo "select * from wl_products where (prod_name like '%$search_text%' or prod_item_no like '%$search_text%'  or prod_desc like '%$search_text%') order by products_sort"; exit;
		$sql = "select * from wl_products where (prod_name like '%$search_text%' or prod_item_no like '%$search_text%'  or prod_desc like '%$search_text%') order by products_sort";
		return $this->db->query($sql);
	}


	/******************** Search ********************/

	function searchcustom($search_text)
	{
		//echo "select * from wl_products where (prod_name like '%$search_text%' or prod_item_no like '%$search_text%'  or prod_desc like '%$search_text%') order by products_sort"; exit;
		$sql = "teachers where (t_skills like '%$search_text%') order by t_id limit 50";
		return $this->db->get($sql)->result_array();
	}




	/******************** Search ********************/

	// function searchcustom($search_text)
	// {
	// 	//echo "select * from wl_products where (prod_name like '%$search_text%' or prod_item_no like '%$search_text%'  or prod_desc like '%$search_text%') order by products_sort"; exit;
	// 	$sql	=	"wl_products where (prod_name like '%$search_text%' or prod_item_no like '%$search_text%') order by products_sort limit 5";
	// 	return $this->db->get($sql)->result_array();
	// }	


	//	function search_where($search_text)select_where
	//	{
	//		$sql	=	"select * from wl_products where prod_name like '%$search_text%' ";
	//		return $this->db->query($sql);
	//	}

	function search_where($select, $table, $in_fld, $where_in, $col, $like)
	{
		//		print_r($like);exit;
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, ($where_in));
		$this->db->like($col, $like);
		$result = $this->db->get();
		return $result;
	}

	function select_where_order_2($select, $table, $limit, $orderBy_columName, $ASC_DESC)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where('order_id >', $limit);
		$this->db->order_by($orderBy_columName, $ASC_DESC);
		$result = $this->db->get();
		return $result;
	}


	/**************************** select query for array *********************************/

	function selectdata_lang_array($table, $field, $orderby, $where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by($field, $orderby);
		$result = $this->db->get();
		return $result;
	}


	function select_sale_sum_by_date($select, $table, $where)
	{
		$this->db->select_sum($select);
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}


	function select_sum_of_field($select, $selectas, $table, $where)
	{
		$this->db->select_sum($select, $selectas);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->result();

		return $result[0]->$selectas;
	}


	function select_where_in2($select, $table, $where_in, $in_fld)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, ($where_in));
		return $this->db->get();
	}

	function select_where_in_pagination($select, $table, $where_in, $in_fld, $page, $field, $orderby)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, ($where_in));
		$this->db->order_by($field, $orderby);
		$this->db->limit($page);

		return $this->db->get();
	}


	function select_where_in_pagination3($select, $table, $where_in, $in_fld, $page, $field, $orderby)
	{
		$sql = "select * from wl_products where (FIND_IN_SET (" . $where_in . ",$in_fld)) and lngid='en' order by $orderby limit $page";
		return $this->db->query($sql);
	}


	function select_where_invoice_edit($select, $table, $where1, $where2)
	{
		$sql = "select $select from $table where ((user_id=$where1 and invoice_status=0 and is_delete=0 and order_complete=1) or (invoice_id=$where2 and invoice_status=1 and is_delete=0 and order_complete=1)) order by customer_order_id";
		return $this->db->query($sql);
	}


	function select_where_in_pagination2($select, $table, $where_in, $in_fld, $recordperpage, $page, $field, $orderby)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where_in($in_fld, ($where_in));
		$this->db->order_by($field, $orderby);
		$this->db->limit($recordperpage, $page);

		return $this->db->get();
	}

	// september 2020


	function select_max_value($select, $selectas, $table, $where)
	{
		$this->db->select_max($select, $selectas);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->result();
		return $result[0]->$selectas;
	}


	function select_most_occured_value($product_id, $order_date)
	{

		$sql = "select avail_qty from wl_order_line where product_id=$product_id AND order_complete = 1 AND order_complete_date > $order_date AND is_delete = 0 GROUP BY avail_qty HAVING COUNT(avail_qty) >1 order by avail_qty desc limit 1";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result[0]->avail_qty;
	}


	function select_where_limit($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		return $this->db->get();
	}

	function select_customer()
	{
		$this->db->select('*');
		$this->db->from('wl_customers');
		// $this->db->where('user_type','direct_customer');

		$query = $this->db->get();
		return $query->result();


		// echo "<pre>";
		// print_r($query);
		// die;
		// return $query;
	}

	function select_order_detail($order_id)
	{
		$this->db->select('*');
		$this->db->from('points_order');
		$this->db->where('points_order_id', $order_id);

		$query = $this->db->get();
		return $query->result();
	}


	function update_order_status($data)
	{
		$this->db->set('payment_status', $data['payment_status']);
		$this->db->where('points_order_id', $data['customer_order_id']);
		$query = $this->db->update('points_order');

		if ($query) {
			return TRUE;
		}
	}

	function update_blog_views($data)
	{

		// echo "<pre>";
		// // print_r($data);
		// echo $data['view_count'];
		// die;
		// $this->db->set('view_count',$data['view_count']);
		//       $this->db->where('news_id',$data['news_id']);

		//       $query=$this->db->update('wl_blogs');


		$this->db->where('news_id', $data['news_id']);
		$this->db->set('view_count', $data['view_count'] + 1);
		$query = $this->db->update('wl_blogs');

		if ($query) {
			return TRUE;
		}
	}

	function select_return_row($select, $table)
	{
		$this->db->select($select);
		$this->db->from($table);
		// $this->db->where( $where );
		$this->db->order_by('news_id', 'DESC');
		// $this->db->limit(0,1);
		$query = $this->db->get();
		return $query->row();
	}

	function select_order_per_product($products_id)
	{

		$this->db->where(['product_id' => $products_id]);
		return $this->db->get('wl_order_line');
	}


	function select_where_teachers_skills($where_in, $startfrom, $end)
	{
		if ($where_in != "") {
			// $sql="select * from wl_products_compare where (user_id=".$where_in.") ORDER BY products_id asc limit $startfrom,$end";
			// return  $this->db->query($sql);

			$sql = "teachers where (t_skills like '%$where_in%') order by t_id asc limit $startfrom,$end";
			return $this->db->get($sql)->result_array();
		}
	}

	function count_total_rating($teacher_id = NULL)
	{
		$this->db->select('AVG(rating_no) as average');
		$this->db->where('teacher_id', $teacher_id);
		$this->db->from('ratings');
		$query = $this->db->get();

		$total_person = $query->num_rows();

		$average_return = 0;


		foreach ($query->result() as $key => $value) {
			# code...

			$average_return = $value->average / $total_person;
			// print_r($value);
		}
		return $average_return;
	}

	function select_single_row($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$qry = $this->db->get();
		$rr = $qry->row_array();
		return $rr;
	}


	function select_routes_where_return_row($select, $table, $where)
	{

		// $sql	=	"select * from user_location_history where '$where' ";

		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$this->db->order_by('location_id', 'DESC');
		$qry = $this->db->get();
		$rr = $qry->row_array();
		return $rr;
	}


	function selectstrcLeftJoin($order_id)
	{

		$this->db->select('*');
		$this->db->from('order_details'); // this is first table name
		$this->db->join('measurements', 'measurements.meas_id = order_details.meas_id', 'left');
		$this->db->where('order_details.order_id', $order_id);
		// this is second table name with both table ids
		$query = $this->db->get();
		return $query;
	}

	function selectstrcLeftJoins($order_id, $cat_id)
	{

		$this->db->select('*');
		$this->db->from('order_details'); // this is first table name
		$this->db->join('measurements', 'measurements.meas_id = order_details.meas_id AND (order_details.cat_id=' . $cat_id . ') ', 'inner');
		$this->db->where('order_details.order_id', $order_id);
		// this is second table name with both table ids
		$query = $this->db->get();
		return $query;
	}

	// function selectstrcLeftJoin2($order_id)
	// {

	// 	$this->db->select('*');
	// 	$this->db->from('orders'); // this is first table name
	// 	$this->db->join('categories', 'categories.cat_id = orders.cat_id', 'left');
	// 	$this->db->where('orders.order_id', $order_id);
	// 	// this is second table name with both table ids
	// 	$query = $this->db->get();
	// 	return $query;

	// }

	// $this->db->select('*');
	// $this->db->from('Album a'); 
	// $this->db->join('Category b', 'b.cat_id=a.cat_id', 'left');
	// $this->db->join('Soundtrack c', 'c.album_id=a.album_id', 'left');
	// $this->db->where('c.album_id',$id);
	// $this->db->order_by('c.track_title','asc');         
	// $query = $this->db->get();

	function selectstrcLeftJoin2($order_id)
	{

		$this->db->select('*');
		$this->db->from('orders o'); // this is first table name
		$this->db->join('order_line ol', 'ol.order_id=o.order_id', 'left');
		$this->db->join('categories c', 'c.cat_id = ol.cat_id', 'left');
		$this->db->where('o.order_id', $order_id);
		// this is second table name with both table ids
		$query = $this->db->get();
		return $query;
	}

	function selectDependentMeasurementLeftJoin($dependent_id, $cat_id)
	{
		$user_id = $this->session->userdata('id');

		$this->db->select('*,cm.meas_id');
		$this->db->from('categories_measurement cm');
		$this->db->join('measurements m', 'm.meas_id = cm.meas_id');
		$this->db->join('user_tmp_order_details ud', 'cm.meas_id = ud.meas_id');
		$this->db->where(array('ud.dependent_id' => $dependent_id, 'ud.user_id' => $user_id, 'cm.cat_id' => $cat_id, 'ud.cat_id' => $cat_id));
		// $this->db->where(array('ud.dependent_id' => $dependent_id, 'ud.user_id' => $user_id, 'cm.cat_id' => $cat_id));

		$query = $this->db->get();
		return $query;

		//		echo "<pre>";
		//		print_r($query->result());
		//		die;

	}

	function selectMeasurementLeftJoin()
	{

		$user_id = $this->session->userdata('id');
		$this->db->select('measurements.meas_id AS measurementId,measurements.meas_name_eng,user_tmp_order_details.*');
		$this->db->from('measurements'); // this is first table name
		$this->db->join('user_tmp_order_details', 'measurements.meas_id = user_tmp_order_details.meas_id AND (user_tmp_order_details.dependent_id=0 AND user_tmp_order_details.user_id=' . $user_id . ') OR (user_tmp_order_details.dependent_id IS NULL AND user_tmp_order_details.user_id IS NULL)', 'left');
		$this->db->group_by('measurements.meas_id');
		$this->db->order_by("user_tmp_order_details.tmp_order_detail_id", "DESC");
		// this is second table name with both table ids
		$query = $this->db->get();

		//		print_r($this->db->last_query());
		//		die;
		return $query->result();
	}

	function selectDependentMeasDetailsLeftJoin($dependent_id)
	{

		$user_id = $this->session->userdata('id');
		$this->db->select('measurements.meas_id AS measurementId,measurements.meas_name_eng,user_tmp_order_details.*');
		$this->db->from('measurements'); // this is first table name
		$this->db->join('user_tmp_order_details', 'measurements.meas_id = user_tmp_order_details.meas_id AND (user_tmp_order_details.dependent_id=' . $dependent_id . ' AND user_tmp_order_details.user_id=' . $user_id . ') OR (user_tmp_order_details.dependent_id IS NULL AND user_tmp_order_details.user_id IS NULL)', 'left');
		//		$this->db->where(array('user_tmp_order_details.dependent_id' => 0, 'user_tmp_order_details.user_id' => $user_id));

		$this->db->group_by('measurements.meas_id');
		$this->db->order_by("user_tmp_order_details.tmp_order_detail_id", "DESC");
		// this is second table name with both table ids
		$query = $this->db->get();
		$array = array();

		return $query->result();
	}


	function selectMeasurementLeftJoinOnLoadFeilds($cat_id)
	{

		$user_id = $this->session->userdata('id');

		$this->db->select('*,cm.meas_id');
		$this->db->from('categories_measurement cm');
		$this->db->join('measurements m', 'm.meas_id = cm.meas_id');
		$this->db->join('user_tmp_order_details ud', 'cm.meas_id = ud.meas_id');
		// old line 
		$this->db->where(array('ud.dependent_id' => 0, 'cm.cat_id' => $cat_id, 'ud.user_id' => $user_id, 'ud.cat_id' => $cat_id));

		// $this->db->where(array('ud.dependent_id' => 0, 'cm.cat_id' => $cat_id, 'ud.user_id' => $user_id));

		$query = $this->db->get();
		return $query->result();
	}




	function select_where_login_reg_dependents()
	{

		$user_id = $this->session->userdata('id');
		$session_id = session_id();
		$sql = "SELECT * FROM dependents WHERE (user_id='$user_id') OR (session_id='$session_id')";


		return $this->db->query($sql);
	}

	function select_where_result($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);

		$query = $this->db->get();
		return $query->result();
	}

	function select_where_return_row_array($select, $table, $where)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->row_array();
	}
}
