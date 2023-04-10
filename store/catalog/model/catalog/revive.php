<?php
class ModelCatalogRevive extends Model {
    public function index() {

    }

    public function addAgency($data) {
		$this->db->query("INSERT INTO `rv_accounts` SET account_type = 'MANAGER', account_name = '" . $data['name'] . "'");
        $accountId = $this->db->getLastId();
	
        $this->db->query("INSERT INTO `rv_agency` SET name = '" . $this->db->escape($data['name']) . "', email = '" . $data['email'] . "', account_id = " . (int)$accountId . ", status = 0, updated = NOW()");
        $agencyId = $this->db->getLastId();

        $this->db->query("INSERT INTO `sys_acc_to_rv_agc` SET agency_id = " . (int)$agencyId . ", rv_acc_id = " . (int)$accountId . ", sys_acc_id = " . (int)$data['id']);

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

        return $userId;
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
        `agency_id` INT(11) NOT NULL,
        `rv_acc_id` INT(11) NOT NULL,
        `sys_acc_id` int(11) NOT NULL
      ) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
      $this->db->query($sql);
    }
}