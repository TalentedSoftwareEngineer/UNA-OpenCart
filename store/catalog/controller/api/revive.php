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

    public function addBanner()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $this->model_catalog_revive->create_OcProduct_to_RvBanner_Table();

        $banner = $this->model_catalog_revive->getBannerByOcProductId($this->request->post['product_id']);
        if(!isset($banner['bannerid']) || !$banner['bannerid']) {
            $result = array('bannerId' => $this->model_catalog_revive->addBanner($this->request->post));
        } else {
            $result = array('bannerId' => $banner['bannerid']);
        }
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

    public function getRvIds()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $rv_ids = $this->model_catalog_revive->getRvIds($this->request->post['id']);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($rv_ids));
    }

    public function uploadBannerImage()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $fromImageFullPath = $this->request->post['imagePath'];
        $imageName = sha1($this->request->post['imageName']);
        $imageExt = $this->request->post['imageExt'];
        $toImagePath = str_replace("store/catalog/", "", DIR_APPLICATION) . 'adserver/www/images/' . $imageName . '.' . $imageExt;

        copy($fromImageFullPath, $toImagePath);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(array(
            'filename' => $imageName . '.' . $imageExt,
            'filewidth' => getimagesize($fromImageFullPath)['0'],
            'fileheight' => getimagesize($fromImageFullPath)['1']
        )));
    }

}
