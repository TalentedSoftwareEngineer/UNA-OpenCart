<?php
class ControllerAccountVendorLtsDashboard extends Controller {

  public function index() {
    $data = [];
    $data['sales']=0;
     
    $this->document->addStyle('catalog/view/javascript/vendor/javascript/jquery/jqvmap/jqvmap.css');
    $this->document->addScript('catalog/view/javascript/vendor/javascript/jquery/jqvmap/jquery.vmap.js');
     
    $this->document->addScript('catalog/view/javascript/vendor/javascript/jquery/jqvmap/maps/jquery.vmap.world.js');

    $this->document->addScript('catalog/view/javascript/vendor/javascript/jquery/flot/jquery.flot.js');
    $this->document->addScript('catalog/view/javascript/vendor/javascript/jquery/flot/jquery.flot.resize.min.js');


    $this->load->language('account/vendor/lts_dashboard');
   
    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('account/vendor/lts_order');

    $this->load->model('account/vendor/lts_product');   

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

    $this->model_account_vendor_lts_vendor->isVendorSubscription($vendor_info['vendor_id']);

    $filter_data = array(
        'vendor_id' => $vendor_info['vendor_id']
    );
    $this->load->model('account/vendor/lts_order');
    
    $this->load->model('account/vendor/lts_commission');
    $this->load->model('account/vendor/lts_subscription');
    // $this->model_account_vendor_lts_commission->delete();
    $data['order_total']= $this->model_account_vendor_lts_order->getTotalOrders($filter_data);
    $results = $this->model_account_vendor_lts_order->getOrders($filter_data);
    $is_plan_not_expire=$this->model_account_vendor_lts_subscription->isPlanNotExpired($vendor_info['vendor_id']); 
    if(!$is_plan_not_expire)
    {
        $this->model_account_vendor_lts_subscription->deletePlan($vendor_info['vendor_id']); 
    }

    // $data['order_total']=count($results);
     // $data['sale_total'] = $this->model_account_vendor_lts_commission->get_total_commissions($filter_data);

    $totalsales = $this->model_account_vendor_lts_commission->getCommissions($vendor_info);
    if(isset($totalsales) && !empty($totalsales))
    {      
       foreach($totalsales as $sale)
       {        
            if(isset($sale) && !empty($sale))
            {
                     
                $data['sales']+=($sale['total']+$sale['shipping_amount']);                    
            } 
       } 
    }
        if ($data['sales'] > 1000000000000) {
            $data['sales'] = round($data['sales'] / 1000000000000, 1) . 'T';
        } elseif ($data['sales'] > 1000000000) {
            $data['sales'] = round($data['sales'] / 1000000000, 1) . 'B';
        } elseif ($data['sales'] > 1000000) {
            $data['sales'] = round($data['sales'] / 1000000, 1) . 'M';
        } elseif ($data['sales'] > 1000) {
           $data['sales'] = round($data['sales'] / 1000, 1) . 'K';
        } else {
            $data['sales']=$data['sales'] ;
        }        
      
    // echo $data['sales']; die;

    $data['product_total'] = $this->model_account_vendor_lts_product->getTotalProducts($filter_data);
    $order_id = $this->model_account_vendor_lts_order->getOrderId($filter_data);

    
           
    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('text_home'),
        'href' => $this->url->link('account/vendor/lts_dashboard', '', true)
    );

    $data['breadcrumbs'][] = array(
        'text' => $this->language->get('heading_title'),
        'href' => $this->url->link('account/vendor/lts_dashboard', '', true)
    );

    if (isset($this->session->data['success'])) {
        $data['success'] = $this->session->data['success'];

        unset($this->session->data['success']);
    } else {
        $data['success'] = '';
    } 

    $this->load->controller('account/vendor/lts_header/script');    
    $data['map']=$this->load->controller('account/vendor/lts_map');
   
    $data['chart']=$this->load->controller('account/vendor/lts_chart');
    $data['add_product'] = $this->url->link('account/vendor/lts_product/add', '', true);
    $data['customer']=$this->load->controller('account/vendor/lts_customer', '', true);   
    $data['view_order'] = $this->url->link('account/vendor/lts_order', '', true);
    $data['view_sale'] = $this->url->link('account/vendor/lts_sale', '', true);
    $data['chat']=$this->load->controller('lts_chat/lts_chat'); 
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');    
    
    $this->response->setOutput($this->load->view('account/vendor/lts_dashboard', $data));
  }
}
