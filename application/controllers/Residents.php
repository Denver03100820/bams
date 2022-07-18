<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Residents extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'Residents';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Residents';
        $this->data['content'] = 'residents/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Resident Registration';
        $this->data['javascript'] = 'residents/script';
        $this->data['content'] = 'residents/add_profile';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Resident Profile';
        $this->data['content'] = 'residents/add_profile';
        $this->load->view('template', $this->data);
    }

    public function view()
    {
        
        $this->data['title_page'] = 'Resident Information';
        $this->data['content'] = 'residents/view_profile';
        $this->load->view('template', $this->data);
    }
}

/* End of file citizens.php */
/* Location: ./application/controllers/citizens.php */