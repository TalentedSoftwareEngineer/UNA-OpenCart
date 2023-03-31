<?php
class ModelAccountvendorLtsZone extends Model {
	public function addZone($data, $vendor_id, $customer_id) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "zone SET status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', code = '" . $this->db->escape($data['code']) . "', country_id = '" . (int)$data['country_id'] . "'");
        $zone_id = $this->db->getLastId();

        $this->db->query("INSERT INTO " . DB_PREFIX . "lts_zone SET zone_id = '" . (int)$zone_id . "', status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', customer_id = '" . (int) $customer_id . "', vendor_id = '" . (int) $vendor_id . "', code = '" . $this->db->escape($data['code']) . "', country_id = '" . (int)$data['country_id'] . "'");
		$this->cache->delete('zone');
		
		return $zone_id;
	}

	public function editZone($zone_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "zone SET status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', code = '" . $this->db->escape($data['code']) . "', country_id = '" . (int)$data['country_id'] . "' WHERE zone_id = '" . (int)$zone_id . "'");
        $this->db->query("UPDATE " . DB_PREFIX . "lts_zone SET status = '" . (int)$data['status'] . "', name = '" . $this->db->escape($data['name']) . "', code = '" . $this->db->escape($data['code']) . "', country_id = '" . (int)$data['country_id'] . "' WHERE zone_id = '" . (int)$zone_id . "'");

		$this->cache->delete('zone');
	}

	public function deleteZone($zone_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$zone_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "lts_zone WHERE zone_id = '" . (int)$zone_id . "'");
		$this->cache->delete('zone');
	}

	public function getZone($zone_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "lts_zone WHERE zone_id = '" . (int)$zone_id . "'");

		return $query->row;
	}

	public function getZones($data = array()) {
		$sql = "SELECT *, z.name, c.name AS country FROM " . DB_PREFIX . "lts_zone z LEFT JOIN " . DB_PREFIX . "country c ON (z.country_id = c.country_id)";
        $sql .= " WHERE z.vendor_id = '" . (int)$data['vendor_id'] . "'";

		$sort_data = array(
			'c.name',
			'z.name',
			'z.code'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY c.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getZonesByCountryId($country_id) {
		$zone_data = $this->cache->get('lts_zone.' . (int)$country_id);

		if (!$zone_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "lts_zone WHERE country_id = '" . (int)$country_id . "' AND status = '1' ORDER BY name");

			$zone_data = $query->rows;

			$this->cache->set('lts_zone.' . (int)$country_id, $zone_data);
		}

		return $zone_data;
	}

	public function getTotalZones($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "lts_zone lz";
        $sql .= " WHERE lz.vendor_id = '" . (int)$data['vendor_id'] . "'";
		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalZonesByCountryId($country_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "lts_zone WHERE country_id = '" . (int)$country_id . "'");

		return $query->row['total'];
	}

    public function getTotalAddressesByZoneId($zone_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "address WHERE zone_id = '" . (int)$zone_id . "'");

		return $query->row['total'];
	}

	public function createLtsZoneTable() {
		$sql = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "lts_zone` (
					`zone_id` INT(10) NOT NULL AUTO_INCREMENT,
					`customer_id` int(11) NOT NULL,
					`vendor_id` int(11) NOT NULL,
                    `country_id` INT(11) NOT NULL,
					`name` VARCHAR(255) NOT NULL,
					`code` VARCHAR(255) NOT NULL,
                    `status` tinyint(1) NOT NULL DEFAULT 1,
					PRIMARY KEY (`zone_id`)
				) ENGINE=MYISAM DEFAULT CHARSET=utf8;";
		$this->db->query($sql);
	}
}