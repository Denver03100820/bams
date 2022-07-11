<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Streets extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('street_m');
        $this->data['title_header'] = 'STREETS';
    }

    public function index()
    {
        if ($this->input->post()) 
        {
            $this->db->like('street_name',$this->input->post('search_street'));
        }
        $streets = $this->street_m->get();

        $this->data['streets'] = $streets;
        
        $this->data['title_page'] = 'List of Streets';
        $this->data['content'] = 'streets/index';
        $this->data['javascript'] = 'streets/script';
        $this->data['form_add'] = base_url('streets/save');
        $this->data['form_edit'] = base_url('streets/save');
        $this->data['form_delete'] = base_url('streets/add');
        $this->data['modal'] = ['modals/add_street','modals/delete_street','modals/edit_street'];
        $this->load->view('template', $this->data);
    }

    public function save($id = NULL)
    {
        $result = array('msg' => "", 'error' =>FALSE);
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->input->method(TRUE);
       
        $rules = $this->street_m->rules;
        if ($id == NULL) 
           $rules['street_name']['rules'] .= "|callback__validate_duplicate";
        
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE)
        {
            //saving
            // dump($data);
             $msg = "Record Successfully Updated";
            if ($id == NULL) 
            {
                $msg = "Record Successfully Added";
                $data['encode_by'] = "0";
            }
            
            $this->street_m->save($data,$id);
            $result['msg'] = '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="alert alert-success">'.$msg.'</div></div></div>';
            
        }
        else
        {
            $result['error'] = TRUE;
            $result['msg'] = '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="alert alert-danger">'.validation_errors().'</div></div></div>';

        }

        echo json_encode($result);
    }

    public function _validate_duplicate($str)
    {
        $street = $this->street_m->get_by(['street_name' => $str]);
        if (count($street))
        {
            $this->form_validation->set_message('_validate_duplicate', "Duplicate Street Name Found !");
            return FALSE;
        }
        return TRUE;
    }

}

/* End of file streets.php */
/* Location: ./application/controllers/streets.php */