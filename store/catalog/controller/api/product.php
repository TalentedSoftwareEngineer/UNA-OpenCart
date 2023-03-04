<?php
class ControllerApiProduct extends Controller
{
    public function index()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $json = array();
        $json['products'] = array();
        $filter_data = array();
        $results = $this->model_catalog_product->getProducts($filter_data);
        foreach ($results as $result) {
            if ($result['image']??'') {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }
            if ($result['special']??'') {
                $special = $this->currency->format($this->tax->calculate($result['special']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }
            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($result['special']??'' ? $result['special']??'' : $result['price']??'', $this->session->data['currency']);
            } else {
                $tax = false;
            }
            if ($this->config->get('config_review_status')) {
                $rating = $result['rating']??'';
            } else {
                $rating = false;
            }
            $href_pro_id = $result['product_id']??'';
            $data['products'][] = array(
                'product_id' => $result['product_id']??'',
                'thumb' => $image,
                'name' => $result['name']??'',
                'description' => trim(strip_tags(html_entity_decode($result['description']??'', ENT_QUOTES, 'UTF-8'))),
                'price' => $price,
                'special' => $special,
                'tax' => $tax,
                'minimum' => $result['minimum']??'' > 0 ? $result['minimum']??'' : 1,
                'rating' => $result['rating']??'',
                'href' => $this->url->link('product/product', 'product_id=' . $href_pro_id),
            );
        }
        $json['products'] = $data['products'];

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function getProductById()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $json = array();
        $json['products'] = array();
        $filter_id = $this->request->post['product_id'];
        $result = $this->model_catalog_product->getProduct($filter_id);

        if ($result['image']??'') {
            $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
        } else {
            $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
        }
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $price = $this->currency->format($this->tax->calculate($result['price']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $price = false;
        }
        if ($result['special']??'') {
            $special = $this->currency->format($this->tax->calculate($result['special']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $special = false;
        }
        if ($this->config->get('config_tax')) {
            $tax = $this->currency->format($result['special']??'' ? $result['special']??'' : $result['price']??'', $this->session->data['currency']);
        } else {
            $tax = false;
        }
        if ($this->config->get('config_review_status')) {
            $rating = $result['rating']??'';
        } else {
            $rating = false;
        }
        $href_pro_id = $result['product_id']??'';
        $data = array(
            'product_id' => $result['product_id']??'',
            'thumb' => $image,
            'name' => $result['name']??'',
            'description' => trim(strip_tags(html_entity_decode($result['description']??'', ENT_QUOTES, 'UTF-8'))),
            'price' => $price,
            'special' => $special,
            'tax' => $tax,
            'minimum' => $result['minimum']??'' > 0 ? $result['minimum']??'' : 1,
            'rating' => $result['rating']??'',
            'href' => $this->url->link('product/product', 'product_id=' . $href_pro_id),
        );

        $json['products'] = $data['products'];

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }

    public function addProduct()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');

        $productData = array(
            'name' => 'Product Name Here',
            'model' => 'ABC123',
        );

        $results = $this->model_catalog_cart->addProduct($productData);
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

	public function add() {
		$this->load->language('catalog/product');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/product');
        $this->load->model('catalog/cart');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$this->model_catalog_cart->addProduct($this->request->post);
		}

		// $this->getForm();
	}

    public function uploadProductImage() {
        if($_FILES["file"]["name"] != '')
        {
            $location = 'image/catalog/demo/' . $_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], $location);
            $imagePath = 'http://localhost/UNA-v.13.0.0-RC2/store/' . $location;
            echo '<img src="'.$imagePath.'" height="150" width="225" class="img-thumbnail" />';
        }
    }

    public function getSelfProduct()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $email = $this->request->post['email'];
        $product_name = $this->request->post['product_name'];
        $results = $this->model_catalog_cart->getSelfProduct($email);

