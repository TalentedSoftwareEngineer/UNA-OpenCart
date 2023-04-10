<?php

use Cart\User;

class ControllerApiRevive extends Controller {
	public function __construct($registry) {
		$this->registry = $registry;
		$registry->set('user', new User($registry));
	}

    public function index() {

    }

    public function addAgency()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $this->model_catalog_revive->create_SysAcc_to_RvAgc_Table();

        $agency = $this->model_catalog_revive->getAgencyBySysAccontId($this->request->post['id']);
        if(!$agency) {
            $result = array('userId' => $this->model_catalog_revive->addAgency($this->request->post));
        } else {
            $user = $this->model_catalog_revive->getUserByAccountId($agency['account_id']);
            $result = $this->model_catalog_revive->updateUser($user['user_id'], $this->request->post);
        }
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

}
