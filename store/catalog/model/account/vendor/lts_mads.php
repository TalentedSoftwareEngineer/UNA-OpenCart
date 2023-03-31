<?php
class ModelAccountvendorLtsMads extends Model {
	public function addMads($data, $vendor_id, $customer_id) {

		if ($this->config->get('module_lts_vendor_product_approval')) {
			$approved = 1;
		} else {
			$approved = 0;
		}
		
		$this->db->query("INSERT INTO " . DB_PREFIX . "product SET model = '" . '' . "', sku = '" . '' . "', upc = '" . '' . "', ean = '" . '' . "', jan = '" . '' . "', isbn = '" . '' . "', mpn = '" . '' . "', location = '" . '' . "', quantity = '" . 1 . "', minimum = '" . 100000 . "', subtract = '" . 1 . "', stock_status_id = '" . 6 . "', date_available = '" . 'NOW()' . "', manufacturer_id = '" . 0 . "', shipping = '" . 1 . "', price = '" . 0 . "', points = '" . 0 . "', weight = '" . (float) 0 . "', weight_class_id = '" . (int) 1 . "', length = '" . (float) 0 . "', width = '" . (float) 0 . "', height = '" . (float) 0 . "', length_class_id = '" . (int) 1 . "', status = '" . (int)1 . "', tax_class_id = '" . (int) 0 . "', sort_order = '" . (int) 1 . "', date_added = NOW(), date_modified = NOW()");

		$product_id = $this->db->getLastId();

		$this->db->query("INSERT INTO " . DB_PREFIX . "lts_product SET product_id = '" . (int) $product_id . "', vendor_id = '" . (int)$vendor_id . "', quantity = '" . (int) 1 . "', status = '" . (int)$approved  . "',   approved ='". (int)$approved ."', price = '" . (float) 0 . "'");

		$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $data['main_image'] . "' WHERE product_id = '" . (int) $product_id . "'");
	
