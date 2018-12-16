<?php
	class Request_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_request(){
			$slug = url_title($this->input->post('nama_destinasi'));

			$data = array(
				'user_id' => $this->session->userdata('user_id'),
				'kritik' => $this->input->post('kritik'),
				'wisata' => $this->input->post('wisata')
				
				
			);

			return $this->db->insert('request', $data);
		}
		}
?>