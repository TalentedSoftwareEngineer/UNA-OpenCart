<?php

use Cart\User;

class ControllerApiMads extends Controller {
	public function __construct($registry) {
		$this->registry = $registry;
		$registry->set('user', new User($registry));
	}

    public function index() {

    }

    public function getShowedMadsToSeller() {
        $this->load->model('catalog/mads');
        $this->load->model('catalog/product');
        $this->load->model('catalog/store');
        $this->load->model('account/vendor/lts_image');
  
        $customer_id = $this->request->post['customer_id'];
        $mads = $this->model_catalog_mads->getAllMads();

        //All users must have all the sub products of the mads product to see the mads product.
        $results = array_filter($mads, function($item){
            $sub_products = $item['sub_products'];
            $sub_products = explode(',', $sub_products);
            $hasAllSubProducts = $this->isHaveAllSubProducts($sub_products, $this->request->post['customer_id']);

            $rejectedMad = $this->model_catalog_mads->getRejectedMads($this->request->post['customer_id'], $item['product_id']);
            if(isset($rejectedMad['id'])) {
                $isRejected = true;
            } else {
                $isRejected = false;
            }
            return $hasAllSubProducts && !$isRejected;
        });

        $results = array_map(function($item){
            //get total price of sub products
            $sub_products = $item['sub_products'];
            $sub_products = explode(',', $sub_products);
            $total_price = 0;
            foreach($sub_products as $product_id) {
                $total_price += (float) $this->model_catalog_product->getProduct($product_id)['price'];
            }
            $item['sub_products_total_price'] = $total_price;
            
            //image path
            if (is_file(DIR_IMAGE . $item['image'])) {
                $image = $this->model_account_vendor_lts_image->resize($item['image'], 40, 40);
            } else {
                $image = $this->model_account_vendor_lts_image->resize('no_image.png', 40, 40);
            }
            $item['image'] = $image;

            //product detail url href
            $href_pro_id = $item['product_id']??'';
            $item['href'] = $this->url->link('account/vendor/lts_visit_product', 'product_id=' . $href_pro_id);
            
            return $item;
        }, $results);

        //Only Physical Owner can see mads products to accept or reject
        $store_type = $this->model_catalog_store->getStoreType($customer_id)['store_type'];
        if($store_type == 0) {
            $results = array();
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    public function acceptRejectMads() {
        $this->load->model('catalog/mads');

        $this->model_catalog_mads->createAcceptedMadsTable();

        $customer_id = $this->request->post['customer_id'];
        $product_id = $this->request->post['product_id'];
        $accepted = $this->request->post['accepted'];

        $existingAcceptedMads = $this->model_catalog_mads->existingAcceptedRejectedMads($customer_id, $product_id);

        if($existingAcceptedMads) {
            $this->model_catalog_mads->updateAcceptedRejectedMads($customer_id, $product_id, $accepted);
        } else {
            $this->model_catalog_mads->createAcceptedRejectedMads($customer_id, $product_id, $accepted);
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($existingAcceptedMads));
    }

    private function isHaveAllSubProducts($sub_products, $customer_id) {
        foreach ($sub_products as $product_id) {
            $product = $this->model_catalog_mads->getCustomerProduct($customer_id, $product_id);
            if(!$product) {
                return false;
            }
        }
        return true;
    }
}