		$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int) $product_id . "', language_id = '" . (int) 1 . "', name = '" . $data['title'] . "', description = '" . $data['description'] . "', tag = '" . '' . "', meta_title = '" . '' . "', meta_description = '" . '' . "', meta_keyword = '" . '' . "'");

		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store SET product_id = '" . (int) $product_id . "', store_id = '" . (int) 0 . "'");

		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int) $product_id . "', category_id = '" . (int) $data['category_id'] . "'");

		$this->db->query("INSERT INTO " . DB_PREFIX . "lts_mads SET product_id = '" . (int) $product_id . "', customer_id = '" . (int) $customer_id . "', category_id = '" . (int) $data['category_id'] . "', vendor_id = '" . (int) $vendor_id . "', name = '" . $data['title'] . "', commission = '" . $data['commission'] . "', description = '" . $data['description'] . "', message = '" . $data['message_purchaser'] . "', image = '" . $data['main_image'] . "', sub_products = '" . $data['sub_products'] . "', sub_products_quantity = '" . $data['sub_products_quantity'] . "'");

		$this->cache->delete('product'); 

		return $product_id;
	}

	public function editMads($mads_id, $product_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET date_modified = NOW() WHERE product_id = '" . (int) $product_id . "'");
		if (isset($data['main_image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($data['main_image']) . "' WHERE product_id = '" . (int) $product_id . "'");
		}
		$this->db->query("UPDATE " . DB_PREFIX . "product_description SET name = '" . $data['title'] . "', description = '" . $data['description'] . "' WHERE product_id = " . (int) $product_id);

		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . (int) $product_id . "', category_id = '" . (int) $data['category_id'] . "'");
		$this->db->query("UPDATE " . DB_PREFIX . "lts_mads SET name = '" . $data['title'] . "', commission = '" . $data['commission'] . "', category_id = '" . $data['category_id'] . "', description = '" . $data['description'] . "', message = '" . $data['message_purchaser'] . "', image = '" . $data['main_image'] . "', sub_products = '" . $data['sub_products'] . "', sub_products_quantity = '" . $data['sub_products_quantity'] . "' WHERE mads_id = " . (int) $mads_id);

		$this->cache->delete('product');
		return 1;
	}

	public function deleteMads($product_id, $vendor_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "product WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "lts_product WHERE product_id = '" . (int) $product_id . "' AND vendor_id = '" . (int)$vendor_id . "'");
	
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_attribute WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_description WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_discount WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_filter WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_option WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_related WHERE related_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_reward WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_special WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_download WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_layout WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "product_recurring WHERE product_id = " . (int) $product_id);
		$this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_product WHERE product_id = '" . (int) $product_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "lts_mads WHERE product_id = '" . (int) $product_id . "'");
	
		$this->cache->delete('product');
	}

	public function getMadsById($mads_id) {
		$sql = "SELECT lm.*, pd.*, p.*, cd.`name` AS category_name  FROM " . DB_PREFIX . "lts_mads lm LEFT JOIN " . DB_PREFIX . "product_description pd ON (lm.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product p ON(p.product_id = lm.product_id) LEFT JOIN " . DB_PREFIX . "category_description cd ON(cd.`category_id` = lm.category_id) WHERE  pd.language_id = '" . (int) $this->config->get('config_language_id') . "' AND lm.mads_id = '" . (int)$mads_id . "' ";
		$query = $this->db->query($sql);
		return $query->row;
	}

	public function getMadsByProductId($product_id) {
		$sql = "SELECT lm.*, pd.*, p.*, cd.`name` AS category_name  FROM " . DB_PREFIX . "lts_mads lm LEFT JOIN " . DB_PREFIX . "product_description pd ON (lm.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product p ON(p.product_id = lm.product_id) LEFT JOIN " . DB_PREFIX . "category_description cd ON(cd.`category_id` = lm.category_id) WHERE lm.product_id = '" . (int)$product_id . "' ";
		$query = $this->db->query($sql);
		return $query->row;
	}

	public function getMads($data = array()) {
 
		$sql = "SELECT lm.*, pd.*, p.*, cd.`name` AS category_name  FROM " . DB_PREFIX . "lts_mads lm LEFT JOIN " . DB_PREFIX . "product_description pd ON (lm.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product p ON(p.product_id = lm.product_id) LEFT JOIN " . DB_PREFIX . "category_description cd ON(cd.`category_id` = lm.category_id) WHERE  pd.language_id = '" . (int) $this->config->get('config_language_id') . "' AND lm.vendor_id = '" . (int)$data['vendor_id'] . "' ";
	
		if (!empty($data['filter_name'])) {
		  $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
	
		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
		  $sql .= " AND p.status = '" . (int) $data['filter_status'] . "'";
		}
	
		$sql .= " GROUP BY p.product_id";
	
		$sort_data = array(
			'pd.name',
			'lm.total_sellers_accepted',
			'lm.sold_quantity',
			'lm.earnings',
			'p.status',
		);
	
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
		  $sql .= " ORDER BY " . $data['sort'];
		} else {
		  $sql .= " ORDER BY pd.name";
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
	
		  $sql .= " LIMIT " . (int) $data['start'] . "," . (int) $data['limit'];
		}
	
		$query = $this->db->query($sql);
	
		return $query->rows;
	}

	public function getTotalMads($data = array()) {
		$sql = "SELECT COUNT(DISTINCT lm.product_id) AS total FROM " . DB_PREFIX . "lts_mads lm LEFT JOIN " . DB_PREFIX . "product p ON (lm.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_description pd ON (lm.product_id = pd.product_id) ";
	
	
		$sql .= " WHERE pd.language_id = '" . (int) $this->config->get('config_language_id') . "' AND lm.vendor_id='" . (int)$data['vendor_id'] . "'";
	
		if (!empty($data['filter_name'])) {
		  $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
	
		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
		  $sql .= " AND p.status = '" . (int) $data['filter_status'] . "'";
		}
	
		$query = $this->db->query($sql);
	
		return $query->row['total'];
	}

	public function getTotalSellersAccepted($product_id) {
		$query = $this->db->query("SELECT COUNT(customer_id) AS total FROM " . DB_PREFIX . "lts_accepted_mads WHERE product_id = " . $product_id . " AND accepted = 1");
	
		return $query->row['total'];
	}

	public function createMadsTable() {
		$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_mads` (
					`mads_id` INT(10) NOT NULL AUTO_INCREMENT,
					`product_id` INT(11) NOT NULL,
					`customer_id` int(11) NOT NULL,
					`vendor_id` int(11) NOT NULL,
					`category_id` int(11) NOT NULL,
					`name` VARCHAR(255) NOT NULL,
					`commission` VARCHAR(255) NOT NULL,
					`description` text NOT NULL,
					`message` text NOT NULL,
					`image` varchar(255) DEFAULT NULL,
					`sub_products` text NOT NULL,
					`sub_products_quantity` text NOT NULL,
					`total_sellers_accepted` INT(22) NOT NULL DEFAULT 0,
					`sold_quantity` INT(22) NOT NULL DEFAULT 0,
					`earnings` decimal(15,4) NOT NULL DEFAULT 0.0000,
					PRIMARY KEY (`mads_id`)
				) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
		$this->db->query($sql);
	}
}