<?php
class ModelVendorLtsWithdrawalform extends Model {

	public function get_withdrawal_list($data=array())
	{
	$sql = "SELECT * FROM " . DB_PREFIX . "lts_withdrawal WHERE (payment_processed='0' or payment_processed='1')";

	 	if (!empty($data['filter_withdrawal_id'])) {
			$sql .= " AND (withdrawal_id = '" . (int)$data['filter_withdrawal_id'] . "')";
		}
		 if (!empty($data['filter_vendor_name'])) {
			$sql .= " AND (vendor_name = '" . $data['filter_vendor_name'] . "')";
		}

	 	$sort_data = array(		 	 
		 	'withdrawal_id',		 	 
		 );

		 if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
		 	$sql .= " ORDER BY " . $data['sort'];
		 } else {
		 	$sql .= " ORDER BY withdrawal_id";
		 }

		 if (isset($data['order']) && ($data['order'] == 'DESC')) {
		 	$sql .= " DESC";
		 } else {
		 	$sql .= " ASC";
		 }

		if(isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		// echo $sql;die;
		$query=$this->db->query($sql);
		return $query->rows;
	}
	
	public function totalwithdrawal(){

		$query=$this->db->query("SELECT COUNT(*) as total FROM " . DB_PREFIX . "lts_withdrawal WHERE payment_processed='0' or payment_processed='1'");
		return $query->row['total'];
	}


	public function getBankdetail($data= array())
	{
		$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "lts_payment WHERE vendor_id ='".$data['vendor_id']."'");
		return $query->row;
	}
	public function getTelephoneno( $data= array())
	{
		$query=$this->db->query("SELECT telephone FROM " . DB_PREFIX . "lts_vendor WHERE vendor_id ='".$data['vendor_id']."'");
		return $query->row['telephone'];
	}

	public function getData($data= array())
	{
		$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "lts_withdrawal WHERE withdrawal_id ='".$data['withdrawal_id']."'");
		return $query->row;
	}
	public function transfer_money_to_account($data = array())
	{ 

		$this->db->query("UPDATE " . DB_PREFIX . "lts_withdrawal SET payment_processed ='1', bank_name='".$data['bank_name']."', payment_mode='".$data['payment_method']."', transection_id='".$data['transection_id']."', vendor_bank_account_no='".$data['bank_acc_no']."', payment_initiate_date='".date('Y-m-d')."' WHERE payment_processed='0' AND vendor_id='".$data['vendor_id']."' and withdrawal_id='".$data['withdrawal_id']."'");
		
		return true;
		  
	}

	public function get_success_withdrawal_list($data=array())
	{
		$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "lts_withdrawal WHERE payment_processed='1' and vendor_id='".$data['vendor_id']."'");
		return $query->rows;
	}
	 

	 

}