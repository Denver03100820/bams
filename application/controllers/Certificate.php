<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certificate extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'CERTIFICATE AND PERMIT';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Certificates and Permits';
        $this->data['content'] = 'certificate/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Certificate/Permit';
        $this->data['content'] = 'certificate/add_certificate';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Certificate/Permit';
        $this->data['content'] = 'certificate/add_certificate';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Certificate/Permit';
        $this->data['content'] = 'certificate/view_certificate';
        $this->load->view('template', $this->data);
    }

    public function print_cert()
    {
        
        $this->data['title_page'] = 'View Certificate/Permit';
        $this->data['content'] = 'certificate/print_cert';
        $this->load->view('template', $this->data);
    }

}

/* End of file certificate.php */
/* Location: ./application/controllers/certificate.php */