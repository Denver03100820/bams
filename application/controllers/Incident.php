<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incident extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'SECURITY/ PEACE AND ORDER';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Incident Reports';
        $this->data['content'] = 'incident/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Incident';
        $this->data['content'] = 'incident/add_incident';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Incident';
        $this->data['content'] = 'incident/add_incident';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Incident';
        $this->data['content'] = 'incident/view_incident';
        $this->load->view('template', $this->data);
    }

}

/* End of file blotter.php */
/* Location: ./application/controllers/blotter.php */