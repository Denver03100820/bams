<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asset extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'ASSETS AND PROPERTIES';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Assets and Properties';
        $this->data['content'] = 'assets/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Assets/Properties';
        $this->data['content'] = 'assets/add_assets';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Assets/Properties';
        $this->data['content'] = 'assets/add_assets';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Assets/Properties';
        $this->data['content'] = 'assets/view_assets';
        $this->load->view('template', $this->data);
    }

}

/* End of file assets.php */
/* Location: ./application/controllers/assets.php */