<?php
class ModelVendorLtsCommission extends Model {
	public function getCommissions($data = array()) {

		// $sql = "SELECT lc.*, (SELECT lv.store_name FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_name,  (SELECT lv.store_owner FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_owner, (SELECT o.currency_code FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_code, (SELECT o.currency_value FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_value, (SELECT lop.price FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_product_id = lc.order_product_id) AS price, (SELECT op.name FROM " . DB_PREFIX . "order_product op WHERE op.order_product_id = lc.order_product_id) AS name, (SELECT lop.quantity FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_product_id = lc.order_product_id) AS quantity, (SELECT lop.total FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_product_id = lc.order_product_id) AS total FROM " . DB_PREFIX . "lts_commission lc WHERE lc.vendor_commission_id > 0 AND lc.type = 'sale' AND lc.status = '1' AND lc.amount>'0.00'";
		$sql="SELECT lc.*, (SELECT lv.store_name FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_name,  (SELECT lv.store_owner FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_owner, (SELECT CONCAT(o.firstname,' ', o.lastname) FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS customers, (SELECT o.currency_code FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_code, (SELECT o.order_status_id FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS order_status_id, (SELECT o.currency_value FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_value, (SELECT op.name FROM " . DB_PREFIX . "order_product op WHERE op.order_id = lc.order_id) AS name, (SELECT lop.quantity FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_id = lc.order_id  ) AS quantity, (SELECT lop.total FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_id = lc.order_id ) AS total FROM " . DB_PREFIX . "lts_commission lc WHERE lc.vendor_commission_id > 0 AND lc.type = 'sale' AND lc.status = '1'";


		if (!empty($data['filter_order_id'])) {
			$sql .= " AND lc.order_id = '" . (int)$data['filter_order_id'] . "'";
		}
		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(lc.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		 $sort_data = array(
		 	'store_owner',
		 	'lc.order_id',
		 	'store_name',		 	 
		 	'name',
		 	'quantity',
		 	'total',
		 	'lc.amount',
		 	'lc.date_added',
		 );

		 if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
		 	$sql .= " ORDER BY " . $data['sort'];
		 } else {
		 	$sql .= " ORDER BY lc.date_added";
		 }

		 if (isset($data['order']) && ($data['order'] == 'DESC')) {
		 	$sql .= " DESC";
		 } else {
		 	$sql .= " ASC";
		 }

		 if (isset($data['start']) || isset($data['limit'])) {
		 	if ($data['start'] < 0) {
		 		$data['start'] = 0;
		 	}

		 	if ($data['limit'] < 1) {
		 		$data['limit'] = 20;
		 	}

		 	$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		 }

		 $query = $this->db->query($sql);
		 
		 return $query->rows;
	}

	// public function get_all_commission($data = array()) {

	// 	$sql = "SELECT * FROM " . DB_PREFIX . "lts_commission lc WHERE lc.order_status_id=5";

	// 	 $sort_data = array(
	// 	 	'store_owner',
	// 	 	'store_name',
	// 	 	'price',
	// 	 	'name',
	// 	 	'quantity',
	// 	 	'total',
	// 	 	'lc.order_id',
	// 	 	'lc.amount',
	// 	 	'lc.date_added',
	// 	 );

	// 	 if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
	// 	 	$sql .= " ORDER BY " . $data['sort'];
	// 	 } else {
	// 	 	$sql .= " ORDER BY lc.date_added";
	// 	 }

	// 	 if (isset($data['order']) && ($data['order'] == 'DESC')) {
	// 	 	$sql .= " DESC";
	// 	 } else {
	// 	 	$sql .= " ASC";
	// 	 }

	// 	 if (isset($data['start']) || isset($data['limit'])) {
	// 	 	if ($data['start'] < 0) {
	// 	 		$data['start'] = 0;
	// 	 	}

	// 	 	if ($data['limit'] < 1) {
	// 	 		$data['limit'] = 20;
	// 	 	}

	// 	 	$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
	// 	 }

	// 	 $query = $this->db->query($sql);
		 
	// 	 return $query->rows;
	// }


	// public function delete()
	// {
	// 	$this->db->query("DELETE FROM " .DB_PREFIX. "lts_commission WHERE amount ='0'");
	// }
	
	public function getTotalCommissions($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "lts_commission WHERE status='1'";
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	 
	public function update_withdrawal($data = array())
	{
		$price=0;	 		  

		 	foreach($data as $result)
		 	{
		 		$amount = $this->db->query("SELECT (op.total-lp.amount) as price , op.vendor_id as vendor_id FROM " . DB_PREFIX . "lts_order_product as op," . DB_PREFIX . "lts_commission as lp where op.vendor_id='".$result['vendor_id']."' and op.order_id='".$result['order_id']."'"); 

		 		$exist_row=$this->db->query("SELECT vendor_id FROM " . DB_PREFIX . "lts_withdrawal WHERE vendor_id='".$amount->row['vendor_id']."'");

		 		if($exist_row->num_rows>0)
		 		{
		 		$this->db->query("UPDATE " . DB_PREFIX . "lts_withdrawal SET amount= amount + '".$amount->row['price']."' WHERE vendor_id ='".$exist_row->row['vendor_id']."'");
		 		}
		 		else
		 		{
		 		$this->db->query("INSERT INTO " . DB_PREFIX . "lts_withdrawal (`vendor_id`, `vendor_name`, `amount`, `status`) VALUES ('".$result['vendor_id']."', '".$result['store_owner']."', '".$amount->row['price']."', 2 )");		 			 
		 		}
			}
		 	
	}
}  