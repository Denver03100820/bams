<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'REAL ESTATES AND PROPERTIES';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Real Estates and Properties';
        $this->data['content'] = 'property/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Real Estate/Property';
        $this->data['content'] = 'property/add_property';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Real Estate/Property';
        $this->data['content'] = 'property/add_property';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Real Estate/Property';
        $this->data['content'] = 'property/view_property';
        $this->load->view('template', $this->data);
    }

}

/* End of file property.php */
/* Location: ./application/controllers/property.php */