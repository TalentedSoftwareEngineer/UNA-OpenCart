<?php
class ControllerAccountVendorLtsMap extends Controller {
	private $error = array();

		
	public function index() {
		

		$this->load->language('account/vendor/lts_dashboardmap');

		$this->document->setTitle($this->language->get('heading_title'));
	
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('dashboard_map', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			 
		}		

	    if($this->customer->isLogged()){
	        $data['customer_id'] = $this->customer->getId();
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

		$data['cancel'] = $this->url->link('marketplace/extension');	

		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		 return $this->load->view('account/vendor/lts_map', $data);

	}
	
	public function map(){		 
		 
		$json = array();
		
		  $this->load->model('account/vendor/lts_vendor');
		$this->load->model('account/vendor/lts_map');
	    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

	    if(!$vendor_info) {
	        $this->response->redirect($this->url->link('account/account', '', true));
	    }		 

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());	 
		 
		$results=$this->model_account_vendor_lts_map->ltsgetTotalOrdersByCountry($vendor_info['vendor_id']);		 

			 
			foreach ($results as $result) {				 

					$json[strtolower($result['iso_code_2'])]= array(
					 						
						'total'  =>$result['total'],
						'amount' =>$this->currency->format($result['amount'], $this->config->get('config_currency'))		
					);	
					 		 		 
		    }
			  
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		
	}	
}
