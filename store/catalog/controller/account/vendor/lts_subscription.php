<?php
class ControllerAccountVendorLtsSubscription extends controller {

  public function index() { 

    $this->document->addScript("catalog/view/javascript/common.js");
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

    $this->load->language('account/vendor/lts_subscription');

    $this->load->model('account/vendor/lts_subscription');

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

    $this->load->model('account/vendor/lts_vendor');

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }
     
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());

    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

     $this->load->language('account/vendor/lts_subscription');

     $this->document->setTitle($this->language->get('heading_title'));

     $this->load->model('account/vendor/lts_subscription');

    if ($this->request->server['REQUEST_METHOD'] == 'POST') {

      $results = $this->model_account_vendor_lts_subscription->getSubscription($this->request->get['subscription_id']);
      // $data['expire_date'] = Date('y:m:d', strtotime('+'. $results['validity'] .'days'));
 
      $expiring_date = date('Y-m-d h:i:s',strtotime(date("Y-m-d h:i:s", time()) . " + 1 year"));
         
      $this->model_account_vendor_lts_subscription->addVendorPlan($expiring_date, $results, $vendor_info['vendor_id']);

      $this->response->redirect($this->url->link('account/vendor/lts_subscription/invoice&subscription_id=' . $this->request->get['subscription_id']  , '', true));
    }

    $this->getList();
  } 

  protected function getList() {
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

    $isPlan = $this->model_account_vendor_lts_subscription->vendorPlan($vendor_info['vendor_id']);


    if($isPlan>0)
    {
        $data['isplan']=$isPlan;
        $data['paidplan']=$this->language->get('paid_plan');
    }
    else
    {    $data['isplan']=$isPlan;
        $data['defaultplan']=$this->language->get('default_plan');
    }

    $data['defaultplan_rate']=$this->config->get('module_lts_vendor_default_commission');

    $results = $this->model_account_vendor_lts_subscription->getSubscriptions();   
     

    $data['current_plan'] = $this->model_account_vendor_lts_subscription->getVendonActivePlan($vendor_info['vendor_id']);
     $date_expire=$this->model_account_vendor_lts_subscription->getVendonActivePlanExpireDate($vendor_info['vendor_id']);

    

    if(isset($date_expire) && !empty( $date_expire))
    {        

    $date1 = $date_expire;
    $date2 =date('Y-m-d');
    $datetime1 = date_create($date2);
  $datetime2 = date_create($date1);
  $interval = date_diff($datetime1, $datetime2);
 
    $interval->format('%R%y years %d days');
    $data['days']="Your Plan is Expired with in ".$interval->days." Days";
     
    }   
    else
    {
        $data['days']="Free Plan";
    }
     
     
    if(isset($data['current_plan']['subscription_fee']))
    {

    $data['current_plan']['subscription_fee']=$this->currency->format($data['current_plan']['subscription_fee'], $this->config->get('config_currency'));
    }

 
    $data['languages'] = $this->model_localisation_language->getLanguages();

    foreach ($results as $result) {
    if($result['plan_type']==0){
      $url= $this->url->link('account/vendor/lts_subscription/subscribe', '&subscription_id=' . $result['subscription_id'], true);
    } 
         
 

      $data['subscriptions'][] = array(
          'name'               => $result['name'],
          'subscription_id'    => $result['subscription_id'],
         'subscription_commission'=>$result['subscription_commission'],
           
          'subscription_fee'   => $this->currency->format( $result['subscription_fee'], $this->config->get('config_currency')),
          
          'view'               => $this->url->link('account/vendor/lts_subscription/invoice', '&subscription_id=' . $result['subscription_id'],true),
          'subscribe'          => $url,
          'plan_type'          => $result['plan_type']?'Free':'Paid',
          'type'               =>  $result['plan_type'],
          'status'=>$result['status'],
          'product_id'=> $result['product_id']
          
          
      );
    }

            
    $data['cart_url']=$this->url->link('checkout/cart','', true);
    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('account/vendor/lts_dashboard','', true)
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('account/vendor/lts_subscription', '', true)
    ); 


    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');
    $this->response->setOutput($this->load->view('account/vendor/lts_subscription', $data));
 
  }
 
  public function subscribe() {

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

    $this->load->language('account/vendor/lts_subscription');

    $this->load->model('account/vendor/lts_subscription');

    $this->document->setTitle($this->language->get('heading_title'));

    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('account/vendor/lts_dashboard','', true)
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('account/vendor/lts_subscription', '', true)
    ); 

    $results = $this->model_account_vendor_lts_subscription->getSubscription($this->request->get['subscription_id']);
    
     
    if(!empty($results['subscription_fee'])) {
        $data['subscription_fee']  = $this->currency->format($results['subscription_fee'], $this->config->get('config_currency'));
    } else {
        $data['subscription_fee']  = 0;
    }  
     if(!empty($results['subscription_commission'])) {
        $data['subscription_commission']  =$results['subscription_commission'];
    } else {
        $data['subscription_commission']  = 0;
    } 
     

    $data['action'] = $this->url->link('account/vendor/lts_subscription/add', '&subscription_id=' . $this->request->get['subscription_id'], true);

    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');
    
    $this->response->setOutput($this->load->view('account/vendor/lts_subscription_confirmation', $data));
  
  }

   public function invoice() {
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
    
    $this->load->language('account/vendor/lts_subscription_invoice');

    $data['breadcrumbs'] = array();

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('account/vendor/lts_dashboard','', true)
    );

    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('account/vendor/lts_subscription', '', true)
    ); 

    $data['config_name']  = $this->config->get('config_name');
    $data['config_address']  = $this->config->get('config_address');
    $data['config_telephone']  = $this->config->get('config_telephone');
    $data['config_email']  = $this->config->get('config_email');

    $this->load->model('account/vendor/lts_vendor');
    $this->load->model('account/vendor/lts_subscription');

    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->getId());

    if(!empty($vendor_info['address'])) {
      $data['vendor_address'] = $vendor_info['address'];
    } else {
      $data['vendor_address'] = '';
    }

   if(!empty($vendor_info['store_name'])) {
      $data['vendor_store_name'] = $vendor_info['store_name'];
    } else {
       $data['vendor_store_name'] = '';
    }

    $data['vendor_email'] = $this->customer->getEmail();
    $data['vendor_telephone'] = $this->customer->getTelephone();

   if(isset($this->request->get['subscription_id']) && !empty($this->request->get['subscription_id']))
    {

    $plan_info = $this->model_account_vendor_lts_subscription->getVendonPlan($this->request->get['subscription_id'], $vendor_info['vendor_id']);
    }



    if(!empty($plan_info['name'])) {
      $data['name'] = $plan_info['name'];
    } else {
       $data['name'] = '';
    }  

    if(!empty($plan_info['date_added'])) {
      $data['date_added'] = $plan_info['date_added'];
    } else {
       $data['date_added'] = '';
    }  

    if(!empty($plan_info['date_expire'])) {
      $data['date_expire'] = $plan_info['date_expire'];
    } else {
       $data['date_expire'] = '';
    }


    if(isset($plan_info['subscription_commission']) && !empty($plan_info['subscription_commission'])) {
      $data['subscription_commission'] =  $plan_info['subscription_commission'];
    } else {
       $data['subscription_commission'] = '';
    } 

    if(isset($plan_info['subscription_fee']) && !empty($plan_info['subscription_fee'])) {
      $data['subscription_fee'] = $this->currency->format( $plan_info['subscription_fee'], $this->config->get('config_currency'));
    } else {
       $data['subscription_fee'] = '$0.0';
    }

    $data['total'] = $this->currency->format( $plan_info['subscription_fee'], $this->config->get('config_currency'));


    $data['title'] = $this->language->get('text_invoice');

    if ($this->request->server['HTTPS']) {
      $data['base'] = HTTPS_SERVER;
    } else {
      $data['base'] = HTTP_SERVER;
    }

    $this->load->controller('account/vendor/lts_header/script');
    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');
    
    $this->response->setOutput($this->load->view('account/vendor/lts_subcription_invoice', $data));
  }

}
