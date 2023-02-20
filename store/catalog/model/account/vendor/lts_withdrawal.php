<?php
	class ModelAccountVendorLtsWithdrawal extends Model
	{
		public function withdrawal_amount($data =array())
		{			 
			$this->db->query("INSERT INTO " . DB_PREFIX . "lts_withdrawal (vendor_id, vendor_name, amount, payment_processed, withdrawal_initiate_date) VALUES ('".$data['vendor_id']."', '".$data['vendor_name']."', '".$data['amount']."', '0', '".date('Y-m-d')."' )");
			return true;
		 
		}

		public function vendor_current_amount($vendor_id='')
		{		

			$total_amount=$this->db->query("SELECT sum(total) as total from " . DB_PREFIX . "lts_order_product WHERE vendor_id='".$vendor_id."'");			  
			  return $total_amount->row['total']>0?$total_amount->row['total']:0;
		}
		
		public function get_vendor_withdrawal_amount($vendor_id='')
		{
			$withdrawal_amount=$this->db->query("SELECT sum(amount) as withdrawal_amount from " . DB_PREFIX ."lts_withdrawal WHERE vendor_id='".$vendor_id."' and payment_processed='1'");

			$withdrawal_amount=$withdrawal_amount->row['withdrawal_amount']>0?$withdrawal_amount->row['withdrawal_amount']:0;
			return $withdrawal_amount;
		}
		public function get_all_withdrawal_amount($vendor_id)
		{
			 
			$withdrawal_amount=$this->db->query("SELECT sum(amount) as withdrawal_amount from " . DB_PREFIX ."lts_withdrawal WHERE vendor_id='".$vendor_id."' and payment_processed='1'");		 
			 
			return $withdrawal_amount->row['withdrawal_amount']>0?$withdrawal_amount->row['withdrawal_amount']:0;
		}
		public function vendor_pending_amount($vendor_id='')
		{
			$result=$this->db->query("SELECT sum(amount) as pending_amount from " . DB_PREFIX . "lts_withdrawal WHERE vendor_id='".$vendor_id."' AND payment_processed='0'");
			return $result->row['pending_amount']>0?$result->row['pending_amount']:'0';
		}

		public function get_transection_list($vendor_id='')
		{
			 
			$result=$this->db->query("SELECT * from " . DB_PREFIX . "lts_withdrawal WHERE vendor_id='".$vendor_id."' and (payment_processed='0' or payment_processed='1')");			 
			return $result->rows;
		}

		public function get_subscription_commission($vendor_id='')
		{
			$result=$this->db->query("SELECT subscription_commission as commission FROM " . DB_PREFIX . "lts_plan WHERE vendor_id='".$vendor_id."'");
			return isset($result->row['commission'])?$result->row['commission']:0;
		}

		public function get_all_commission($vendor_id='')
		{
			$query=$this->db->query("SELECT * FROM " . DB_PREFIX . "lts_order_product where vendor_id='".$vendor_id."'");
 
			foreach ($query->rows as  $value){	

				$sql="SELECT lc.order_id as order_id, (SELECT o.order_status_id FROM " . DB_PREFIX . "order o WHERE o.order_id = lc.order_id) AS order_status_id, o.currency_code as currency_code, o.currency_value as currency_value, lc.amount as commission, ('".$value['total']."' - lc.amount) as total, op.name as product, CONCAT(o.firstname,' ', o.lastname) as name,lc.date_added, lc.date_modified FROM " . DB_PREFIX . "lts_commission AS lc, " . DB_PREFIX . "order_product op," . DB_PREFIX . "order o WHERE lc.vendor_id = '".$value['vendor_id']."' and lc.order_product_id = '".$value['order_product_id']."' and o.customer_id='".$value['customer_id']."'"; 
				$result[] = $this->db->query($sql)->row;
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

	}
?>