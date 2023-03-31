<?php
class ModelCatalogStore extends Model {
    public function hasColumn($table, $column)
    {
		$sql = "SHOW COLUMNS FROM `" . $table . "` LIKE '" . $column . "'";
		$query = $this->db->query($sql);
		return $query->row;
    }
    public function addColumn($table, $column)
    {
		$sql = "ALTER TABLE " . $table . " ADD " . $column . " tinyint(2) DEFAULT false";
		$this->db->query($sql);
    }
    public function changeStoreType($customer_id, $store_type)
    {
		$sql = "UPDATE oc_lts_vendor SET store_type = " . $store_type . " WHERE customer_id = " . $customer_id;
		$query = $this->db->query($sql);
		return $query;
    }
    public function getStoreType($customer_id)
    {
		$sql = "SELECT store_type FROM oc_lts_vendor WHERE customer_id = " . $customer_id;
		$query = $this->db->query($sql);
		return $query->row;
    }

	public function getVendorStoreInfo($customer_id) {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."lts_vendor WHERE customer_id = ". (int)$customer_id);

		return $query->row;
	}
}