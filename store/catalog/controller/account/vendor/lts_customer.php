<?php
class ControllerAccountVendorLtsCustomer extends Controller {
	private $error = array();

	public function index() {
		
		$this->load->language('account/vendor/lts_customer');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		if (!$this->customer->isLogged()) {
        $this->session->data['redirect'] = $this->url->link('account/account', '', true);

        $this->response->redirect($this->url->link('account/login', '', true));
	    }

	    if(!$this->config->get('module_lts_vendor_status')) {
	        $this->response->redirect($this->url->link('account/account', '', true));
	    }

	    $this->load->model('account/vendor/lts_vendor');

	    if($this->customer->isLogged()){
	        $data['customer_id'] = $this->customer->getId();
	    }
	     
	    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());


	    if(!$vendor_info) {
	        $this->response->redirect($this->url->link('account/account', '', true));
	    }		


		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('account/vendor/lts_dashboard')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/vendor/lts_customer')
		);

		$data['action'] = $this->url->link('account/vendor/lts_customer');

		$data['cancel'] = $this->url->link('marketplace/extension');

		
		$data['columns'] = array();
		
		for ($i = 3; $i <= 12; $i++) {
			$data['columns'][] = $i;
		}		 

		// Total Orders
		$this->load->model('account/vendor/lts_customer');

		$today = $this->model_account_vendor_lts_customer->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-1 day'))));
		$yesterday = $this->model_account_vendor_lts_customer->getTotalCustomers(array('filter_date_added' => date('Y-m-d', strtotime('-2 day'))));


		$difference = $today - $yesterday;

		if ($difference && $today) {
			$data['percentage'] = round(($difference / $today) * 100);
		} else {
			$data['percentage'] = 0;
		}

		 $customer_total=$this->model_account_vendor_lts_customer->getCustomerid($vendor_info['vendor_id']);
		 
		              
		if ($customer_total > 1000000000000) {
			$data['total'] = round($customer_total / 1000000000000, 1) . 'T';
		} elseif ($customer_total > 1000000000) {
			$data['total'] = round($customer_total / 1000000000, 1) . 'B';
		} elseif ($customer_total > 1000000) {
			$data['total'] = round($customer_total / 1000000, 1) . 'M';
		} elseif ($customer_total > 1000) {
			$data['total'] = round($customer_total / 1000, 1) . 'K';
		} else {
			$data['total'] = $customer_total;
		}

		$data['customer'] = $this->url->link('account/vendor/lts_customer_list', '', true);
		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('common/footer');
		return $this->load->view('account/vendor/lts_customer', $data);
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'account/vendor/lts_customer')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}		
	 
}
