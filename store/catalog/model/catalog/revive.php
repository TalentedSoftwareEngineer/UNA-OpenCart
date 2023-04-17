<?php
class ModelCatalogRevive extends Model {
    public function index() {

    }

    public function addAgency($data) {
        //add revive agency
		$this->db->query("INSERT INTO `rv_accounts` SET account_type = 'MANAGER', account_name = '" . $data['name'] . "'");
        $accountId = $this->db->getLastId();
	
        $this->db->query("INSERT INTO `rv_agency` SET name = '" . $this->db->escape($data['name']) . "', email = '" . $data['email'] . "', account_id = " . (int)$accountId . ", status = 0, updated = NOW()");
        $agencyId = $this->db->getLastId();

        $this->db->query("INSERT INTO `rv_audit`(`actionid`,`context`,`contextid`,`parentid`,`details`,`userid`,`username`,`usertype`,`updated`,`account_id`,`advertiser_account_id`,`website_account_id`) values 
            (1,'accounts'," . $accountId . ",NULL,'a:4:{s:10:\"account_id\";i:" . $accountId . ";s:12:\"account_type\";s:7:\"MANAGER\";s:12:\"account_name\";s:7:\"" . $data['name'] . "\";s:8:\"key_desc\";s:7:\"" . $data['name'] . "\";}',1,'admin',0,NOW()," . $accountId . ",NULL,NULL),
            (1,'agency'," . $agencyId . ",NULL,'a:9:{s:8:\"agencyid\";i:" . $agencyId . ";s:4:\"name\";s:7:\"" . $data['name'] . "\";s:7:\"contact\";s:7:\"\";s:5:\"email\";s:20:\"" . $data['email'] . "\";s:10:\"logout_url\";N;s:7:\"updated\";s:19:\"NOW()\";s:10:\"account_id\";i:" . $accountId . ";s:6:\"status\";i:0;s:8:\"key_desc\";s:7:\"" . $data['name'] . "\";}',1,'admin',0,NOW()," . $accountId . ",NULL,NULL),
            (2,'agency'," . $agencyId . ",NULL,'a:2:{s:7:\"contact\";a:2:{s:3:\"was\";s:7:\"\";s:2:\"is\";s:11:\"\";}s:8:\"key_desc\";s:7:\"" . $data['name'] . "\";}',1,'admin',0,NOW()," . $accountId . ",NULL,NULL)");

        //add revive user
        $this->db->query("INSERT INTO `rv_users`(`contact_name`,`email_address`,`username`,`password`,`language`,`default_account_id`,`comments`,`active`,`sso_user_id`,`date_created`,`date_last_login`,`email_updated`) values 
            ('','" . $data['email'] . "','" . $data['name'] . "','$2y$10\$K8X.5lc4x4zRM8BTymlt1.2wPWRJl1HNA37FlK9xNZwminR6.qkNi','en'," . (int)$accountId . ",NULL,1,NULL,NOW(),NULL,NOW())");
        $userId = $this->db->getLastId();

        $this->db->query("INSERT INTO `rv_account_user_assoc`(`account_id`,`user_id`,`linked`) values 
            (" . $accountId . "," . (int)$userId . ",NOW())");

        $this->db->query("INSERT INTO `rv_account_user_permission_assoc`(`account_id`,`user_id`,`permission_id`,`is_allowed`) values 
            (" . $accountId . "," . (int)$userId . ",12,1),
            (" . $accountId . "," . (int)$userId . ",10,1)");

        $this->db->query("INSERT INTO `rv_password_recovery`(`user_type`,`user_id`,`recovery_id`,`updated`) values 
            ('user'," . (int)$userId . ",'1B965E63-FED813D7-0292D442',NOW())");

        //add advertiser
		$this->db->query("INSERT INTO `rv_accounts` SET account_type = 'ADVERTISER', account_name = '" . $data['name'] . "'");
        $advertiserAccountId = $this->db->getLastId();

		$this->db->query("INSERT INTO `rv_clients`(`agencyid`,`clientname`,`contact`,`email`,`report`,`reportinterval`,`reportlastdate`,`reportdeactivate`,`comments`,`updated`,`account_id`,`advertiser_limitation`,`type`) values 
            (" . (int) $agencyId . ",'" . $data['name'] . "','','" . $data['email'] . "','t',7,NOW(),'t','',NOW()," . (int) $advertiserAccountId . ",0,0)");
        $clientId = $this->db->getLastId();

        $this->db->query("INSERT INTO `rv_audit`(`actionid`,`context`,`contextid`,`parentid`,`details`,`userid`,`username`,`usertype`,`updated`,`account_id`,`advertiser_account_id`,`website_account_id`) values 
            (1,'accounts'," . (int)$advertiserAccountId . ",NULL,'a:4:{s:10:\"account_id\";i:" . (int)$advertiserAccountId . ";s:12:\"account_type\";s:10:\"ADVERTISER\";s:12:\"account_name\";s:" . strlen($data['name']) . ":\"" . $data['name'] . "\";s:8:\"key_desc\";s:" . strlen($data['name']) . ":\"" . $data['name'] . "\";}'," . $userId  .",'" . $data['name'] . "',0,NOW(),1," . $advertiserAccountId . ",NULL),
            (1,'clients'," . (int)$clientId . ",NULL,'a:15:{s:8:\"clientid\";i:" . (int) $clientId . ";s:8:\"agencyid\";i:" . $agencyId . ";s:10:\"clientname\";s:" . strlen($data['name']) . ":\"" . $data['name'] . "\";s:7:\"contact\";s:0:\"\";s:5:\"email\";s:27:\"" . $data['email'] . "\";s:6:\"report\";s:1:\"t\";s:14:\"reportinterval\";i:7;s:14:\"reportlastdate\";s:10:NOW();s:16:\"reportdeactivate\";s:1:\"t\";s:8:\"comments\";s:0:\"\";s:7:\"updated\";s:19:NOW();s:10:\"account_id\";i:" . (int) $advertiserAccountId . ";s:21:\"advertiser_limitation\";s:5:\"false\";s:4:\"type\";i:0;s:8:\"key_desc\";s:" . strlen($data['name']) . ":\"" . $data['name'] . "\";}'," . (int) $userId . ",'" . $data['name'] . "',0,NOW()," . (int) $accountId . "," . (int) $advertiserAccountId . ",NULL)");

        // add campaign
        $this->db->query("INSERT INTO `rv_campaigns`(`campaignname`,`clientid`,`views`,`clicks`,`conversions`,`priority`,`weight`,`target_impression`,`target_click`,`target_conversion`,`anonymous`,`companion`,`comments`,`revenue`,`revenue_type`,`updated`,`block`,`capping`,`session_capping`,`status`,`hosted_views`,`hosted_clicks`,`viewwindow`,`clickwindow`,`ecpm`,`min_impressions`,`ecpm_enabled`,`activate_time`,`expire_time`,`type`,`show_capped_no_cookie`) values 
            ('Default Campaign'," . (int) $clientId . ",-1,-1,-1,0,1,0,0,0,'f',0,'',NULL,1,NOW(),0,0,0,0,0,0,0,0,NULL,100,0,NOW(),NULL,0,0)");
        $campaignId = $this->db->getLastId();

        $this->db->query("INSERT INTO `rv_audit`(`actionid`,`context`,`contextid`,`parentid`,`details`,`userid`,`username`,`usertype`,`updated`,`account_id`,`advertiser_account_id`,`website_account_id`) values 
            (1,'campaigns'," . (int) $campaignId . ",NULL,'a:33:{s:10:\"campaignid\";i:" . (int) $campaignId . ";s:12:\"campaignname\";s:16:\"Default Campaign\";s:8:\"clientid\";i:" . (int) $clientId . ";s:5:\"views\";i:-1;s:6:\"clicks\";i:-1;s:11:\"conversions\";i:-1;s:8:\"priority\";i:0;s:6:\"weight\";i:0;s:17:\"target_impression\";i:0;s:12:\"target_click\";i:0;s:17:\"target_conversion\";i:0;s:9:\"anonymous\";s:1:\"f\";s:9:\"companion\";s:1:\"1\";s:8:\"comments\";s:17:\"\";s:7:\"revenue\";i:NULL;s:12:\"revenue_type\";i:1;s:7:\"updated\";s:19:\"NOW()\";s:5:\"block\";i:0;s:7:\"capping\";i:0;s:15:\"session_capping\";i:0;s:6:\"status\";i:0;s:12:\"hosted_views\";i:0;s:13:\"hosted_clicks\";i:0;s:10:\"viewwindow\";i:0;s:11:\"clickwindow\";i:0;s:4:\"ecpm\";i:0;s:15:\"min_impressions\";i:100;s:12:\"ecpm_enabled\";i:0;s:13:\"activate_time\";s:19:\"NOW()\";s:11:\"expire_time\";s:4:\"NULL\";s:4:\"type\";i:0;s:21:\"show_capped_no_cookie\";i:1;s:8:\"key_desc\";s:16:\"Default Campaign\";}'," . (int) $userId . ",'" . $data['name'] . "',0,NOW()," . (int) $accountId . "," . (int) $advertiserAccountId . ",NULL)");

        $this->db->query("INSERT INTO `sys_acc_to_rv_agc` SET 
            sys_acc_id = " . (int)$data['id'] . ", 
            rv_acc_id = " . (int)$accountId . ", 
            agency_id = " . (int)$agencyId . ",
            user_id = " . (int)$userId . ",
            advertiser_account_id = " . (int)$advertiserAccountId . ",
            client_id = " . (int)$clientId . ",
            campaign_id = " . (int)$campaignId
        );

        return $accountId;
    }

    public function addBanner($data) {
        //add banner
		$this->db->query("INSERT INTO `rv_banners`(`campaignid`,`contenttype`,`pluginversion`,`storagetype`,`filename`,`imageurl`,`htmltemplate`,`htmlcache`,`width`,`height`,`weight`,`seq`,`target`,`url`,`alt`,`statustext`,`bannertext`,`description`,`adserver`,`block`,`capping`,`session_capping`,`compiledlimitation`,`acl_plugins`,`append`,`bannertype`,`alt_filename`,`alt_imageurl`,`alt_contenttype`,`comments`,`updated`,`acls_updated`,`keyword`,`transparent`,`parameters`,`status`,`ext_bannertype`,`prepend`,`iframe_friendly`) values 
            (" . $data['campaign_id'] . ",'png',0,'web','" . $data['filename'] . "','','',''," . $data['filewidth'] . "," . $data['fileheight'] . ",1,0,'','" . str_replace('&amp;', '&', $data['url']) . "','','','','" . $data['product_name'] . "','',0,0,0,'',NULL,'',0,'','','','" . $data['comments'] . "',NOW(),'0000-00-00 00:00:00','',0,'N;',0,NULL,'',0)");
        $bannerId = $this->db->getLastId();

		$this->db->query("INSERT INTO `rv_ad_zone_assoc`(`ad_zone_assoc_id`,`zone_id`,`ad_id`,`priority`,`link_type`,`priority_factor`,`to_be_delivered`) values 
            (" . (int) $bannerId . ",0," . (int) $bannerId . ",0,0,1,1)");

        $this->db->query("INSERT INTO `rv_audit`(`actionid`,`context`,`contextid`,`parentid`,`details`,`userid`,`username`,`usertype`,`updated`,`account_id`,`advertiser_account_id`,`website_account_id`) values 
            (1,'banners'," . (int) $bannerId . ",NULL,'a:41:{s:8:\"bannerid\";i:" . (int) $bannerId . ";s:10:\"campaignid\";i:" . $data['campaign_id'] . ";s:11:\"contenttype\";s:3:\"png\";s:13:\"pluginversion\";i:0;s:11:\"storagetype\";s:3:\"web\";s:8:\"filename\";s:" . strlen($data['filename']) . ":\"" . $data['filename'] . "\";s:8:\"imageurl\";s:0:\"\";s:12:\"htmltemplate\";s:0:\"\";s:9:\"htmlcache\";s:0:\"\";s:5:\"width\";i:" . $data['filewidth'] . ";s:6:\"height\";i:" . $data['fileheight'] . ";s:6:\"weight\";i:1;s:3:\"seq\";i:0;s:6:\"target\";s:0:\"\";s:3:\"url\";s:" . strlen(str_replace('&amp;', '&', $data['url'])) . ":\"" . str_replace('&amp;', '&', $data['url']) . "\";s:3:\"alt\";s:0:\"\";s:10:\"statustext\";s:0:\"\";s:10:\"bannertext\";s:0:\"\";s:11:\"description\";s:" . strlen($data['product_name']) . ":\"" . $data['product_name'] . "\";s:8:\"adserver\";s:0:\"\";s:5:\"block\";i:0;s:7:\"capping\";i:0;s:15:\"session_capping\";i:0;s:18:\"compiledlimitation\";N;s:11:\"acl_plugins\";N;s:6:\"append\";N;s:10:\"bannertype\";i:0;s:12:\"alt_filename\";s:0:\"\";s:12:\"alt_imageurl\";s:0:\"\";s:15:\"alt_contenttype\";s:0:\"\";s:8:\"comments\";s:" . strlen($data['comments']) . ":\"" . $data['comments'] . "\";s:7:\"updated\";s:19:\"NOW()\";s:12:\"acls_updated\";N;s:7:\"keyword\";s:0:\"\";s:11:\"transparent\";s:4:\"null\";s:10:\"parameters\";s:2:\"N;\";s:6:\"status\";i:0;s:14:\"ext_bannertype\";N;s:7:\"prepend\";N;s:15:\"iframe_friendly\";s:5:\"false\";s:8:\"key_desc\";s:0:\"\";}'," . $data['user_id'] . ",'" . $data['username'] . "',0,NOW()," . $data['account_id'] . "," . $data['advertiser_account_id'] . ",NULL),
            (1,'ad_zone_assoc'," . (int) $bannerId . ",NULL,'a:8:{s:16:\"ad_zone_assoc_id\";i:" . (int) $bannerId . ";s:7:\"zone_id\";i:0;s:5:\"ad_id\";i:" . (int) $bannerId . ";s:8:\"priority\";i:0;s:9:\"link_type\";i:0;s:15:\"priority_factor\";i:1;s:15:\"to_be_delivered\";s:4:\"null\";s:8:\"key_desc\";s:16:\"Ad #1 -> Zone #0\";}'," . (int) $data['user_id'] . ",'" . $data['username'] . "',0,'NOW()'," . (int) $data['account_id'] . "," . $data['advertiser_account_id'] . ",NULL)");

		$this->db->query("INSERT INTO `rv_log_maintenance_priority`(`start_run`,`end_run`,`operation_interval`,`duration`,`run_type`,`updated_to`) values 
            ('NOW()','NOW()',60,0,1,NULL),
            ('NOW()','NOW()',60,0,2,NULL),
            ('NOW()','NOW()',60,0,2,NULL)");

        $this->db->query("INSERT INTO `rv_ocproduct_to_banner` SET 
            product_id = " . (int) $data['product_id'] . ", 
            banner_id = " . (int) $bannerId
        );

        return $bannerId;
    }

	public function getBannerByOcProductId($product_id) {
		$query = $this->db->query("SELECT rb.* FROM rv_ocproduct_to_banner rob
            LEFT JOIN rv_banners rb ON (rob.banner_id = rb.bannerid)
            WHERE rob.product_id = " . $product_id);
		return $query->row;
	}

    public function getRvIds($id) {
        $query = $this->db->query("SELECT * FROM sys_acc_to_rv_agc WHERE sys_acc_id = " . $id);
        return $query->row;
    }

	public function getAgencyBySysAccontId($sys_account_id) {
		$query = $this->db->query("SELECT * FROM rv_agency agc 
            LEFT JOIN sys_acc_to_rv_agc sara ON (agc.agencyid = sara.agency_id)
            WHERE sara.sys_acc_id = " . $sys_account_id);

		return $query->row;
	}

    public function getUserByAccountId($account_id) {
		$query = $this->db->query("SELECT * FROM rv_users WHERE default_account_id = " . $account_id . " ORDER BY user_id LIMIT 1");

		return $query->row;
	}

    public function updateUser($user_id, $data) {
		$query = $this->db->query("UPDATE rv_users
            SET username='" . $data['name'] . "', email_address='" . $data['email'] . "'
            WHERE user_id=" . (int)$user_id);
        return $query;
	}

    public function create_SysAcc_to_RvAgc_Table() {
      $sql = "CREATE TABLE IF NOT EXISTS `sys_acc_to_rv_agc` (
        `sys_acc_id` int(11) NOT NULL,
        `rv_acc_id` INT(11) NOT NULL,
        `agency_id` INT(11) NOT NULL,
        `user_id` int(11) NOT NULL,
        `advertiser_account_id` int(11) NOT NULL,
        `client_id` int(11) NOT NULL,
        `campaign_id` int(11) NOT NULL
      ) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
      $this->db->query($sql);
    }

    public function create_OcProduct_to_RvBanner_Table() {
        $sql = "CREATE TABLE IF NOT EXISTS `rv_ocproduct_to_banner` (
          `product_id` int(11) NOT NULL,
          `banner_id` INT(11) NOT NULL
        ) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
        $this->db->query($sql);
    }
}