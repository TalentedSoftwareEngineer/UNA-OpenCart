<?php
class ModelVendorLtsCategory extends Model {

	public function addAssignedCategory($data) {
		if($data['vendor_category']) {

			 
			$i_category_id = implode(',', $data['vendor_category']);
		}

		foreach($data['vendor_category'] as $category_id) {
			$this->db->query("INSERT INTO ". DB_PREFIX ."lts_category SET vendor_id='". (int)$data['vendor_id'] ."', category_id='". $category_id ."', assigned='". (int)1 ."',approved='". (int)1 ."',status='". (int)1 ."'");
		}

		if(!empty($i_category_id)) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "lts_assigned_category SET vendor_id = '" . (int)$data['vendor_id'] . "', category_id = '" . $i_category_id . "'");
		}
	}

	public function editAssignedCategory($vendor_id, $data) {
		
		$category = $this->getVendorAssignedCategories($vendor_id);

		$categories = explode(',',$category['category_id']);

		foreach($categories as $category_id) {
			$this->deleteVendorCategory($category['vendor_id'], $category_id);
		}

		foreach($data['vendor_category'] as $category_id) {
			$this->db->query("INSERT INTO ". DB_PREFIX ."lts_category SET vendor_id='". (int)$data['vendor_id'] ."', category_id='". (int)$category_id ."', assigned='". (int)1 ."',approved='". (int)1 ."',status='". (int)1 ."'");
		}

		if($data['vendor_category']) {
			$category_id = implode(',', $data['vendor_category']);
		}

		if(!empty($category_id)) {
			$this->db->query("UPDATE ". DB_PREFIX ."lts_assigned_category SET category_id='". $category_id ."' WHERE vendor_id='". (int)$vendor_id ."'");
		}

	}

	public function getProductCategories($product_id) {
		$product_category_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "'");

		foreach ($query->rows as $result) {
			$product_category_data[] = $result['category_id'];
		}

		return $product_category_data;
	}

	public function getCategory($category_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT GROUP_CONCAT(cd1.name ORDER BY level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "category_description cd1 ON (cp.path_id = cd1.category_id AND cp.category_id != cp.path_id) WHERE cp.category_id = c.category_id AND cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY cp.category_id) AS path FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd2 ON (c.category_id = cd2.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'");
		
		return $query->row;
	}

	public function  deleteAssignedCategory($vendor_id) {
		$category = $this->getVendorAssignedCategories($vendor_id);

		$categories = explode(',',$category['category_id']);

		foreach($categories as $category_id) {
			$this->deleteVendorCategory($category['vendor_id'], $category_id);
		}

		$this->db->query("DELETE FROM ". DB_PREFIX ."lts_assigned_category WHERE vendor_id = '". (int)$category['vendor_id'] ."'");
	}

	public function getVendorCategory($category_id) {
		$query = $this->db->query("SELECT category_id FROM ". DB_PREFIX ."lts_category WHERE category_id='". (int)$category_id ."' AND assigned='". (int)0 ."' ");
		return $query->row;
	}

	public function getTotalVendorCategory() {
		 $sql="SELECT count(*) as total FROM " . DB_PREFIX . "lts_category WHERE assigned='". (int)0 ."'"; 		
		$query = $this->db->query($sql);
		return $query->row['total'];
	}	

	public function getTotalVendorAssignById($vendor_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "lts_assigned_category WHERE vendor_id = '" . (int)$vendor_id . "'");

		return $query->row;
	}

	public function deleteVendorCategory($vendor_id, $category_id) {
		if(!empty($vendor_id) && !empty($category_id)) {
			$this->db->query("DELETE FROM ". DB_PREFIX ."lts_category WHERE vendor_id = '". (int)$vendor_id ."' AND category_id ='". (int)$category_id ."' AND assigned='". (int)1 ."'");
		}
	}

	public function getAssignedCategory($vendor_id) {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."lts_assigned_category WHERE vendor_id ='". (int)$vendor_id ."'");

		return  $query->row;
	}

	public function getTotalVendorAssignedCategory($vendor_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "lts_assigned_category WHERE vendor_id = '" . (int)$vendor_id . "'");

		return $query->row['total'];
	}

	public function getVendorAssignedCategories($vendor_id) {
		$query = $this->db->query("SELECT vendor_id, category_id FROM ". DB_PREFIX ."lts_assigned_category WHERE vendor_id='". (int)$vendor_id ."'");

		return $query->row;
	}

	public function getAssignedCategories() {
		$query = $this->db->query("SELECT * , (SELECT store_owner FROM ". DB_PREFIX ."lts_vendor WHERE vendor_id = lac.vendor_id ) AS store_owner FROM ". DB_PREFIX ."lts_assigned_category lac ");

		return $query->rows;
	}

	public function getVendorCategories($data) {
		$sql ="SELECT *, (SELECT store_owner FROM ". DB_PREFIX ."lts_vendor WHERE vendor_id = lc.vendor_id ) AS store_owner FROM ". DB_PREFIX ."lts_category lc  LEFT JOIN ". DB_PREFIX ."category_description cd ON(lc.category_id = cd.category_id) LEFT JOIN ". DB_PREFIX ."category c ON(lc.category_id = c.category_id) WHERE cd.language_id='". (int)$this->config->get('config_language_id') ."' AND lc.assigned='". (int)0 ."'";

		if(isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		$query=$this->db->query($sql);

		return $query->rows;

	}
	
	public function approveStatus($category_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "lts_category SET approved = '" . 1 . "' WHERE category_id = '" . (int)$category_id . "'");
	}

	public function disapproveStatus($category_id) {
		// $this->db->query("UPDATE " . DB_PREFIX . "lts_category SET approved = '" . 0 . "' WHERE category_id = '" . (int)$category_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "lts_category WHERE category_id='".(int)$category_id."'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "category WHERE category_id='".(int)$category_id."'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "category_description WHERE category_id='".(int)$category_id."'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "category_path WHERE category_id='".(int)$category_id."'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_store WHERE category_id='".(int)$category_id."'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_category WHERE category_id='".(int)$category_id."'");
	}

	public function get_vendor_exist($vendor_name='')
	{
		$result=$this->db->query("SELECT vendor_id FROM " . DB_PREFIX . "lts_vendor WHERE store_owner='".$vendor_name."'");
		$results=$this->db->query("SELECT vendor_id FROM " . DB_PREFIX . "lts_assigned_category WHERE vendor_id='".$result->row['vendor_id']."'");
		if($results->num_rows>0)
		{
			return $results->row['vendor_id'];
		}
		else
		{
			return false;
		}


	}


	public function editCategory($category_id, $data) {

		
		$this->db->query("UPDATE " . DB_PREFIX . "category SET parent_id = '" . (int)$data['parent_id'] . "', `top` = '" . (isset($data['top']) ? (int)$data['top'] : 0) . "', `column` = '" . (int)$data['column'] . "', sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', date_modified = NOW() WHERE category_id = '" . (int)$category_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "category SET image = '" . $this->db->escape($data['image']) . "' WHERE category_id = '" . (int)$category_id . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

		foreach ($data['category_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "', meta_title = '" . $this->db->escape($value['meta_title']) . "', meta_description = '" . $this->db->escape($value['meta_description']) . "', meta_keyword = '" . $this->db->escape($value['meta_keyword']) . "'");
		}

		// MySQL Hierarchical Data Closure Table Pattern
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE path_id = '" . (int)$category_id . "' ORDER BY level ASC");

		if ($query->rows) {
			foreach ($query->rows as $category_path) {
				// Delete the path below the current one
				$this->db->query("DELETE FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$category_path['category_id'] . "' AND level < '" . (int)$category_path['level'] . "'");

				$path = array();

				// Get the nodes new parents
				$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

				foreach ($query->rows as $result) {
					$path[] = $result['path_id'];
				}

				// Get whats left of the nodes current path
				$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$category_path['category_id'] . "' ORDER BY level ASC");

				foreach ($query->rows as $result) {
					$path[] = $result['path_id'];
				}

				// Combine the paths with a new level
				$level = 0;

				foreach ($path as $path_id) {
					$this->db->query("REPLACE INTO `" . DB_PREFIX . "category_path` SET category_id = '" . (int)$category_path['category_id'] . "', `path_id` = '" . (int)$path_id . "', level = '" . (int)$level . "'");

					$level++;
				}
			}
		} else {
			// Delete the path below the current one
			$this->db->query("DELETE FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$category_id . "'");

			// Fix for records with no paths
			$level = 0;

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$data['parent_id'] . "' ORDER BY level ASC");

			foreach ($query->rows as $result) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET category_id = '" . (int)$category_id . "', `path_id` = '" . (int)$result['path_id'] . "', level = '" . (int)$level . "'");

				$level++;
			}

			$this->db->query("REPLACE INTO `" . DB_PREFIX . "category_path` SET category_id = '" . (int)$category_id . "', `path_id` = '" . (int)$category_id . "', level = '" . (int)$level . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");

		if (isset($data['category_filter'])) {
			foreach ($data['category_filter'] as $filter_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "category_filter SET category_id = '" . (int)$category_id . "', filter_id = '" . (int)$filter_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'");

		if (isset($data['category_store'])) {
			foreach ($data['category_store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		// SEO URL
		$this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE query = 'category_id=" . (int)$category_id . "'");

		if (isset($data['category_seo_url'])) {
			foreach ($data['category_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					if (!empty($keyword)) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = '" . (int)$store_id . "', language_id = '" . (int)$language_id . "', query = 'category_id=" . (int)$category_id . "', keyword = '" . $this->db->escape($keyword) . "'");
					}
				}
			}
		}
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "'");

		if (isset($data['category_layout'])) {
			foreach ($data['category_layout'] as $store_id => $layout_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = '" . (int)$store_id . "', layout_id = '" . (int)$layout_id . "'");
			}
		}

		$this->cache->delete('category');
	}

	public function getCategoryDescriptions($category_id) {
		$category_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_description_data[$result['language_id']] = array(
				'name'             => $result['name'],
				'meta_title'       => $result['meta_title'],
				'meta_description' => $result['meta_description'],
				'meta_keyword'     => $result['meta_keyword'],
				'description'      => $result['description']
			);
		}

		return $category_description_data;
	}
	public function getCategoryFilters($category_id) {
		$category_filter_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_filter_data[] = $result['filter_id'];
		}

		return $category_filter_data;
	}

	public function getCategoryStores($category_id) {
		$category_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_store_data[] = $result['store_id'];
		}

		return $category_store_data;
	}
	public function getCategorySeoUrls($category_id) {
		$category_seo_url_data = array();
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_seo_url_data[$result['store_id']][$result['language_id']] = $result['keyword'];
		}

		return $category_seo_url_data;
	}
	public function getCategoryLayouts($category_id) {
		$category_layout_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $category_layout_data;
	}
	public function getCategoryPath($category_id) {
		$query = $this->db->query("SELECT category_id, path_id, level FROM " . DB_PREFIX . "category_path WHERE category_id = '" . (int)$category_id . "'");

		return $query->rows;
	}
}