<?php
class Ajax_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_ajax($slug = FALSE)
		{
			if ($slug === FALSE)
			{
                $query = $this->db->get('gym');
                return $query->result_array();
			}

			$this->db->like('slug', $slug);
      $query = $this->db->get('gym');
			return $query->result_array();
		}
}