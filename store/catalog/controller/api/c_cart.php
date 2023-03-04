<?php
class ControllerApiCcart extends Controller
{
    public function index()
    {
      $this->load->language('api/cart');
      $this->load->model('catalog/cart');

      $results = $this->model_catalog_cart->getProducts();
    
      $this->response->addHeader('Content-Type: application/json');
      $this->response->setOutput(json_encode($results));
    }
    
    public function add() {
		$this->load->language('api/cart');
        $this->load->model('catalog/product');
        $this->load->model('catalog/cart');
        $json = array();
    
        $product_info = $this->model_catalog_product->getProduct($this->request->post['product_id']);
        if ($product_info) {
          if (isset($this->request->post['quantity'])) {
            $quantity = $this->request->post['quantity'];
          } else {
            $quantity = 1;
          }
    
          if (isset($this->request->post['option'])) {
            $option = array_filter($this->request->post['option']);
          } else {
            $option = array();
          }
    
          $product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);
    
          foreach ($product_options as $product_option) {
            if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
              $json['error']['option'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
            }
          }
    
          if (!isset($json['error']['option'])) {
            $this->model_catalog_cart->addProductToCart($this->request->post['product_id'], $quantity, $option);
    
            $json['success'] = true;
    
            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['payment_methods']);
          }
        } else {
          $json['error']['store'] = $this->language->get('error_store');
        }
        
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function remove()
    {
      $this->load->language('api/cart');
      $this->load->model('catalog/cart');

      $product_id = $this->request->post['product_id'];
      $user = $this->request->post['user'];

      $results = $this->model_catalog_cart->removeProductsByProductIdUser($product_id, $user);

      $this->response->addHeader('Content-Type: application/json');
      $this->response->setOutput(json_encode($results));
    }

}