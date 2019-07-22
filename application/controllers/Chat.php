<?php

// application/controller/chat.php

class Chat extends CI_Controller 
{
   public function chatroom()
   {
      $data['title'] = 'Chat';
      $this->load->view('templates/header', $data);
      $this->load->view('chat/chatroom');
      $this->load->view('templates/footer');
   }
}

?>