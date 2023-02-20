<?php
class ModelExtensionModuleLtsVendor extends Model {
	public function install() {
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_vendor` (
			 `vendor_id` bigint(11) NOT NULL,
			  `customer_id` int(11) UNIQUE KEY NOT NULL,
			  `commission_rate` int(11) NOT NULL,
			  `description` varchar(255) NOT NULL,
			  `meta_title` varchar(65) NOT NULL,
			  `meta_description` varchar(255) NOT NULL,
			  `meta_keyword` varchar(255) NOT NULL,
			  `store_owner` varchar(64) NOT NULL,
			  `store_name` varchar(30) NOT NULL,
			  `address` text NOT NULL,
			  `email` varchar(35) NOT NULL,
			  `telephone` varchar(32) NOT NULL,
			  `fax` varchar(32) NOT NULL,
			  `country_id` int(11) NOT NULL,
			  `zone_id` int(11) NOT NULL,
			  `city` varchar(32) NOT NULL,
			  `logo` text NOT NULL,
			  `banner` text NOT NULL,
			  `profile_image` text DEFAULT NULL,
			  `facebook` text NOT NULL,
			  `instagram` text NOT NULL,
			  `youtube` text NOT NULL,
			  `twitter` text NOT NULL,
			  `pinterest` text NOT NULL,
			  `status` int(2) NOT NULL DEFAULT 0,
			  `approved` int(2) NOT NULL DEFAULT 0,
			  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
			 PRIMARY KEY (`vendor_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
		
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_product` (
			 `vendor_product_id` int(11) NOT NULL,
			 `product_id` int(11) NOT NULL,
			  `vendor_id` int(11) NOT NULL,
			  `price` float NOT NULL,
			  `quantity` int(11) NOT NULL,
			  `status` int(11) NOT NULL,
			  `approved` int(11) NOT NULL,
			  `exist` int(11) NOT NULL DEFAULT 0,
			 PRIMARY KEY (`vendor_product_id`)
			) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_manufacturer` (
			 `manufacturer_id` int(11) NOT NULL,
			 `vendor_id` int(11) NOT NULL,
			 PRIMARY KEY (`manufacturer_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_order_product` (
			 `vendor_order_product_id` int(11) NOT NULL,
			`order_id` int(11) NOT NULL,
			  `order_product_id` int(11) NOT NULL,
			  `vendor_id` int(11) NOT NULL,
			  `product_id` int(11) NOT NULL,
			  `order_status_id` int(11) NOT NULL,
			  `quantity` int(11) NOT NULL,
			  `price` decimal(10,4) NOT NULL,
			  `total` decimal(10,4) NOT NULL,
			  `tax` decimal(15,4) NOT NULL,
			  `date_added` datetime NOT NULL,
			  `date_modified` datetime NOT NULL,
			 PRIMARY KEY (`vendor_order_product_id`)
			) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_order_history` (
			 `vendor_order_history_id` int(11) NOT NULL,
		      `order_id` int(11) NOT NULL,
			  `vendor_id` int(11) NOT NULL,
			  `order_status_id` int(11) NOT NULL,
			  `notify` tinyint(1) NOT NULL DEFAULT 0,
			  `comment` text NOT NULL,
			  `date_added` datetime NOT NULL,
			 PRIMARY KEY (`vendor_order_history_id`)
			) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_mail` (
		 `mail_id` int(10) NOT NULL AUTO_INCREMENT,
		 `too_id` int(2) NOT NULL,
		  `subject` varchar(250) NOT NULL,
		  `message` text NOT NULL,
		  `status` int(1) NOT NULL,
		  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
		  `date_modified` datetime NOT NULL DEFAULT current_timestamp(),
		 PRIMARY KEY (`mail_id`)
		) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1");	
        
        
		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_too` (
			 `too_id` int(11) NOT NULL AUTO_INCREMENT,
			 `name` varchar(250) NOT NULL,
			 PRIMARY KEY (`too_id`)
		) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1");

		$this->db->query("INSERT INTO `". DB_PREFIX ."lts_too` (`too_id`, `name`) VALUES(2,  'All Vendor'),(3, 'Approval Vendor'),
			(4,  'Non Approval')");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_attribute_group` (
		 	`attribute_group_id` int(11) NOT NULL,
		 	`vendor_id` int(11) NOT NULL,
		 	PRIMARY KEY (`attribute_group_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8");

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_attribute` (
			`attribute_id` int(11) NOT NULL,
			`attribute_group_id` int(11) NOT NULL,
			`vendor_id` int(11) NOT NULL,
			PRIMARY KEY (`attribute_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1");
        
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_option` (
			 `option_id` int(11) NOT NULL,
			 `vendor_id` int(11) NOT NULL,
			 PRIMARY KEY (`option_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");
			
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_filter_group` (
			 `filter_group_id` int(11) NOT NULL,
			 `vendor_id` int(11) DEFAULT NULL,
			 PRIMARY KEY (`filter_group_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_commission` (
			`vendor_commission_id` int(11) NOT NULL AUTO_INCREMENT,
			 `vendor_id` int(11) NOT NULL,
			  `order_product_id` int(11) NOT NULL,
			  `product_id` int(11) NOT NULL,
			  `order_id` int(11) NOT NULL,
			  `amount` decimal(15,4) NOT NULL,
			  `type` varchar(30) NOT NULL,
			  `status` tinyint(4) NOT NULL,
			  `date_added` datetime NOT NULL,
			  `date_modified` datetime NOT NULL,
			 PRIMARY KEY (`vendor_commission_id`)
			) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_review` (
			 `vendor_review_id` int(11) NOT NULL AUTO_INCREMENT,
			 `review_id` int(11) NOT NULL,
			 `product_id` int(11) NOT NULL,
			 `vendor_id` int(11) NOT NULL,
			 PRIMARY KEY (`review_id`),
			 KEY `product_id` (`product_id`)
			) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_download` (
		 `download_id` int(11) NOT NULL,
		 `vendor_id` int(11) NOT NULL,
		 PRIMARY KEY (`download_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_category` (
			 `category_id` int(11) NOT NULL AUTO_INCREMENT,
			  `vendor_id` int(11) NOT NULL,
			  `assigned` int(11) NOT NULL,
			  `status` int(11) NOT NULL,
			  `approved` int(11) NOT NULL,
			 PRIMARY KEY (`category_id`),
			 KEY (`vendor_id`)
		) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1");


			$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_cart` (
			 `vendor_cart_id` int(11) NOT NULL AUTO_INCREMENT,
			  `cart_id` int(11) NOT NULL,
			  `vendor_id` int(11) NOT NULL,
			  `api_id` int(11) NOT NULL,
			  `customer_id` int(11) NOT NULL,
			  `session_id` varchar(32) NOT NULL,
			  `product_id` int(11) NOT NULL,
			  `quantity` int(5) NOT NULL,
			  `date_added` datetime NOT NULL,
			 PRIMARY KEY (`vendor_cart_id`),
			 KEY `cart_id` (`api_id`,`customer_id`,`session_id`,`product_id`),
             KEY `cart_id_2` (`cart_id`),
              KEY `vendor_id` (`vendor_id`)
		) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1");

		// $this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_store` (
		// 	 `vendor_id` int(11) NOT NULL,
		// 	 `description` varchar(255) NOT NULL,
		// 	 `meta_title` varchar(65) NOT NULL,
		// 	 `meta_description` varchar(255) NOT NULL,
		// 	 `meta_keyword` varchar(255) NOT NULL,
		// 	 `owner_name` varchar(35) NOT NULL,
		// 	 `store_name` varchar(30) NOT NULL,
		// 	 `address` varchar(64) NOT NULL,
		// 	 `email` varchar(35) NOT NULL,
		// 	 `telephone` varchar(32) NOT NULL,
		// 	 `fax` varchar(32) NOT NULL,
		// 	 `country_id` int(11) NOT NULL,
		// 	 `zone_id` int(11) NOT NULL,
		// 	 `city` varchar(32) NOT NULL,
		// 	 `logo` text NOT NULL,
		// 	 `banner` text NOT NULL,
		// 	 `facebook` text NOT NULL,
		// 	 `instagram` text NOT NULL,
		// 	 `youtube` text NOT NULL,
		// 	 `twitter` text NOT NULL,
		// 	 `pinterest` text NOT NULL,
		// 	 UNIQUE KEY `vendor_id` (`vendor_id`)
		// 	) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_product_to_category` (
				 `product_id` int(12) NOT NULL,
				 `category_id` int(12) NOT NULL,
				 `vendor_id` int(12) NOT NULL,
				 PRIMARY KEY (`product_id`,`category_id`),
				 KEY `category_id` (`category_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=latin1
				");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_payment` (
			 `vendor_id` int(13) NOT NULL,
			 `paypal` varchar(50) NOT NULL,
			 `account_holder` varchar(100) NOT NULL,
			 `bankname` varchar(100) NOT NULL,
			 `accountno` varchar(20) NOT NULL,
			 `ifsc` varchar(15) NOT NULL,
			 PRIMARY KEY (`vendor_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		// $this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_commission_report` (
		// 	 `id` int(11) NOT NULL AUTO_INCREMENT,
		// 	  `vendor_id` int(12) NOT NULL,
		// 	  `product_id` int(11) NOT NULL,
		// 	  `name` varchar(255) NOT NULL,
		// 	  `model` varchar(100) NOT NULL,
		// 	  `quantity` varchar(4) NOT NULL,
		// 	  `price` float NOT NULL,
		// 	  `commission` float NOT NULL,
		// 	  `date_added` datetime NOT NULL,
		// 	  PRIMARY KEY (`id`),
		// 	  KEY `vendor_id` (`vendor_id`),
		// 	  KEY `product_id` (`product_id`)
		// 	) ENGINE = InnoDB AUTO_INCREMENT = 9 DEFAULT CHARSET = latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_coupon` (
			 `vendor_coupon_id` int(11) NOT NULL,
			 `coupon_id` int(11) NOT NULL,
			 `vendor_id` int(11) NOT NULL,
			 `code` varchar(20) NOT NULL,
			 PRIMARY KEY (`vendor_coupon_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_assigned_category` (
			 `assigned_category_id` text NOT NULL AUTO_INCREMENT,
			 `vendor_id` int(11) NOT NULL,
             `category_id` text NOT NULL
			 PRIMARY KEY (`assigned_category_id`)
			) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_attribute_mapping` (
			 `attribute_mapping_id` int(11) NOT NULL AUTO_INCREMENT,
			 `attribute` varchar(256) NOT NULL,
			 `category_id` int(11) NOT NULL,
			 PRIMARY KEY (`attribute_mapping_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_option_mapping` (
			 `option_mapping_id` int(11) NOT NULL AUTO_INCREMENT,
			 `category_id` int(11) NOT NULL,
			 `option` varchar(260) NOT NULL,
			 PRIMARY KEY (`option_mapping_id`)
			) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_pincode_status` (
			 `pincode_status_id` int(11) NOT NULL AUTO_INCREMENT,
			 `pincode_id` int(11) NOT NULL,
			 `pincode` int(11) NOT NULL,
			 `status` int(11) NOT NULL,
			 PRIMARY KEY (`pincode_status_id`)
			) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4");


		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_pincode` (
			 `pincode_id` int(11) NOT NULL AUTO_INCREMENT,
			 `name` varchar(255) DEFAULT NULL,
			 `country_id` int(11) DEFAULT NULL,
			 `zone_id` int(11) DEFAULT NULL,
			 `status` int(11) NOT NULL,
			 PRIMARY KEY (`pincode_id`)
		) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_product_exist` (
			 `product_exist_id ` int(11) NOT NULL AUTO_INCREMENT,
			 `product_id` int(11) NOT NULL,
			  `vendor_id` int(11) NOT NULL,
			  `price` float NOT NULL,
			  `quantity` int(11) NOT NULL,
			  `status` int(11) NOT NULL,
			  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
			  `date_modified` datetime NOT NULL DEFAULT current_timestamp(),
			 PRIMARY KEY (`product_exist_id `)
		) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4");

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_product_to_pincode` (
		 `product_id` int(11) NOT NULL,
		 `pincode_id` int(11) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

		// $this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_store` (
		// 	 `vendor_id` int(11) NOT NULL,
		// 	 `description` varchar(255) NOT NULL,
		// 	 `meta_title` varchar(65) NOT NULL,
		// 	 `meta_description` varchar(255) NOT NULL,
		// 	 `meta_keyword` varchar(255) NOT NULL,
		// 	 `owner_name` varchar(35) NOT NULL,
		// 	 `store_name` varchar(30) NOT NULL,
		// 	 `address` varchar(64) NOT NULL,
		// 	 `email` varchar(35) NOT NULL,
		// 	 `telephone` varchar(32) NOT NULL,
		// 	 `fax` varchar(32) NOT NULL,
		// 	 `country_id` int(11) NOT NULL,
		// 	 `zone_id` int(11) NOT NULL,
		// 	 `city` varchar(32) NOT NULL,
		// 	 `logo` text NOT NULL,
		// 	 `banner` text NOT NULL,
		// 	 `facebook` text NOT NULL,
		// 	 `instagram` text NOT NULL,
		// 	 `youtube` text NOT NULL,
		// 	 `twitter` text NOT NULL,
		// 	 `pinterest` text NOT NULL,
		// 	 UNIQUE KEY `vendor_id` (`vendor_id`)
		// 	) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

	

		$this->db->query("CREATE TABLE IF NOT EXISTS `". DB_PREFIX ."lts_subscription` (
			 `subscription_id` int(11) NOT NULL AUTO_INCREMENT,
			 `no_of_product` int(11) NOT NULL,
			 `join_fee` decimal(10,0) NOT NULL,
			 `subscription_fee` decimal(10,0) NOT NULL,
			 `validity` int(11) NOT NULL,
			 `status` int(11) NOT NULL,
			 `default_plan` int(11) NOT NULL,
			 `date_added` datetime NOT NULL,
			 `date_modified` datetime NOT NULL,
			 `product_id` int(11) NOT NULL,
			 `recurring_id` int(11) NOT NULL,
			 `plan_type	` int(2) NOT NULL,
			 PRIMARY KEY (`subscription_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

		$this->db->query("CREATE TABLE  IF NOT EXISTS `". DB_PREFIX ."lts_subscription_description` (
			 `subscription_id` int(11) NOT NULL,
			 `language_id` int(11) NOT NULL,
			 `name` varchar(255) NOT NULL,
			 `description` text NOT NULL,
			 PRIMARY KEY (`subscription_id`,`language_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

		
		$this->db->query("CREATE TABLE  IF NOT EXISTS `". DB_PREFIX ."lts_plan` (
			 `plan_id` int(11) NOT NULL AUTO_INCREMENT,
			 `vendor_id` int(11) NOT NULL,
			 `subscription_id` int(11) NOT NULL,
			 `name` varchar(255) NOT NULL,
			 `no_of_product` int(11) NOT NULL,
			 `join_fee` int(11) NOT NULL,
			 `subscription_fee` int(11) NOT NULL,
			 `validity` int(11) NOT NULL,
			 `date_added` datetime NOT NULL DEFAULT current_timestamp(),
			 `date_expire` datetime NOT NULL,
			 PRIMARY KEY (`plan_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");


	}

	public function uninstall() {
		
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_vendor`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_product`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_manufacturer`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_order_product`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_order_history`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_mail`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_too`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_cart`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_attribute_group`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_attribute`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_option`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_filter_group`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_commission`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_review`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_download`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_category`");
		// $this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_store`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_product_to_category`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_payment`");
		// $this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_commission_report`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_coupon`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_assigned_category`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_attribute_mapping`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_option_mapping`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_pincode`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_pincode_status`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_product_to_pincode`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_product_exist`");
		// $this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_store`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_chat`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_subscription`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_subscription_description`");
		$this->db->query("DROP TABLE IF EXISTS `". DB_PREFIX ."lts_plan`");
	}

}