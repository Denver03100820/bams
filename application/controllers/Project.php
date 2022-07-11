<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends My_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['title_header'] = 'PROJECTS AND PROGRAMS';
    }

    public function index()
    {
        
        $this->data['title_page'] = 'List of Projects and Programs';
        $this->data['content'] = 'project/index';
        $this->load->view('template', $this->data);
    }

    public function add()
    {
        
        $this->data['title_page'] = 'New Project/Program';
        $this->data['content'] = 'project/add_project';
        $this->load->view('template', $this->data);
    }

    public function edit()
    {
        
        $this->data['title_page'] = 'Edit Project/Program';
        $this->data['content'] = 'project/add_project';
        $this->load->view('template', $this->data);
    }


    public function view()
    {
        
        $this->data['title_page'] = 'View Project/Program';
        $this->data['content'] = 'project/view_project';
        $this->load->view('template', $this->data);
    }

}

/* End of file project.php */
/* Location: ./application/controllers/project.php */