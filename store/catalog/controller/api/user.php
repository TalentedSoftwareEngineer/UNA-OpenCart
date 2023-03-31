<?php
class ControllerApiUser extends Controller
{
	private $error = array();

	public function index() {
		$this->load->language('api/user');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/user');

		$this->getList();
	}

	public function add() {
		$this->load->language('api/user');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/user');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$this->model_catalog_user->addUser($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/user', $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('api/user');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/user');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$this->model_catalog_user->editUser($this->request->get['user_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/user', $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('api/user');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/user');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $user_id) {
				$this->model_catalog_user->deleteUser($user_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/user', $url, true));
		}

		$this->getList();
	}

    public function getAllUsers() {
        $this->load->language('api/cart');
        $this->load->model('catalog/user');
  
        $results = $this->model_catalog_user->getUsers();
      
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
    }

	public function getSysUserByProfileId()
	{
		$this->load->language('api/cart');
        $this->load->model('catalog/user');

		$profileId = $this->request->post['profileId'];
		$results = $this->model_catalog_user->getSysUserByProfileId($profileId);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

	public function getSysUserById()
	{
		$this->load->language('api/cart');
        $this->load->model('catalog/user');

		$id = $this->request->post['id'];
		$results = $this->model_catalog_user->getSysUserById($id);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

	public function openCartLogin()
	{
		$this->load->language('common/login');
		if($this->validate())
		{
			$user_token = token(32);
			$this->response->addHeader('Content-Type: application/text');
			$this->response->setOutput($user_token);
		} else {
			$this->response->addHeader('Content-Type: application/text');
			$this->response->setOutput('login failed!');
		}
	}

	public function getAllCustomers()
	{
        $this->load->language('api/cart');
        $this->load->model('catalog/user');
  
        $results = $this->model_catalog_user->getCustomers();
      
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

	public function getSysAccountsIdProfileIdByUri()
	{
        $this->load->language('api/user');
        $this->load->model('catalog/user');
  
        $page_uri = $this->request->post['page_uri'];
		$uri = $this->request->post['uri'];
        $results = $this->model_catalog_user->getSysAccountsIdProfileIdByUri($page_uri, $uri);

		if($results['param_name'] == 'id' && $results['param_value'] != 1) {
			$results['param_value'] = $results['param_value'] + 1;
		}
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

	public function getFriend()
	{
        $this->load->language('api/user');
        $this->load->model('catalog/user');
  
        $loggedUserProfileId = $this->request->post['loggedUserProfileId'];
		$visitedUserProfileId = $this->request->post['visitedUserProfileId'];
        $results = $this->model_catalog_user->getFriend($loggedUserProfileId, $visitedUserProfileId);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($results));
	}

	public function getFriendsCount()
	{
        $this->load->language('api/user');
        $this->load->model('catalog/user');
  
        $profileId = $this->request->post['profileId'];
        $result = $this->model_catalog_user->getFriendsCount($profileId);
  
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'username';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/user', $url, true)
		);

		$data['add'] = $this->url->link('catalog/user/add', $url, true);
		$data['delete'] = $this->url->link('catalog/user/delete', $url, true);

		$data['users'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$user_total = $this->model_catalog_user->getTotalUsers();

		$results = $this->model_catalog_user->getUsers($filter_data);

		foreach ($results as $result) {
			$data['users'][] = array(
				'user_id'    => $result['user_id'],
				'username'   => $result['username'],
				'status'     => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'       => $this->url->link('catalog/user/edit', '&user_id=' . $result['user_id'] . $url, true)
			);
		}

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

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_username'] = $this->url->link('catalog/user', '&sort=username' . $url, true);
		$data['sort_status'] = $this->url->link('catalog/user', '&sort=status' . $url, true);
		$data['sort_date_added'] = $this->url->link('catalog/user', '&sort=date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $user_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/user', $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($user_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($user_total - $this->config->get('config_limit_admin'))) ? $user_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $user_total, ceil($user_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/user_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['user_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['username'])) {
			$data['error_username'] = $this->error['username'];
		} else {
			$data['error_username'] = '';
		}

		if (isset($this->error['password'])) {
			$data['error_password'] = $this->error['password'];
		} else {
			$data['error_password'] = '';
		}

		if (isset($this->error['confirm'])) {
			$data['error_confirm'] = $this->error['confirm'];
		} else {
			$data['error_confirm'] = '';
		}

		if (isset($this->error['firstname'])) {
			$data['error_firstname'] = $this->error['firstname'];
		} else {
			$data['error_firstname'] = '';
		}

		if (isset($this->error['lastname'])) {
			$data['error_lastname'] = $this->error['lastname'];
		} else {
			$data['error_lastname'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/user', $url, true)
		);

		if (!isset($this->request->get['user_id'])) {
			$data['action'] = $this->url->link('catalog/user/add', $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/user/edit', '&user_id=' . $this->request->get['user_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/user', $url, true);

		if (isset($this->request->get['user_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$user_info = $this->model_catalog_user->getUser($this->request->get['user_id']);
		}

		if (isset($this->request->post['username'])) {
			$data['username'] = $this->request->post['username'];
		} elseif (!empty($user_info)) {
			$data['username'] = $user_info['username'];
		} else {
			$data['username'] = '';
		}

		if (isset($this->request->post['user_group_id'])) {
			$data['user_group_id'] = $this->request->post['user_group_id'];
		} elseif (!empty($user_info)) {
			$data['user_group_id'] = $user_info['user_group_id'];
		} else {
			$data['user_group_id'] = '';
		}

		$this->load->model('catalog/user_group');

		$data['user_groups'] = $this->model_catalog_user_group->getUserGroups();

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		if (isset($this->request->post['confirm'])) {
			$data['confirm'] = $this->request->post['confirm'];
		} else {
			$data['confirm'] = '';
		}

		if (isset($this->request->post['firstname'])) {
			$data['firstname'] = $this->request->post['firstname'];
		} elseif (!empty($user_info)) {
			$data['firstname'] = $user_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (isset($this->request->post['lastname'])) {
			$data['lastname'] = $this->request->post['lastname'];
		} elseif (!empty($user_info)) {
			$data['lastname'] = $user_info['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} elseif (!empty($user_info)) {
			$data['email'] = $user_info['email'];
		} else {
			$data['email'] = '';
		}

		if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($user_info)) {
			$data['image'] = $user_info['image'];
		} else {
			$data['image'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
		} elseif (!empty($user_info) && $user_info['image'] && is_file(DIR_IMAGE . $user_info['image'])) {
			$data['thumb'] = $this->model_tool_image->resize($user_info['image'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($user_info)) {
			$data['status'] = $user_info['status'];
		} else {
			$data['status'] = 0;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/user_form', $data));
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/user')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['selected'] as $user_id) {
			if ($this->user->getId() == $user_id) {
				$this->error['warning'] = $this->language->get('error_account');
			}
		}

		return !$this->error;
	}

	protected function validate() {
		if(!isset($this->request->post['username']) || !isset($this->request->post['password']) || !$this->request->post['username'] || !$this->request->post['password']) {
			$this->error['warning'] = $this->language->get('error_login');
		} else {
			$this->load->model('catalog/user');

			// Check how many login attempts have been made.
			$login_info = $this->model_catalog_user->getLoginAttempts($this->request->post['username']);

			if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
				$this->error['error_attempts'] = $this->language->get('error_attempts');
			}
		}

		if(!$this->error) {
			if (!$this->model_catalog_user->login($this->request->post['username'], html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8'))) {
				$this->error['warning'] = $this->language->get('error_login');

				$this->model_catalog_user->addLoginAttempt($this->request->post['username']);

				unset($this->session->data['user_token']);
			} else {
				$this->model_catalog_user->deleteLoginAttempts($this->request->post['username']);
			}
		}

		return !$this->error;
	}
}