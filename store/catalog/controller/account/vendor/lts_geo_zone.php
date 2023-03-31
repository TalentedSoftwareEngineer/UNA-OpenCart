<?php
class ControllerAccountVendorLtsGeoZone extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('account/vendor/lts_geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/vendor/lts_geo_zone');
        $this->model_account_vendor_lts_geo_zone->createLtsGeoZoneTable();

		$this->getList();
	}

	public function add() {
		$this->load->language('account/vendor/lts_geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/vendor/lts_geo_zone');
        $this->load->model('account/vendor/lts_vendor');

		$this->model_account_vendor_lts_geo_zone->createLtsGeoZoneTable();
		
		if($this->customer->isLogged()){
			$data['customer_id'] = $this->customer->getId();
		}

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
		if(!$vendor_info) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_account_vendor_lts_geo_zone->addGeoZone($this->request->post, $vendor_info['vendor_id'], $this->customer->getId());

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/vendor/lts_geo_zone', $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('account/vendor/lts_geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/vendor/lts_geo_zone');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_account_vendor_lts_geo_zone->editGeoZone($this->request->get['geo_zone_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/vendor/lts_geo_zone', $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('account/vendor/lts_geo_zone');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('account/vendor/lts_geo_zone');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $geo_zone_id) {
				$this->model_account_vendor_lts_geo_zone->deleteGeoZone($geo_zone_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/vendor/lts_geo_zone', $url, true));
		}

		$this->getList();
	}

	public function country() {
		$json = array();

		$this->load->model('account/vendor/lts_country');

		$country_info = $this->model_account_vendor_lts_country->getCountry($this->request->get['country_id']);

		if ($country_info) {
			$this->load->model('account/vendor/lts_zone');

			$json = array(
				'country_id'        => $country_info['country_id'],
				'name'              => $country_info['name'],
				'iso_code_2'        => $country_info['iso_code_2'],
				'iso_code_3'        => $country_info['iso_code_3'],
				'address_format'    => $country_info['address_format'],
				'postcode_required' => $country_info['postcode_required'],
				'zone'              => $this->model_account_vendor_lts_zone->getZonesByCountryId($this->request->get['country_id']),
				'status'            => $country_info['status']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}	

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('account/vendor/lts_dashboard', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/vendor/lts_geo_zone',  $url, true)
		);

		$data['add'] = $this->url->link('account/vendor/lts_geo_zone/add',  $url, true);
		$data['delete'] = $this->url->link('account/vendor/lts_geo_zone/delete',  $url, true);

		$data['geo_zones'] = array();

        $this->load->model('account/vendor/lts_vendor');
        if($this->customer->isLogged()){
			$data['customer_id'] = $this->customer->getId();
		}

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
		if(!$vendor_info) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin'),
            'vendor_id' => $vendor_info['vendor_id']
		);

		$geo_zone_total = $this->model_account_vendor_lts_geo_zone->getTotalGeoZones(array('vendor_id'=>$vendor_info['vendor_id']));

		$results = $this->model_account_vendor_lts_geo_zone->getGeoZones($filter_data);

		foreach ($results as $result) {
			$data['geo_zones'][] = array(
				'geo_zone_id' => $result['geo_zone_id'],
				'name'        => $result['name'],
				'description' => $result['description'],
				'edit'        => $this->url->link('account/vendor/lts_geo_zone/edit', '&geo_zone_id=' . $result['geo_zone_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('account/vendor/lts_geo_zone', '&sort=name' . $url, true);
		$data['sort_description'] = $this->url->link('account/vendor/lts_geo_zone', '&sort=description' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $geo_zone_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('account/vendor/lts_geo_zone', $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($geo_zone_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($geo_zone_total - $this->config->get('config_limit_admin'))) ? $geo_zone_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $geo_zone_total, ceil($geo_zone_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('account/vendor/lts_footer');

		$this->response->setOutput($this->load->view('account/vendor/lts_geo_zone_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['geo_zone_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['description'])) {
			$data['error_description'] = $this->error['description'];
		} else {
			$data['error_description'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('account/vendor/lts_dashboard', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/vendor/lts_geo_zone', $url, true)
		);

		if (!isset($this->request->get['geo_zone_id'])) {
			$data['action'] = $this->url->link('account/vendor/lts_geo_zone/add', $url, true);
		} else {
			$data['action'] = $this->url->link('account/vendor/lts_geo_zone/edit', '&geo_zone_id=' . $this->request->get['geo_zone_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('account/vendor/lts_geo_zone', $url, true);

		if (isset($this->request->get['geo_zone_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$geo_zone_info = $this->model_account_vendor_lts_geo_zone->getGeoZone($this->request->get['geo_zone_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($geo_zone_info)) {
			$data['name'] = $geo_zone_info['name'];
		} else {
			$data['name'] = '';
		}

		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($geo_zone_info)) {
			$data['description'] = $geo_zone_info['description'];
		} else {
			$data['description'] = '';
		}

		$this->load->model('account/vendor/lts_country');

		$data['countries'] = $this->model_account_vendor_lts_country->getCountries();

		if (isset($this->request->post['zone_to_geo_zone'])) {
			$data['zone_to_geo_zones'] = $this->request->post['zone_to_geo_zone'];
		} elseif (isset($this->request->get['geo_zone_id'])) {
			$data['zone_to_geo_zones'] = $this->model_account_vendor_lts_geo_zone->getZoneToGeoZones($this->request->get['geo_zone_id']);
		} else {
			$data['zone_to_geo_zones'] = array();
		}

		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('account/vendor/lts_footer');

		$this->response->setOutput($this->load->view('account/vendor/lts_geo_zone_form', $data));
	}

	protected function validateForm() {

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((utf8_strlen($this->request->post['description']) < 3) || (utf8_strlen($this->request->post['description']) > 255)) {
			$this->error['description'] = $this->language->get('error_description');
		}

		return !$this->error;
	}

	protected function validateDelete() {

		$this->load->model('account/vendor/lts_tax_rate');

		foreach ($this->request->post['selected'] as $geo_zone_id) {
			$tax_rate_total = $this->model_account_vendor_lts_tax_rate->getTotalTaxRatesByGeoZoneId($geo_zone_id);

			if ($tax_rate_total) {
				$this->error['warning'] = sprintf($this->language->get('error_tax_rate'), $tax_rate_total);
			}
		}

		return !$this->error;
	}
}