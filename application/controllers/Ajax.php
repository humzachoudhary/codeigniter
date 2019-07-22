<?php

// application/controller/Ajax.php

class Ajax extends CI_Controller 
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Ajax_model');
      $this->load->helper('url_helper');
    }
  
   public function getdata($slug = NULL)
   {
      // Get data from db
      $data['ajaxdata'] = $this->Ajax_model->get_ajax($slug);
  
      // Pass data to view
      $this->load->view('ajax/index', $data);
   }
   
   public function view($page = 'index')
        {
               
                $this->load->view('templates/header', $data);
                $this->load->view('ajax/index');
                $this->load->view('templates/footer');
        }
}