<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends My_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->data['content'] = 'home/login_page';
        $this->load->view('template_home', $this->data);
    }
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */