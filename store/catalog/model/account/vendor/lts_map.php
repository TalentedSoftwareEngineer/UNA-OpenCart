<?php
class ModelAccountvendorLtsMap extends Model {
	public function ltsgetTotalOrdersByCountry($vendor_id) {
		$implode = array();

		 $query=array();
		if (is_array($this->config->get('config_complete_status'))) {
			foreach ($this->config->get('config_complete_status') as $order_status_id) {
				$implode[] = (int)$order_status_id;
			}
		} 
		
		if ($implode) {

			$query = $this->db->query("SELECT COUNT(*) AS total, SUM(o.total) AS amount, o.customer_id as customer_id, c.iso_code_2 FROM `" . DB_PREFIX . "order` o LEFT JOIN `" . DB_PREFIX . "country` c ON (o.payment_country_id = c.country_id) WHERE o.customer_id IN (SELECT customer_id FROM " . DB_PREFIX ."lts_order_product WHERE vendor_id='".$vendor_id."' AND order_id=o.order_id) AND o.order_status_id IN(" . implode(',', $implode) . ") GROUP BY o.payment_country_id");
			      
		}		 
		 
		if($query)
		{			 
			return $query->rows;
		}
		else {
			return array();
		}
	}

	public function get_maping_total_customer_id($vendorid='')
	{
		$query=$this->db->query("SELECT customer_id FROM " . DB_PREFIX . "lts_order_product WHERE vendor_id='".$vendorid."' GROUP BY customer_id");

        return $query->rows;
	}
}
