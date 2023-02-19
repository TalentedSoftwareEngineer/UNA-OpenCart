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