<?php
class ControllerAccountVendorLtsWithdrawal extends controller {

  public function index() { 
    
    $data['net_current_amount']=0;
    if (isset($this->request->get['page'])) {
      $page = $this->request->get['page'];
    } else {
      $page = 1;
    }

    $url = '';


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
  
    $this->load->language('account/vendor/lts_withdrawal');   

    $this->document->setTitle($this->language->get('heading_title'));
   
    $this->load->model('account/vendor/lts_withdrawal');
    $this->load->model('account/vendor/lts_commission');
      $this->load->model('account/vendor/lts_vendor');
     

    if($this->customer->isLogged()){
        $data['customer_id'] = $this->customer->getId();
    }

        
    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
    
    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }

    $totalsales = $this->model_account_vendor_lts_commission->getCommissions($vendor_info);
    $toatal=count($totalsales);
   

    if(isset($totalsales) && !empty($totalsales))
    {      
       foreach($totalsales as $sale)
       {        
            if(isset($sale) && !empty($sale))
            {
                    // if($sale['order_status_id']==$this->config->get('module_lts_vendor_received_commission_status_id'))
                    // {
                    $data['net_current_amount']+=($sale['total']-$sale['amount']); 
                    // }
           } 
       } 
    }

   
    $withdrawal_amount=$this->model_account_vendor_lts_withdrawal->get_all_withdrawal_amount($vendor_info['vendor_id']);
    $data['pending_amount']=$this->model_account_vendor_lts_withdrawal->vendor_pending_amount($vendor_info['vendor_id']);         
    $data['vendor_total_amount']=$this->currency->format($data['net_current_amount'], $this->config->get('config_currency')); 

    $data['net_current_amount']=$data['net_current_amount']-$data['pending_amount']-$withdrawal_amount;
    $data['net_current_amount']= $this->currency->format($data['net_current_amount'], $this->config->get('config_currency'));

     $data['pending_amount']= $this->currency->format($data['pending_amount'], $this->config->get('config_currency'));

    $data['transection_list']=$this->model_account_vendor_lts_withdrawal->get_transection_list($vendor_info['vendor_id']);     

    $data['min_withdwaral_amoun']=$this->config->get('module_lts_vendor_min_amount_limit');
    $data['max_withdwaral_amoun']=$this->config->get('module_lts_vendor_max_amount_limit');
    $this->load->controller('account/vendor/lts_header/script');

    $pagination = new Pagination();
    $pagination->total = $toatal;
    $pagination->page = $page;
    $pagination->limit = $this->config->get('config_limit_admin');
    $pagination->url = $this->url->link('account/vendor/lts_sale', $url . '&page={page}', true);

    $data['pagination'] = $pagination->render();

    $data['results'] = sprintf($this->language->get('text_pagination'), ($toatal) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($toatal - $this->config->get('config_limit_admin'))) ? $toatal : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $toatal, ceil($toatal / $this->config->get('config_limit_admin')));

    $data['footer'] = $this->load->controller('account/vendor/lts_footer');
    $data['header'] = $this->load->controller('account/vendor/lts_header');
    $data['lts_column_left'] = $this->load->controller('account/vendor/lts_column_left');    
    $this->response->setOutput($this->load->view('account/vendor/lts_withdrawal', $data));
  }
  public function withdrawal()
  {
  $this->load->language('account/vendor/lts_withdrawal');
    $status=0;     
        $min_amount=$this->config->get('module_lts_vendor_min_amount_limit');  
      $this->load->model('account/vendor/lts_commission');
        $max_amount=$this->config->get('module_lts_vendor_max_amount_limit');     
    $error['data_status']=array();
    $data=array();
    $error['data_status']['bank_status']=false;
    $error['data_status']['empty_money']=false;
    $error['data_status']['low_price']=false;
    $error['data_status']['status']=false;

    $this->load->model('account/vendor/lts_vendor');
    $this->load->model('account/vendor/lts_withdrawal');

    $vendor_info = $this->model_account_vendor_lts_vendor->getVendorStoreInfo($this->customer->isLogged());
    if(!$vendor_info) {
        $this->response->redirect($this->url->link('account/account', '', true));
    }  
    $data['vendor_id']=$vendor_info['vendor_id'];
    $data['vendor_name']=$vendor_info['store_owner'];
    $subs_commission=$this->model_account_vendor_lts_withdrawal->get_subscription_commission($vendor_info['vendor_id']);

    if(isset($subs_commission) && !empty($subs_commission))
    {
       $data['com_percentage']=$subs_commission;
    }
    else
    {
    $data['com_percentage']=$this->config->get('module_lts_vendor_default_commission');
    }


    $payment_info = $this->model_account_vendor_lts_vendor->getPayment($vendor_info['vendor_id']);     
    // $total_commission = $this->model_account_vendor_lts_withdrawal->get_all_commission($vendor_info['vendor_id']); 


    $tota_amount=0;
    
    $totalsales = $this->model_account_vendor_lts_commission->getCommissions($vendor_info);
    if(isset($totalsales) && !empty($totalsales))
    {      
       foreach($totalsales as $sale)
       {        
            if(isset($sale) && !empty($sale))
            {
                    // if($sale['order_status_id']==$this->config->get('module_lts_vendor_received_commission_status_id'))
                    // {
                  $tota_amount=$tota_amount+($sale['total']-$sale['amount']);
                    
            } 
       } 
    }
 $withdrawal_amount=$this->model_account_vendor_lts_withdrawal->get_all_withdrawal_amount($vendor_info['vendor_id']);
$pending_amount=$this->model_account_vendor_lts_withdrawal->vendor_pending_amount($vendor_info['vendor_id']);
 
    $remainig_amount=$tota_amount-$pending_amount-$withdrawal_amount;

    if(isset($payment_info['paypal']) && !empty($payment_info['paypal']) && isset($payment_info['bankname']) && !empty($payment_info['bankname']) && isset($payment_info['accountno']) && !empty($payment_info['accountno']) && isset($payment_info['ifsc']) && !empty($payment_info['ifsc']))
    {
        $error['data_status']['bank_status']=true;
       if(isset($this->request->post['amount']) && !empty($this->request->post['amount']))
       {
            $data['amount']=$this->request->post['amount'];
            if($remainig_amount>=$data['amount'])
               {
                if(($data['amount']>=$min_amount) && ($data['amount']<=$max_amount))
                {
               $error['data_status']['status']=$this->model_account_vendor_lts_withdrawal->withdrawal_amount($data);                 

                }
                else
                {
                    $error['data_status']['low_price']=true;
                    $error['data_status']['low_price_msg']=$this->language->get('Invalid_amount');
                }
               }
               else
               {
                $error['data_status']['low_price']=true;
                $error['data_status']['low_price_msg']=$this->language->get('low_remaing_amount');
               }
       }
       else
       {
        $data['amount']=''; 
        $error['data_status']['empty_money']=true;   
        $error['data_status']['empty_money_msg']=$this->language->get('empty_amount');
       }
       
        
    }
    else
    {        
    $error['data_status']['bank_detail']=$this->language->get('bank_detail');
    }

    echo json_encode($error); 
  }   
}
