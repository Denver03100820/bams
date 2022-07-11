<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller 
{
	function __construct() 
	{
		parent::__construct();

		$this->load->library('pagination');

		$this->data['controller'] = 'Users';
		$this->data['title'] = 'User Account';
		$this->data['subtitle'] = btn_new(base_url('user/new'), 'New User Account');
		$this->data['icon'] = '<i class="fa fa-key"></i>';		
	}

	public function index()
	{
		// Set up pagination 
		// $config['total_rows'] = $this->user_m->count();
		// $config['per_page'] = 5;
		// $this->pagination->initialize($config);

		// Create pagination links
		// $this->data['pagination'] = $this->pagination->create_links();


		// Retrieve paginated results, using the dynamically determined offset
		// $this->db->limit($config['per_page'], $this->pagination->offset);

		// Fecth all user
		if ($this->session->userdata('type') != 'S') 
		{
			$this->db->where('account_type != ', 'S');
		}
		$this->data['users'] = $this->user_m->get();

		// Set up the view
		$this->data['page'] = 'Overview';
		
		// Load view 
		$this->load_view('admin/user/index');

	}	

	public function add_new()
	{
		// Fetch a user 
		$this->data['user'] = $this->user_m->get_new();	

		// Set up the form 
		$rules = $this->user_m->rules_admin;
		$rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);

		// Process the form
		if ($this->form_validation->run() == TRUE) 
		{
			$data = $this->user_m->array_from_post(
				[
					'lastname', 
					'firstname', 
					'middlename', 
					'username',
					'password',
					'account_type',
				]
			);

			if (!empty($_POST['password'])) 
			{
				// encrypt Password 
				$data['password'] = $this->user_m->hash($_POST['password']);
				
			}
			else
			{
				// We don't save an empty password
				unset($data['password']);
			}

			$this->user_m->save($data);

			// save log
			$message = "<i class='fa fa-user'></i> A new user <strong>$data[LastName] $data[FirstName]</strong> has been added";
			$this->activity_m->write($message, NULL, $data);

			// redirect to user			
			redirect(site_url('user/index'));
		}

		// Set up the view 
		$this->data['acct_types'] = $this->user_m->get_account_type();
		$this->data['page'] = 'Add User';

		// Load the view
		$this->load_view('admin/user/edit');
		
	}

	public function edit($id = NULL)
	{
		// Fetch a user or create a new user
		if ($id) 
		{
			$this->data['user'] = $this->user_m->get($id);
			count($this->data['user']) || $this->data['errors'][] = 'User could not be found';
		}
		else
		{
			$this->data['user'] = $this->user_m->get_new();
		}

		// Set up the form
		$rules = $this->user_m->rules_admin;
		$id || $rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);

		// Process the form
		if ($this->form_validation->run() == TRUE) 
		{
			$data = $this->user_m->array_from_post(
				[
					'lastname', 
					'firstname', 
					'middlename', 
					'username',
					'password',
					'account_type',
				]
			);

			if (!empty($_POST['password'])) 
			{
				// encrypt Password 
				$data['password'] = $this->user_m->hash2($_POST['password']);
			}
			else
			{
				// We don't save an empty password
				unset($data['password']);
			}
			
			$this->user_m->save($data, $id);

			// save log
			$message = "<i class='fa fa-user'></i> <strong>$data[lastname] $data[firstname]</strong> updated his/her account profile";
			$this->activity_m->write($message, $this->data['user'], $data);

			// redirect to user
			redirect(site_url('user/index'));
		}

		// Set up the view 
		$this->data['acct_types'] = $this->user_m->get_account_type();
		$this->data['page'] = 'Edit User';
		
		// Load the view
		$this->load_view('admin/user/edit');
	}

	public function show($id = NULL)
	{
		// Fetch a user or create a new user
		if ($id) 
		{
			$this->data['user'] = $this->user_m->get($id);
			count($this->data['user']) || $this->data['errors'][] = 'User could not be found';
		}
		else
		{
			$this->data['user'] = $this->user_m->get_new();
		}

		// Set up the form
		$rules = $this->user_m->rules_admin;
		$id || $rules['Password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);

		// Set up the view 
		$this->data['acct_types'] = $this->user_m->get_account_type();
		$this->data['page'] = 'Edit User';
		
		// Load the view
		$this->load->view('admin/user/view', $this->data);
	}	

	public function delete($id = NULL)
	{
		// fetch data
		$user = $this->user_m->get($id, TRUE);

		// process delete
		$this->user_m->delete($id);

		// save log
		$message = "<i class='fa fa-user'></i> User account with username <strong>$user->Username </strong> has been removed";
		$this->activity_m->write($message, $user);

		// redirect to user
		redirect(site_url('user'));
	}


	public function _unique_name($str)
	{
		// Do NOT validate if user already exists
		// UNLESS it's the name for the current user

		$lastname = $this->input->post('lastname');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		
		$this->db->where(array('lastname'=>$lastname, 'firstname' => $firstname, 'middlename' => $middlename));
		$this->db->where('id !=', $this->uri->segment(2,0));
		$user = $this->user_m->get();

		if (count($user)) 
		{
			$this->form_validation->set_message('_unique_name', "$lastname $firstname $middlename is already exists in the list.");
			return FALSE;
		}

		return TRUE;
	}	

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */