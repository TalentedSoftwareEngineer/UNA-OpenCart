<?php
class ControllerApiStore extends Controller {
    public function index() {

    }

    public function createStoreTypeField() {
        $this->load->model('catalog/store');

        $column = $this->model_catalog_store->hasColumn(DB_PREFIX . 'lts_vendor', 'store_type');
        if(!$column) {
            $this->model_catalog_store->addColumn(DB_PREFIX . 'lts_vendor', 'store_type');
        }
    }

	public function changeStoreType()
	{
        $this->load->language('api/user');
        $this->load->model('catalog/store');
  
        $customer_id = $this->request->post['customer_id'];
		$store_type = $this->request->post['store_type'];
        $column = $this->model_catalog_store->hasColumn(DB_PREFIX . 'lts_vendor', 'store_type');
        if(!$column) {
            $this->model_catalog_store->addColumn(DB_PREFIX . 'lts_vendor', 'store_type');
        }
        $results = $this->model_catalog_store->changeStoreType($customer_id, $store_type);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

    public function getStoreType()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/store');
  
        $customer_id = $this->request->post['customer_id'];
        $results = $this->model_catalog_store->getStoreType($customer_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

	public function getVendorStoreInfo() {
        $this->load->language('api/user');
        $this->load->model('catalog/store');
  
        $customer_id = $this->request->post['customer_id'];
        $results = $this->model_catalog_store->getVendorStoreInfo($customer_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}
}
