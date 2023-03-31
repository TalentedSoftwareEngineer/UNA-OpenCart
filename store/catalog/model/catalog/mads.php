<?php
class ModelCatalogMads extends Model {
    public function index() {

    }

    public function getRejectedMads($customer_id, $product_id) {
      $sql = "SELECT * FROM " . DB_PREFIX . "lts_accepted_mads WHERE product_id = '" . (int)$product_id . "' AND customer_id = " . (int)$customer_id . " AND accepted = 0";
      $query = $this->db->query($sql);
      return $query->row;
    }

    public function getAllMads() {
        $sql = "SELECT lm.*, pd.*, p.*, cd.`name` AS category_name  FROM " . DB_PREFIX . "lts_mads lm LEFT JOIN " . DB_PREFIX . "product_description pd ON (lm.product_id = pd.product_id) LEFT JOIN " . DB_PREFIX . "product p ON(p.product_id = lm.product_id) LEFT JOIN " . DB_PREFIX . "category_description cd ON(cd.`category_id` = lm.category_id)";
        $query = $this->db->query($sql);
	
		    return $query->rows;
    }

    public function getCustomerProduct($customer_id, $product_id) {
      $sql = "SELECT p.*, pd.*
          FROM oc_customer AS c 
          LEFT JOIN oc_lts_vendor AS lts_vendor ON lts_vendor.customer_id=c.customer_id
          LEFT JOIN oc_lts_product AS lts_product ON lts_product.vendor_id=lts_vendor.vendor_id
          LEFT JOIN oc_product AS p ON p.product_id=lts_product.product_id
          LEFT JOIN oc_product_description AS pd ON p.product_id=pd.product_id
          WHERE c.customer_id=". (int) $customer_id . " AND p.`product_id` = " . (int) $product_id;
          
      $query = $this->db->query($sql);
      
      return $query->rows;
    }

    public function existingAcceptedRejectedMads($customer_id, $product_id) {
      $sql = "SELECT * FROM " . DB_PREFIX . "lts_accepted_mads WHERE product_id = " . (int) $product_id . " AND customer_id = " . (int) $customer_id;
      $query = $this->db->query($sql);      
      return $query->rows;
    }

    public function createAcceptedRejectedMads($customer_id, $product_id, $accepted) {
      $this->db->query("INSERT INTO " . DB_PREFIX . "lts_accepted_mads SET product_id = '" . (int) $product_id . "', customer_id = '" . (int) $customer_id . "', accepted = " . $accepted);
      return $this->db->getLastId();
    }

    public function updateAcceptedRejectedMads($customer_id, $product_id, $accepted) {
      $this->db->query("UPDATE " . DB_PREFIX . "lts_accepted_mads SET accepted = " . $accepted . " WHERE product_id = " . (int) $product_id . " AND customer_id = " . (int) $customer_id);
      return 1;
    }

    public function createAcceptedMadsTable() {
      $sql = "CREATE TABLE IF NOT EXISTS `". DB_PREFIX . "lts_accepted_mads` (
        `id` INT(10) NOT NULL AUTO_INCREMENT,
        `product_id` INT(11) NOT NULL,
        `customer_id` int(11) NOT NULL,
        `accepted` tinyint(1) NOT NULL,
        PRIMARY KEY (`id`)
      ) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
      $this->db->query($sql);
    }
}