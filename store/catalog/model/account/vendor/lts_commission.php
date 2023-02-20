<?php
class ModelAccountVendorLtsCommission extends Model {
	public function getCommissions($data = array()) {
	$sql = "SELECT lc.*, (SELECT lv.store_name FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_name,  (SELECT lv.store_owner FROM " . DB_PREFIX . "lts_vendor lv WHERE lv.vendor_id = lc.vendor_id) AS store_owner, (SELECT CONCAT(o.firstname,' ', o.lastname) FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS customers, (SELECT o.currency_code FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_code, (SELECT o.order_status_id FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS order_status_id, (SELECT SUM(oc.value) FROM " . DB_PREFIX . "order_total oc WHERE oc.order_id = lc.order_id and code='shipping') AS shipping_amount, (SELECT o.currency_value FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS currency_value, (SELECT op.name FROM " . DB_PREFIX . "order_product op WHERE op.order_id = lc.order_id) AS name, (SELECT lop.quantity FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_id = lc.order_id  ) AS quantity, (SELECT lop.total FROM " . DB_PREFIX . "lts_order_product lop WHERE lop.order_id = lc.order_id ) AS total FROM " . DB_PREFIX . "lts_commission lc WHERE lc.vendor_commission_id > 0 AND lc.type = 'sale' AND lc.status = '1' AND vendor_id='".$data['vendor_id']."'";

		 
		if (!empty($data['filter_order_id'])) {
			$sql .= " AND lc.order_id = '" . (int)$data['filter_order_id'] . "'";
		}		 	 	 

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(lc.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if (!empty($data['filter_date_modified'])) {
			$sql .= " AND DATE(lc.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}


		 $sort_data = array(
		 	'store_owner',
		 	'store_name',
		 	'price',		 
		 	'name',
		 	'customres',
		 	// 'commission',
		 	'quantity',
		 	'total',
		 	'lc.order_id',
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
 	 

	public function getTotalCommissions($data = array()) {
		$sql = "SELECT COUNT(DISTINCT vendor_commission_id) AS total FROM " . DB_PREFIX . "lts_commission WHERE vendor_id = '". (int)$data['vendor_id'] ."'";
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}
	public function get_total_commissions($data = array()) {
		$sql = "SELECT count(order_id) FROM ". DB_PREFIX . "lts_commission WHERE vendor_id='".$data['vendor_id']."' GROUP BY order_id";
		
		$query = $this->db->query($sql);

		return $query->num_rows;
	}

	public function get_commission($data=array())
	{	 
		$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "lts_order_product where vendor_id='".$data['vendor_id']."'"); 		 
		foreach ($query->rows as  $value){	 	 
		$sql="SELECT lc.order_id as order_id, (SELECT o.order_status_id FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS order_status_id, o.currency_code as currency_code, o.currency_value as currency_value, lc.amount as commission, ('".$value['total']."' - lc.amount) as total, op.name as product, CONCAT(o.firstname,' ', o.lastname) as name,lc.date_added, lc.date_modified FROM " . DB_PREFIX . "lts_commission AS lc, " . DB_PREFIX . "order_product op," . DB_PREFIX . "order o WHERE lc.vendor_id = '".$value['vendor_id']."' and lc.order_product_id = '".$value['order_product_id']."' and o.customer_id='".$value['customer_id']."'"; 		


		if(!empty($data['filter_order_status'])) {
				$implode = array();

				$order_statuses = explode(',', $data['filter_order_status']);

				foreach ($order_statuses as $order_status_id) {
					$implode[] = "o.order_status_id = '" . (int)$order_status_id . "'";
				}

				if ($implode) {
					$sql .= " AND (" . implode(" OR ", $implode) . ")";
				}

			} elseif (isset($data['filter_order_status_id']) && $data['filter_order_status_id'] !== '') {
				$sql .= " AND o.order_status_id = '" . (int)$data['filter_order_status_id'] . "'";
			} else {
				$sql .= " AND o.order_status_id > '0'";
			}

		if (!empty($data['filter_order_id'])) {
			$sql .= " AND o.order_id = '" . (int)$data['filter_order_id'] . "'";
		}

		if (!empty($data['filter_customer'])) {
			$sql .= " AND CONCAT(o.firstname, ' ', o.lastname) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(o.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if (!empty($data['filter_date_modified'])) {
			$sql .= " AND DATE(o.date_modified) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}

		 

		$sort_data = array(
			'o.order_id',
			'customer',
			'order_status',
			'o.date_added',
			'o.date_modified',
			'o.total'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY o.order_id";
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
		// echo $sql; die;
		$result[]= $this->db->query($sql)->row;
	
		}		
 
	 	if(isset($result))
		{
		   	return $result;
		}
		else
		{
		   	return ;
		}

	}

	public function get_order_status($order_status_id)
	{
		$sql = "SELECT name FROM " . DB_PREFIX . "order_status WHERE order_status_id = '". $order_status_id ."'";

		$query = $this->db->query($sql);

		return $query->row['name'];
	}

	// public function delete_data($order_id)
	// {
	// 	$sql = "SELECT order_id FROM " . DB_PREFIX . "order WHERE order_id !='".$order_id."'";		
	// 	$query = $this->db->query($sql)->row;
	// 	return $query;
	// }

}  