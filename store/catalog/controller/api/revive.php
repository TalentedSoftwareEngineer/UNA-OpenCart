<?php

use Cart\User;

class ControllerApiRevive extends Controller {
    private $allowedBanners = array();

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

    public function getSysAccountLevelByProfileId()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $profile_id = $this->request->post['profile_id'];
        $level = $this->model_catalog_revive->getSysAccountLevelByProfileId($profile_id);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($level));
    }

    public function addAds()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $this->model_catalog_revive->create_SysBlock_to_RvZone_Table();

        $zone = $this->model_catalog_revive->getZoneBySysAccIdBlockId($this->request->post['sys_acc_id'], $this->request->post['block_id']);
        if(!isset($zone['zoneid']) || !$zone['zoneid']) {
            $result = $this->model_catalog_revive->addAds($this->request->post);
        } else {
            $result = array(
                'affiliateid' => $zone['affiliateid'],
                'zoneid' => $zone['zoneid']
            );
        }        

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

    public function getBannersBySysAccIdBlockId()
    {
        $this->load->language('api/user');
        $this->load->model('catalog/revive');

        $sys_acc_id = $this->request->post['sys_acc_id'];
        $block_id = $this->request->post['block_id'];

        $zone = $this->model_catalog_revive->getZoneIdBySysAccIdBlockId($sys_acc_id, $block_id);

        if(!isset($zone['zone_id']) || !$zone['zone_id']) {
            $result = 'No Zone';
        } else {
            $zone_banners = $this->model_catalog_revive->getBannersByZoneId($zone['zone_id']);
            $channel = $this->model_catalog_revive->getChannelByWebsiteId($zone['affiliate_id']);
            $startPos = strpos($channel['compiledlimitation'], 'MAX_checkSite_Variable');
            $lengh = strpos($channel['compiledlimitation'], ')', $startPos) - $startPos;
            $this->allowedBanners = explode(',', preg_replace('/\s+/', '', str_replace('\'', '', explode('|' ,explode(', \'', str_replace('MAX_checkSite_Variable(', '', substr($channel['compiledlimitation'], $startPos, $lengh)))[0])[1])));
            
            $result = array_filter($zone_banners, function($var) {
                return in_array($var['product_id'], $this->allowedBanners);
            });
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

}
