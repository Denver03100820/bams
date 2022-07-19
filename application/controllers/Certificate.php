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

        // print data
        $this->data['bc_no_ect'] = '0705';
        $this->data['name'] = 'SAN MIGUEL CORPORATION';
        $this->data['address'] = 'Pasig City';
        $this->data['porpose'] = 'Fiber Optic Cable at South Super Highway';
        $this->data['date'] = 'January 21, 2021 to January 29, 2021';
        $this->data['ornum'] = 'MKT 9055145';
        $this->data['amount'] = '500.00';
        
        $this->data['captain'] = 'HAZEL ANN S. LACIA';
        // print body
        // -------------------------
        // AERIAL INSTALLATION
        // $this->data['cert_title'] = 'CERTIFICATION';
        // $this->data['cert_body'] = 'aerial_installation';

        // BUILDING CLERANCE
        // $this->data['cert_title'] = 'CERTIFICATION';
        // $this->data['cert_body'] = 'building_clerance';

        // BUSINESS CLEARANCE WITH PENALTIES
        $this->data['cert_title'] = 'BARANGAY BUSINESS CLEARANCE';
        $this->data['cert_body'] = 'business_clearance_with_penalties';

        // view data
        $this->data['title_page'] = 'View Certificate/Permit';
        $this->data['content'] = 'certificate/view_certificate';
        $this->load->view('template', $this->data);
    }
}

/* End of file certificate.php */
/* Location: ./application/controllers/certificate.php */