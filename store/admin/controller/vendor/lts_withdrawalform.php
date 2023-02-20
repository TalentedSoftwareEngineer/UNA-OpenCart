<?php
class ControllerVendorLtsWithdrawalform extends controller {
	public function index() {
		$this->load->language('vendor/lts_withdrawalform');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();

	}
	public function getList()
	{	 
 	 	 
		if (isset($this->request->get['filter_withdrawal_id'])) {
	      $filter_withdrawal_id = $this->request->get['filter_withdrawal_id'];
	    } else {
	      $filter_withdrawal_id = '';
	    }
	    if (isset($this->request->get['filter_vendor_name'])) {
	      $filter_vendor_name = $this->request->get['filter_vendor_name'];
	    } else {
	      $filter_vendor_name = '';
	    }

		$this->load->model('vendor/lts_withdrawalform');
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('vendor/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		 

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} 
		else {
			$data['error_warning'] = '';
		}
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}
		if (isset($this->request->get['sort'])) {
	      $sort = $this->request->get['sort'];
	    } else {
	      $sort = 'withdrawal_id';
	    }
		
		if(isset($this->request->get['order'])) {
		      $order = $this->request->get['order'];
		    } else {
		      $order = 'DESC';
		    }

	    if(isset($this->request->get['page'])) {
	      $page = $this->request->get['page'];
	    } else {
	      $page = 1;
	    }	 
		$url = ''; 

