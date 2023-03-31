<?php

use Cart\User;

class ControllerAccountVendorLtsMads extends Controller {
	private $error = array();
	
	public function __construct($registry) {
		$this->registry = $registry;
		$registry->set('user', new User($registry));
	}

	public function index() {
		$this->load->language('account/vendor/lts_mads');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->getList();
	}

	public function add() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		if(!$this->config->get('module_lts_vendor_status')) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}
		
		$this->load->language('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_vendor');
		$this->load->model('account/vendor/lts_mads');

		$this->model_account_vendor_lts_mads->createMadsTable();
		
		if($this->customer->isLogged()){
			$data['customer_id'] = $this->customer->getId();
		}

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
		if(!$vendor_info) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}
		
		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

			$mads_id = $this->model_account_vendor_lts_mads->addMads($this->request->post, $vendor_info['vendor_id'], $this->customer->getId());

			if($mads_id==0)
			{
				$this->session->data['error_success'] = $this->language->get('error_product_exist');  
			}
			else
			{
				$this->session->data['success'] = $this->language->get('text_success');
			}
			
			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/vendor/lts_mads', $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_product');
		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$product_id = $this->model_account_vendor_lts_mads->getMadsById($this->request->get['mads_id'])['product_id'];
			$this->model_account_vendor_lts_mads->editMads($this->request->get['mads_id'], $product_id, $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('account/vendor/lts_mads', $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('account/vendor/lts_product');
		$this->load->language('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_vendor');

		$this->document->setTitle($this->language->get('heading_title'));

		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);	
			$this->response->redirect($this->url->link('account/login', '', true));
		}
	
		if(!$this->config->get('module_lts_vendor_status')) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}
	
		if($this->customer->isLogged()){
			$data['customer_id'] = $this->customer->getId();
		}
		 
		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
	
		if(!$vendor_info) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}
	
		$vendor_id = $this->customer->getId();
	
		if (isset($this->request->post['selected'])) {
		  foreach ($this->request->post['selected'] as $product_id) {
			$this->model_account_vendor_lts_mads->deleteMads($product_id, $vendor_id);
		  }
	
		  $this->session->data['success'] = $this->language->get('text_success');
	
		  $url = '';
	
		  if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		  }
	
		  if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		  }
	
		  if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		  }
	
		  if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		  }
	
		  if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		  }
	
		  $this->response->redirect($this->url->link('account/vendor/lts_mads', '', true));
		}
	
		$this->getList();
	}

	protected function getList() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->model('account/vendor/lts_product');
		$this->load->model('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_vendor');
		$this->load->model('account/vendor/lts_image');

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'pd.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
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
			'href' => $this->url->link('account/vendor/lts_mads', '', true)
		);
	
		$data['add'] = $this->url->link('account/vendor/lts_mads/add', '', true);
		$data['delete'] = $this->url->link('account/vendor/lts_mads/delete', '', true);

		if($this->customer->isLogged()){
			$data['customer_id'] = $this->customer->getId();
		}
		
		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
		$vendor_id = $vendor_info['vendor_id'];
		$data['mads'] = array();
		$filter_data = array(
			'filter_name' => $filter_name,
			'filter_status' => $filter_status,
			'sort' => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin'),
			'vendor_id' => $vendor_id
		);

		$mads_total = $this->model_account_vendor_lts_mads->getTotalMads($filter_data);
		$results = $this->model_account_vendor_lts_mads->getMads($filter_data);
		
		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_account_vendor_lts_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_account_vendor_lts_image->resize('no_image.png', 40, 40);
			}

			$special = false;

			$product_specials = $this->model_account_vendor_lts_product->getProductSpecials($result['product_id']);
			foreach ($product_specials as $product_special) {
				if (($product_special['date_start'] == '0000-00-00' || strtotime($product_special['date_start']) < time()) && ($product_special['date_end'] == '0000-00-00' || strtotime($product_special['date_end']) > time())) {
				$special = $this->currency->format($product_special['price'], $this->config->get('config_currency'));
					break;
				}
			}

			$total_sellers_accepted = $this->model_account_vendor_lts_mads->getTotalSellersAccepted($result['product_id']);

			$data['mads'][] = array(
				'mads_id' => $result['mads_id'],
				'product_id' => $result['product_id'],
				'customer_id' => $result['customer_id'],
				'vendor_id' => $result['vendor_id'],
				'category_id' => $result['category_id'],
				'category_name' => $result['category_name'],
				'name' => $result['name'], 
				'commission' => $result['commission'],
				'description' => $result['description'],
				'message' => $result['message'],
				'image' => $image,
				'sub_products' => $result['sub_products'],
				'total_sellers_accepted' => $total_sellers_accepted,
				'sold_quantity' => $result['sold_quantity'],
				'earnings' => $result['earnings'],
				'model' => $result['model'],
				'price' => $this->currency->format($result['price'], $this->config->get('config_currency')),
				'special' => $special,
				'status' => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'edit' => $this->url->link('account/vendor/lts_mads/edit', '&mads_id=' . $result['mads_id'] . $url, true)
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

		if(isset($this->session->data['error_success']) && !empty($this->session->data['error_success'])){
			$data['error_success'] = $this->session->data['error_success'];

		unset($this->session->data['error_success']);
		} else {			
			$data['error_success']='';			
		}
		
		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array) $this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if ($order == 'ASC') {
		$url .= '&order=DESC';
		} else {
		$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
		$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('account/vendor/lts_mads',"&sort=pd.name" . $url, true);
		$data['sort_total_sellers_accepted'] = $this->url->link('account/vendor/lts_mads',"&sort=lm.total_sellers_accepted" . $url, true);
		$data['sort_sold_quantity'] = $this->url->link('account/vendor/lts_mads',"&sort=lm.sold_quantity" . $url, true);
		$data['sort_status'] = $this->url->link('account/vendor/lts_mads',"&sort=p.status" . $url, true);
		$data['sort_earnings'] = $this->url->link('account/vendor/lts_mads',"&sort=lm.earnings" . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
		$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
		$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['sort'])) {
		$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
		$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $mads_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('account/vendor/lts_mads', '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($mads_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($mads_total - $this->config->get('config_limit_admin'))) ? $mads_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $mads_total, ceil($mads_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_status'] = $filter_status;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$this->load->controller('account/vendor/lts_header/script');
		$data['footer'] = $this->load->controller('account/vendor/lts_footer');
		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');

		$this->response->setOutput($this->load->view('account/vendor/lts_mads_list', $data));
	}

	protected function getForm() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/account', '', true);
			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->model('account/vendor/lts_category');
		$this->load->model('account/vendor/lts_vendor');
		$this->load->model('account/vendor/lts_product');
		$this->load->model('account/vendor/lts_mads');
		$this->load->model('account/vendor/lts_image');
		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$data['text_form'] = !isset($this->request->get['mads_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

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
			'href' => $this->url->link('account/vendor/lts_mads',  $url, true)
		);

		if (!isset($this->request->get['mads_id'])) {
			$data['action'] = $this->url->link('account/vendor/lts_mads/add', $url, true);
		} else {
			$data['action'] = $this->url->link('account/vendor/lts_mads/edit', 'mads_id=' . $this->request->get['mads_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('account/vendor/lts_mads', $url, true);

		if (isset($this->request->get['mads_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$mads_info = $this->model_account_vendor_lts_mads->getMadsById($this->request->get['mads_id']);
		}

		$data['store'] = HTTPS_SERVER;

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($mads_info)) {
			$data['title'] = $mads_info['name'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['commission'])) {
			$data['commission'] = $this->request->post['commission'];
		} elseif (!empty($mads_info)) {
			$data['commission'] = $mads_info['commission'];
		} else {
			$data['commission'] = '';
		}

		if (isset($this->request->post['category_id'])) {
			$data['category_id'] = $this->request->post['category_id'];
		} elseif (!empty($mads_info)) {
			$data['category_id'] = $mads_info['category_id'];
		} else {
			$data['category_id'] = '';
		}

		if (isset($this->request->post['description'])) {
			$data['description'] = $this->request->post['description'];
		} elseif (!empty($mads_info)) {
			$data['description'] = $mads_info['description'];
		} else {
			$data['description'] = '';
		}

		if (isset($this->request->post['message_purchaser'])) {
			$data['message_purchaser'] = $this->request->post['message_purchaser'];
		} elseif (!empty($mads_info)) {
			$data['message_purchaser'] = $mads_info['message'];
		} else {
			$data['message_purchaser'] = '';
		}

		if (isset($this->request->post['main_image'])) {
			$data['main_image'] = $this->request->post['main_image'];
		} elseif (!empty($mads_info)) {
			$data['main_image'] = $mads_info['image'];
		} else {
			$data['main_image'] = '';
		}

		if (isset($this->request->post['main_image']) && is_file(DIR_IMAGE . $this->request->post['main_image'])) {
		  $data['thumb'] = $this->model_tool_image->resize($this->request->post['main_image'], 100, 100);
		} elseif (!empty($mads_info) && is_file(DIR_IMAGE . $mads_info['image'])) {
		  $data['thumb'] = $this->model_tool_image->resize($mads_info['image'], 100, 100);
		} else {
		  $data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$arr_sub_products = array();
		if (isset($this->request->post['sub_products'])) {
			$data['sub_products'] = $this->request->post['sub_products'];
			$arr_sub_products = explode(',', $this->request->post['sub_products']);
		} elseif (!empty($mads_info)) {
			$data['sub_products'] = $mads_info['sub_products'];
			$arr_sub_products = explode(',', $mads_info['sub_products']);
		} else {
			$data['sub_products'] = '';
		}

		$arr_sub_products_quantity = array();
		if (isset($this->request->post['sub_products_quantity'])) {
			$temp =  trim(strip_tags(html_entity_decode($this->request->post['sub_products_quantity']??'', ENT_QUOTES, 'UTF-8')));
			$data['sub_products_quantity'] = $temp;
			if(json_decode($temp) != NULL) {
				$temp = array_map(function($item) { return (array) $item; }, json_decode($temp));
			} else {
				$temp = array();
			}
			$arr_sub_products_quantity = $temp;
		} elseif (!empty($mads_info)) {
			$temp =  trim(strip_tags(html_entity_decode($mads_info['sub_products_quantity']??'', ENT_QUOTES, 'UTF-8')));
			$data['sub_products_quantity'] = $temp;
			if(json_decode($temp) != NULL) {
				$temp = array_map(function($item) { return (array) $item; }, json_decode($temp));
			} else {
				$temp = array();
			}
			$arr_sub_products_quantity = $temp;
		} else {
			$data['sub_products_quantity'] = '[]';
		}

		//Table Sub Products
		$data['table_sub_products'] = array();
		if(count($arr_sub_products) > 0 && $arr_sub_products[0]) {
			foreach ($arr_sub_products as $product_id) {
				$result = $this->model_account_vendor_lts_product->getProduct($product_id);
	
				if (is_file(DIR_IMAGE . $result['image'])) {
					$image = $this->model_account_vendor_lts_image->resize($result['image'], 40, 40);
				} else {
					$image = $this->model_account_vendor_lts_image->resize('no_image.png', 40, 40);
				}
	
				$special = false;
	
				$product_specials = $this->model_account_vendor_lts_product->getProductSpecials($result['product_id']);
				foreach ($product_specials as $product_special) {
					if (($product_special['date_start'] == '0000-00-00' || strtotime($product_special['date_start']) < time()) && ($product_special['date_end'] == '0000-00-00' || strtotime($product_special['date_end']) > time())) {
						$special = $this->currency->format($product_special['price'], $this->config->get('config_currency'));
	
						break;
					}
				}
	
				$index = array_search($product_id, array_column($arr_sub_products_quantity, 'product_id'));
				if(isset($arr_sub_products_quantity[$index]['quantity'])) {
					$quantity = $arr_sub_products_quantity[$index]['quantity'];
				} else {
					$quantity = 1;
				}

				$data['table_sub_products'][] = array(
					'product_id' => $result['product_id'],
					'image' => $image,
					'name' => $result['name'], 
					'model' => $result['model'],
					'price' => $this->currency->format($result['price'], $this->config->get('config_currency')),
					'special' => $special,
					'quantity' => $quantity,
					'status' => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')
				);
			}
		}

		$data['json_sub_products'] = json_encode($data['table_sub_products']);

		$vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
		$categories = $this->model_account_vendor_lts_category->get_all_category(array('vendor_id' => $vendor_info['vendor_id']));
		$data['categories'] = $categories;
		
		//this is for products filter
		$data['all_products'] = array();
		$all_products = $this->model_catalog_product->getProducts(array());
		foreach ($all_products as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$image = $this->model_account_vendor_lts_image->resize($result['image'], 40, 40);
			} else {
				$image = $this->model_account_vendor_lts_image->resize('no_image.png', 40, 40);
			}

			$special = false;

			$product_specials = $this->model_account_vendor_lts_product->getProductSpecials($result['product_id']);
			foreach ($product_specials as $product_special) {
				if (($product_special['date_start'] == '0000-00-00' || strtotime($product_special['date_start']) < time()) && ($product_special['date_end'] == '0000-00-00' || strtotime($product_special['date_end']) > time())) {
					$special = $this->currency->format($product_special['price'], $this->config->get('config_currency'));
					break;
				}
			}

			$data['all_products'][] = array(
				'product_id' => $result['product_id'],
				'image' => $image,
				'name' => $result['name'], 
				'model' => $result['model'],
				'price' => $this->currency->format($result['price'], $this->config->get('config_currency')),
				'special' => $special,
				'quantity' => $result['quantity'],
				'status' => $result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'edit' => $this->url->link('account/vendor/lts_product/edit', '&product_id=' . $result['product_id'] . $url, true)
			);
		}

		$data['header'] = $this->load->controller('account/vendor/lts_header');
		$data['column_left'] = $this->load->controller('account/vendor/lts_column_left');
		$data['footer'] = $this->load->controller('account/vendor/lts_footer');

		$this->response->setOutput($this->load->view('account/vendor/lts_mads_form', $data));
	}

	protected function validateForm() {

		if (!$this->request->post['title']) {
			$this->error['title'] = $this->language->get('error_title');
		}

		return !$this->error;
	}
}