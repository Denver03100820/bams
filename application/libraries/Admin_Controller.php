<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// session_start();

		// $this->output->enable_profiler(TRUE);

		$this->load->helper('form');
		
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('pagination');

		$this->load->model('user_m');
		$this->load->model('activity_m');

		// $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		
		// Login Check 
		$exception_uris = array(
			'site/login',
			'site/logout'
		);

		if (in_array(uri_string(), $exception_uris) == FALSE) 
		{
			if ($this->user_m->loggedin() == FALSE) 
			{
				redirect(site_url('site/login'));
			}
		}

		// $this->data['master_data'] = array_keys(config_item('master_data'));
		$this->data['form_url'] = form_open(NULL, ['class' =>'form-horizontal', 'role' => 'form']);
		$this->data['counter'] = $this->uri->segment(3, 0);

		// default user permission
		/*$access_right = [
			'enabled_create' => 0,
			'enabled_read' => 1,
			'enabled_update' => 0,
			'enabled_delete' => 0
		];*/

		// $this->db->where('controller', $this->router->class);
		// $this->db->where('group_type', $this->session->userdata('AccountType'));
		// $permission = $this->db->get('user_roles')->row();
		// if (count($permission)) 
		// {
		// 	$access_right = [
		// 		'enabled_create' => $permission->enabled_create,
		// 		'enabled_read' => $permission->enabled_read,
		// 		'enabled_update' => $permission->enabled_update,
		// 		'enabled_delete' => $permission->enabled_delete
		// 	];


		// 	if ( ! $this->_authenticate($permission) )
		// 	{
		// 		$this->redirect_to_dashboard('Unauthorized access detected. You do not have the privilege to access this page.');
		// 	}

		// }

		// $this->session->set_userdata($access_right);

	}

	public function redirect_to_dashboard($msg, $uri = 'dashboard')
	{
		$_SESSION['error'] = $msg;
		redirect(base_url($uri));
	}

	public function _authenticate($permission)
	{
		if (in_array($this->router->method, ['new', 'show', 'edit', 'delete']))
		{
			return ($this->router->method == 'new' && $permission->enabled_create == 1) || 
					($this->router->method == 'show' && $permission->enabled_read == 1) || 
					($this->router->method == 'edit' && $permission->enabled_update == 1) || 
					($this->router->method == 'delete' && $permission->enabled_delete == 1);
		}

		return TRUE;
	}

	public function load_view($page)
	{
		$this->data['content'] = $page;
		$this->load->view('template_admin', $this->data);
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/controllers/Admin_Controller.php */