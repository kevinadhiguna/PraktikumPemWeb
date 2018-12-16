<?php 
	class Request extends CI_Controller{
		// Check login
			
public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Request';

			
			$this->form_validation->set_rules('kritik', 'Kritik', 'required');
			$this->form_validation->set_rules('wisata', 'Wisata', 'required');

			if($this->form_validation->run() === FALSE){
				
				$this->load->view('request/create', $data);
				
			} else {
				// Upload Image
				$this->request_model->create_request();
				$this->session->set_flashdata('request_created', 'Request added. Thank you for your cooperation');
				redirect('home');
			}
		}
	}

 ?>