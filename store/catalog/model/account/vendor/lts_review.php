<?php
class ModelAccountVendorLtsReview extends Model {
	 
	public function addReview($product_id, $data, $vendor_info=[]) { 
	 

		$this->db->query("INSERT INTO " . DB_PREFIX . "review SET author = '" . $this->db->escape($data['name']) . "', customer_id = '" . (int)$this->customer->getId() . "', product_id = '" . (int)$product_id . "', text = '" . $this->db->escape($data['text']) . "', rating = '" . (int)$data['rating'] . "', status= '" .((isset($data['status']) && !empty($data['status']))?$data['status']:0). "', date_added = NOW()");
		$review_id = $this->db->getLastId();   
		if(isset($vendor_info['vendor_id']) && !empty($vendor_info['vendor_id']))
		{			
		 
		$this->db->query("INSERT INTO ". DB_PREFIX ."lts_review SET review_id= '". (int)$review_id ."', product_id = '" . (int)$product_id. "', vendor_id='". (int)$vendor_info['vendor_id'] ."'");
		}

		$this->cache->delete('product');

		return $review_id; 
	} 


	public function editReview($review_id, $vendor_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "review SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE review_id = '" . (int)$review_id . "'");

		$this->db->query("UPDATE " . DB_PREFIX . "lts_review SET review_id= '". (int)$review_id ."', product_id = '". (int)$data['product_id'] ."' WHERE review_id = '". (int)$review_id ."' AND vendor_id='". (int)$vendor_id ."' ");


		$this->cache->delete('product');
	}

	public function deleteReview($review_id, $vendor_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE review_id = '" . (int)$review_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "lts_review WHERE review_id = '" . (int)$review_id . "' AND vendor_id='". (int)$vendor_id ."'");

		$this->cache->delete('product');
	}

	public function getReview($review_id, $vendor_id) {

		$query = $this->db->query("SELECT DISTINCT *, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = r.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS product FROM " . DB_PREFIX . "review r RIGHT JOIN ". DB_PREFIX ."lts_review lr ON (lr.review_id = r.review_id) WHERE r.review_id = '" . (int)$review_id . "' AND lr.vendor_id='". (int)$vendor_id ."' ");

		return $query->row;
	}

	public function getReviews($data = array()) {
		$sql = "SELECT r.review_id, pd.name, r.author, r.customer_id, r.rating, r.status, r.date_added FROM " . DB_PREFIX . "review r LEFT JOIN " . DB_PREFIX . "product_description pd ON (r.product_id = pd.product_id) RIGHT JOIN ". DB_PREFIX ."lts_review lr ON(lr.review_id = r.review_id) WHERE lr.vendor_id='". (int)$data['vendor_id'] ."' AND  pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_product'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$sort_data = array(
			'pd.name',
			'r.author',
			'r.customer_id',
			'r.rating',
			'r.status',
			'r.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY r.date_added";
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

	public function getTotalReviews($data = array()) {
		
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r LEFT JOIN " . DB_PREFIX . "product_description pd ON (r.product_id = pd.product_id) RIGHT JOIN ". DB_PREFIX ."lts_review lr ON (lr.review_id = r.review_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND lr.vendor_id='". (int)$data['vendor_id'] ."'";

		if (!empty($data['filter_product'])) {
			$sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'";
		}

		if (!empty($data['filter_author'])) {
			$sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " AND r.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalReviewsAwaitingApproval() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review WHERE status = '0'");

		return $query->row['total'];
	}
	public function getVendorProduct($data=array())
	{
		 $sql = "SELECT * FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.product_id IN (SELECT product_id FROM " . DB_PREFIX. "lts_product WHERE vendor_id='". $data['vendor_id']."') AND pd.language_id = '" . (int) $this->config->get('config_language_id') . "' ";  

      if (!empty($data['filter_name'])) {
        $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
      }        
       

      $sql .= " GROUP BY p.product_id";

      $sort_data = array(
        'pd.name',               
        'p.sort_order'
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

        $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
      }

      $query = $this->db->query($sql);

      return $query->rows;
	}

}