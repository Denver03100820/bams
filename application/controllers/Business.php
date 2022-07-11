<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'REGISTERED BUSINESS';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Registered Business';
        $this->data['content'] = 'business/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Business';
        $this->data['content'] = 'business/add_business';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Registered Business';
        $this->data['content'] = 'business/add_business';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Registered Business';
        $this->data['content'] = 'business/view_business';
        $this->load->view('template', $this->data);
    }

}

/* End of file business.php */
/* Location: ./application/controllers/business.php */