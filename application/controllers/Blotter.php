<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blotter extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'SECURITY/ PEACE AND ORDER';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Blotter Reports';
        $this->data['content'] = 'blotter/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Blotter';
        $this->data['content'] = 'blotter/add_blotter';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Blotter';
        $this->data['content'] = 'blotter/add_blotter';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Blotter';
        $this->data['content'] = 'blotter/view_blotter';
        $this->load->view('template', $this->data);
    }

}

/* End of file blotter.php */
/* Location: ./application/controllers/blotter.php */