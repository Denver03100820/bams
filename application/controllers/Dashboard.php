<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'DASHBOARD';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'Dashboard';
        $this->data['content'] = 'dashboard/index';
        $this->load->view('template', $this->data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */