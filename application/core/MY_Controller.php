<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{

	public $data = array();

	function __construct()
	{
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->load->helper('form');
		$this->load->library('session');
	}


	public function load_view($page)
	{
		$this->data['content'] = $page;
		$this->load->view('new_template_home', $this->data);
	}

	public function checkOnError($condition, $message, $uri = NULL)
	{
		if ($condition) {
			$this->session->set_flashdata('error', $message);
			return redirect( empty($uri) ? $this->uri->segment(2) : $uri, 'refresh');
		}
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/controllers/site.php */