		if (isset($this->request->get['filter_withdrawal_id'])) {
			$url .= '&filter_withdrawal_id=' . $this->request->get['filter_withdrawal_id'];
		}
		if (isset($this->request->get['filter_vendor_name'])) {
				$url .= '&filter_vendor_name=' . $this->request->get['filter_vendor_name'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		 
		$filter_data = array( 
		'filter_withdrawal_id'=>$filter_withdrawal_id,
		'filter_vendor_name'=>$filter_vendor_name,
		 'sort' =>$sort,
		 'order'=>$order,
        'start' => ($page - 1) * $this->config->get('config_limit_admin'),
        'limit' => $this->config->get('config_limit_admin'),
         );

		

	    $total=$this->model_vendor_lts_withdrawalform->totalwithdrawal();
		$results=$this->model_vendor_lts_withdrawalform->get_withdrawal_list($filter_data);		 
	    
	    

		foreach ($results as $result) {
			$data['withdrawal_data'][]=array(
				'withdrawal_id'=>$result['withdrawal_id'],
				'vendor_id'=>$result['vendor_id'],
				'vendor_name'=>$result['vendor_name'],
				'amount'=>$result['amount'],			 
				'payment_processed'=>$result['payment_processed']>0?'Complete':'Pending',
				'pay'=>$this->url->link('vendor/lts_withdrawalform/getForm', 'user_token=' .$this->session->data['user_token'].'&withdrawal_id=' .$result['withdrawal_id']. '&vendor_id='.$result['vendor_id'], true),
				'view'=>$this->url->link('vendor/lts_withdrawalform/withdrawal_history', 'user_token=' .$this->session->data['user_token'].'&withdrawal_id=' .$result['withdrawal_id']. '&vendor_id='.$result['vendor_id'], true)
				 
			);		
		}
 		     
		$data['user_token'] = $this->session->data['user_token'];

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

		$url = '';
		if (isset($this->request->get['filter_withdrawal_id'])) {
			$url .= '&filter_withdrawal_id=' . $this->request->get['filter_withdrawal_id'];
		}
		
		if (isset($this->request->get['filter_vendor_name'])) {
				$url .= '&filter_vendor_name=' . $this->request->get['filter_vendor_name'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}	

		$data['sort_withdrawal'] = $this->url->link('vendor/lts_withdrawalform', 'user_token=' . $this->session->data['user_token'] . '&sort=withdrawal_id' . $url, true);

		$url = '';
		if (isset($this->request->get['filter_withdrawal_id'])) {
			$url .= '&filter_withdrawal_id=' . $this->request->get['filter_withdrawal_id'];
		}
		if (isset($this->request->get['filter_vendor_name'])) {
				$url .= '&filter_vendor_name=' . $this->request->get['filter_vendor_name'];
		}
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('vendor/lts_withdrawalform', '&user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total - $this->config->get('config_limit_admin'))) ? $total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total, ceil($total / $this->config->get('config_limit_admin')));
		$data['filter_withdrawal_id'] = $filter_withdrawal_id;     
    	$data['filter_vendor_name'] = $filter_vendor_name;
		$data['sort'] = $sort;
    	$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
    	$data['column_left'] = $this->load->controller('common/column_left');
    	$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('vendor/lts_withdrawallist', $data));
	}  

	public function getForm()
	{

		$this->load->language('vendor/lts_withdrawalform');
		$this->load->model('vendor/lts_withdrawalform');

		if(isset($this->request->get['withdrawal_id']) && !empty($this->request->get['withdrawal_id']))
		{
		$data['withdrawal_id']=$this->request->get['withdrawal_id'];
		}
		else
		{
			$data['withdrawal_id']='';
		}
		if(isset($this->request->get['vendor_id']) && !empty($this->request->get['vendor_id']))
		{
		$data['vendor_id']=$this->request->get['vendor_id'];
		}
		else
		{
			$data['vendor_id']='';
		}

		$data['bank_info']=$this->model_vendor_lts_withdrawalform->getBankdetail($data);

		$data['withdrawal_data']=$this->model_vendor_lts_withdrawalform->getData($data);

		$data['telephone']=$this->model_vendor_lts_withdrawalform->getTelephoneno($data);
		$data['user_token']=$this->session->data['user_token'];
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer']		 = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('vendor/lts_withdrawalform', $data));
	}
	public function withdrawal_history()
	{
		$this->load->language('vendor/lts_withdrawalform');
		$this->load->model('vendor/lts_withdrawalform');

		if(isset($this->request->get['withdrawal_id']) && !empty($this->request->get['withdrawal_id']))
		{
		$data['withdrawal_id']=$this->request->get['withdrawal_id'];
		}
		else
		{
			$data['withdrawal_id']='';
		}
		if(isset($this->request->get['vendor_id']) && !empty($this->request->get['vendor_id']))
		{
		$data['vendor_id']=$this->request->get['vendor_id'];
		}
		else
		{
			$data['vendor_id']='';
		}
		$data['bank_info']=$this->model_vendor_lts_withdrawalform->getBankdetail($data);
		$data['telephone']=$this->model_vendor_lts_withdrawalform->getTelephoneno($data);
		$data['withdrawal_info']=$this->model_vendor_lts_withdrawalform->get_success_withdrawal_list($data);
		// echo "<pre>";print_r($data['withdrawal_info']);die;
		 
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer']		 = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('vendor/lts_withdrawal_history', $data));
	}
	public function submitForm()
	{
		 		 
		$error['status']=false;		 
		$this->load->model('vendor/lts_withdrawalform');
		$datas['status']=1;
		if(isset($this->request->get['withdrawal_id']) && !empty($this->request->get['withdrawal_id']))
		{
			$data['withdrawal_id']=$this->request->get['withdrawal_id'];
		}
		else
		{
			$data['withdrawal_id']='';
		}
		 
		if(isset($this->request->get['amount']) && !empty($this->request->get['amount']))
		{
		$data['amount']=$this->request->get['amount'];			
		}
		else
		{
			$data['amount']='';			
		}
		if(isset($this->request->get['transection_id']) && !empty($this->request->get['transection_id']))
		{
			$data['transection_id']=$this->request->get['transection_id'];
		}
		else
		{
			$data['transection_id']='';
		}
		if(isset($this->request->get['vendor_id']) && !empty($this->request->get['vendor_id']))
		{
			$data['vendor_id']=$this->request->get['vendor_id'];
		}
		else
		{
			$data['vendor_id']='';
		}
		if(isset($this->request->get['vendor_name']) && !empty($this->request->get['vendor_name']))
		{
			$data['vendor_name']=$this->request->get['vendor_name'];
		}
		else
		{
			$data['vendor_name']='';
		}
		if(isset($this->request->get['bank_name']) && !empty($this->request->get['bank_name']))
		{
			$data['bank_name']=$this->request->get['bank_name'];
		}
		else
		{
			$data['bank_name']='';
		}
		if(isset($this->request->get['bank_acc_no']) && !empty($this->request->get['bank_acc_no']))
		{
			$data['bank_acc_no']=$this->request->get['bank_acc_no'];
		}
		else
		{
			$data['bank_acc_no']='';
		}
		if(isset($this->request->get['bank_ifsc_code']) && !empty($this->request->get['bank_ifsc_code']))
		{
			$data['bank_ifsc_code']=$this->request->get['bank_ifsc_code'];
		}
		else
		{
			$data['bank_ifsc_code']='';
		}
		if(isset($this->request->get['payment_method']) && !empty($this->request->get['payment_method']))
		{
			$data['payment_method']=$this->request->get['payment_method'];
		}
		else
		{
			$data['payment_method']='';
		}
		 
		 
		$error['status']=$this->model_vendor_lts_withdrawalform->transfer_money_to_account($data);		
		 
		echo json_encode($error);
	}
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'vendor/lts_withdrawalform')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->user->hasPermission('modify', 'vendor/lts_withdrawal_history')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}


	}
}

	 
	

  