        $response = array_filter(array_map(function($value){    
            $filter_id = $value['product_id'];
            $result = $this->model_catalog_product->getProduct($filter_id);
    
            if ($result['image']??'') {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }
            if ($result['special']??'') {
                $special = $this->currency->format($this->tax->calculate($result['special']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }
            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($result['special']??'' ? $result['special']??'' : $result['price']??'', $this->session->data['currency']);
            } else {
                $tax = false;
            }
            if ($this->config->get('config_review_status')) {
                $rating = $result['rating']??'';
            } else {
                $rating = false;
            }
            $href_pro_id = $result['product_id']??'';
            $data = array(
                'product_id' => $result['product_id']??'',
                'thumb' => $image,
                'name' => $result['name']??'',
                'description' => trim(strip_tags(html_entity_decode($result['description']??'', ENT_QUOTES, 'UTF-8'))),
                'price' => $price,
                'special' => $special,
                'tax' => $tax,
                'minimum' => $result['minimum']??'' > 0 ? $result['minimum']??'' : 1,
                'rating' => $result['rating']??'',
                'href' => $this->url->link('product/product', 'product_id=' . $href_pro_id),
            );
            return $data;
        }, $results), function($var) {
            if($this->request->post['product_name'] == '') {
                return true && $var['product_id'];
            } else {
                return (strpos($var['name'], $this->request->post['product_name']) !== false || $var['product_id'] == $this->request->post['product_name']) && $var['product_id'];
            }
        });

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response));
    }

    public function getShowProduct()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $email = $this->request->post['email'];
        $product_name = $this->request->post['product_name'];
        $results = $this->model_catalog_cart->getShowProducts($email);

        $response = array_filter(array_map(function($value){    
            $filter_id = $value['product_id'];
            $result = $this->model_catalog_product->getProduct($filter_id);
    
            if ($result['image']??'') {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }
            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }
            if ($result['special']??'') {
                $special = $this->currency->format($this->tax->calculate($result['special']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }
            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format($result['special']??'' ? $result['special']??'' : $result['price']??'', $this->session->data['currency']);
            } else {
                $tax = false;
            }
            if ($this->config->get('config_review_status')) {
                $rating = $result['rating']??'';
            } else {
                $rating = false;
            }
            $href_pro_id = $result['product_id']??'';
            $data = array(
                'product_id' => $result['product_id']??'',
                'thumb' => $image,
                'name' => $result['name']??'',
                'description' => trim(strip_tags(html_entity_decode($result['description']??'', ENT_QUOTES, 'UTF-8'))),
                'price' => $price,
                'special' => $special,
                'tax' => $tax,
                'minimum' => $result['minimum']??'' > 0 ? $result['minimum']??'' : 1,
                'rating' => $result['rating']??'',
                'href' => $this->url->link('product/product', 'product_id=' . $href_pro_id),
            );
            return $data;
        }, $results), function($var) {
            if($this->request->post['product_name'] == '') {
                return true && $var['product_id'];
            } else {
                return (strpos($var['name'], $this->request->post['product_name']) !== false || $var['product_id'] == $this->request->post['product_name']) && $var['product_id'];
            }
        });

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response));
    }

    public function lts_product_delete()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $product_id = $this->request->post['product_id'];
  
        $results = $this->model_catalog_cart->lts_product_delete($product_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    public function viewProduct()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $product_id = $this->request->post['product_id'];
  
        $results = $this->model_catalog_cart->viewProduct($product_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    public function remove_from_besiness()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $product_id = $this->request->post['product_id'];
        $results = $this->model_catalog_cart->remove_from_besiness($product_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    public function getFilteredBlockProductById()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');

        $email = $this->request->post['email'];
        $product_id = $this->request->post['product_id'];
        $result = $this->model_catalog_cart->getFilteredBlockProductById($email, $product_id);   

        if(count($result)!=0) {
            $response = $this->displayProductData($result['product_id']);
        } else {
            $response = false;
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($response));
    }

    public function saveProductToBlock()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $product = $this->request->post['product'];
        $block_id = $this->request->post['block_id'];

        $text = $this->getTxtSysPagesBlocksById($block_id)['text'];
        if($text == '') {
            $product = json_encode(array($product));
        } else {
            $arr_text = array_map(function($value) {return ( array ) $value;}, json_decode($text));
            array_push($arr_text, $product);
            $product = json_encode($arr_text);
        }

        $results = $this->model_catalog_cart->saveProductToBlock($product, $block_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    public function getProductsInBlock()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $block_id = $this->request->post['block_id'];

        $text = $this->getTxtSysPagesBlocksById($block_id)['text'];
        if($text == '') {
            $data = array();
        } else {
            $arr_text = array_map(function($value) {return ( array ) $value;}, json_decode($text));
            $data = array_map(function($value) {
                return $this->displayProductData($value['product_id']);
            }, array_filter($arr_text, function($var) {
                return $var['owner'] == $this->request->post['owner'];
            }));
        }
        
        $data = array_filter($data, function($var) {return $var['product_id'];});
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($data));
    }

    public function removeProductFromBlock()
    {
        $this->load->language('api/cart');
        $this->load->model('catalog/cart');
  
        $product = $this->request->post['product'];
        $block_id = $this->request->post['block_id'];

        $text = $this->getTxtSysPagesBlocksById($block_id)['text'];
        $arr_text = array_map(function($value) {return ( array ) $value;}, json_decode($text));
        $index = array_search($product, $arr_text);
        array_splice($arr_text, $index, 1);
        $product = json_encode($arr_text);

        $results = $this->model_catalog_cart->saveProductToBlock($product, $block_id);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

    private function displayProductData($product_id)
    {
        $this->load->model('tool/image');
        $this->load->model('catalog/product');

        $result = $this->model_catalog_product->getProduct($product_id);

        if ($result['image']??'') {
            $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
        } else {
            $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
        }
        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $price = $this->currency->format($this->tax->calculate($result['price']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $price = false;
        }
        if ($result['special']??'') {
            $special = $this->currency->format($this->tax->calculate($result['special']??'', $result['tax_class_id']??'', $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $special = false;
        }
        if ($this->config->get('config_tax')) {
            $tax = $this->currency->format($result['special']??'' ? $result['special']??'' : $result['price']??'', $this->session->data['currency']);
        } else {
            $tax = false;
        }
        if ($this->config->get('config_review_status')) {
            $rating = $result['rating']??'';
        } else {
            $rating = false;
        }
        $href_pro_id = $result['product_id']??'';
        $data = array(
            'product_id' => $result['product_id']??'',
            'thumb' => $image,
            'name' => $result['name']??'',
            'description' => trim(strip_tags(html_entity_decode($result['description']??'', ENT_QUOTES, 'UTF-8'))),
            'price' => $price,
            'special' => $special,
            'tax' => $tax,
            'minimum' => $result['minimum']??'' > 0 ? $result['minimum']??'' : 1,
            'rating' => $result['rating']??'',
            'href' => $this->url->link('product/product', 'product_id=' . $href_pro_id),
        );

        return $data;
    }

    private function getTxtSysPagesBlocksById($block_id)
    {
        $this->load->model('catalog/cart');
        $result = $this->model_catalog_cart->getTxtSysPagesBlocksById($block_id);
        return $result;
    }
}