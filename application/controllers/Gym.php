<?php
	class Gym extends CI_Controller {
      public function view($gym = 'home')


      {
              if ( ! file_exists(APPPATH.'views/gym/'.$gym.'.php'))
              {
                      // Whoops, we don't have a page for that!
                      show_404();
              }
      
              $data['title'] = ucfirst($gym); // Capitalize the first letter
      
              $this->load->view('templates/header', $data);
              $this->load->view('gym/'.$gym, $data);
              $this->load->view('templates/footer', $data);
            
      }
	}
          
   