<?php

// application/controller/search.php

class Search extends CI_Controller 
{
   public function ff()
   {
      $data['title'] = 'Movie Search';
  
      $this->load->view('templates/header', $data);
      $this->load->view('search/ff');
      $this->load->view('templates/footer');
   }
}

?>