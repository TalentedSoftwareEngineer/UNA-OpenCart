<?php
class ControllerAccountVendorLtsChart extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('account/vendor/lts_chart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('dashboard_chart', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=dashboard', true));
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
			'href' => $this->url->link('account/vendor/lts_dashboard')
		);

		$data['action'] = $this->url->link('account/vendor/lts_dashboard');

		$data['cancel'] = $this->url->link('marketplace/extension'	);

		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('common/footer');	
		return $this->load->view('account/vendor/lts_chart', $data);
	} 
 	
	public function chart() {
		 $this->load->language('account/vendor/lts_chart');
		$json = array();
		$this->load->model('account/vendor/lts_chart');
		$this->load->model('account/vendor/lts_vendor');

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

	    if(!$vendor_info) {
	        $this->response->redirect($this->url->link('account/account', '', true));
	    }		 

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());	
 
		$json['order'] = array();
		$json['customer'] = array();
		$json['xaxis'] = array();

		$json['order']['label'] = $this->language->get('text_order');
		$json['customer']['label'] = $this->language->get('text_customer');
		$json['order']['data'] = array();
		$json['customer']['data'] = array();		 
 
		if (isset($this->request->get['range'])) {
			$range = $this->request->get['range'];
		} else {
			$range = 'day';
		}

		switch ($range) {
			default:
			case 'day':			 
					$results = $this->model_account_vendor_lts_chart->getTotalOrdersByDay($vendor_info['vendor_id']);

					foreach ($results as $key => $value) {
						$json['order']['data'][] = array($key, $value['total']);
					}

					$results = $this->model_account_vendor_lts_chart->getTotalCustomersByDay($vendor_info['vendor_id']);
					 
					foreach ($results as $key => $value) {
						$json['customer']['data'][] = array($key, $value['total']);
					}

					for ($i = 0; $i < 24; $i++) {
						$json['xaxis'][] = array($i, $i);
					}
			 	
				break;
			case 'week':
			 
				$results = $this->model_account_vendor_lts_chart->getTotalOrdersByWeek($vendor_info['vendor_id']);

				foreach ($results as $key => $value) {
					$json['order']['data'][] = array($key, $value['total']);
				}

				$results = $this->model_account_vendor_lts_chart->getTotalCustomersByWeek($vendor_info['vendor_id']);
			 
				foreach ($results as $key => $value) {
					$json['customer']['data'][] = array($key, $value['total']);
				}

				$date_start = strtotime('-' . date('w') . ' days');

				for ($i = 0; $i < 7; $i++) {
					$date = date('Y-m-d', $date_start + ($i * 86400));

					$json['xaxis'][] = array(date('w', strtotime($date)), date('D', strtotime($date)));
				}
			 	
				break;

			case 'month':
					 
					$results = $this->model_account_vendor_lts_chart->getTotalOrdersByMonth($vendor_info['vendor_id']);
	 					 
					foreach ($results as $key => $value) {
						$json['order']['data'][] = array($key, $value['total']);
					}

					$results = $this->model_account_vendor_lts_chart->getTotalCustomersByMonth($vendor_info['vendor_id']);

					foreach ($results as $key => $value) {
						$json['customer']['data'][] = array($key, $value['total']);
					}

					for ($i = 1; $i <= date('t'); $i++) {
						$date = date('Y') . '-' . date('m') . '-' . $i;

						$json['xaxis'][] = array(date('j', strtotime($date)), date('d', strtotime($date)));
					}
				 
				break;
			case 'year':				
					 
				$results= $this->model_account_vendor_lts_chart->getTotalOrdersByYear($vendor_info['vendor_id']);				 
				 
					foreach ($results as $key => $value) {
						$json['order']['data'][] = array($key, $value['total']);
					}

					$results = $this->model_account_vendor_lts_chart->getTotalCustomersByYear($vendor_info['vendor_id']);

					foreach ($results as $key => $value) {
						$json['customer']['data'][] = array($key, $value['total']);
					}

					for ($i = 1; $i <= 12; $i++) {
						$json['xaxis'][] = array($i, date('M', mktime(0, 0, 0, $i)));
					}
				
				break;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}