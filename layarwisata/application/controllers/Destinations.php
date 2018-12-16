<?php
	class Destinations extends CI_Controller{
		public function index($offset = 0){
			$config['base_url'] = base_url() . 'destinations/index/';
			$config['total_rows'] = $this->db->count_all('destinasi');
			$config['per_page'] = 2;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');
			$this->pagination->initialize($config);
			$data['title'] = 'Destination';
			$data['dests'] = $this->destination_model->get_dest(FALSE, $config['per_page'], $offset);
			$this->load->view('templates/header');
			$this->load->view('destinations/index', $data);
			$this->load->view('templates/footer');
			
		}
	public function view($slug = NULL){
			$data['dest'] = $this->destination_model->get_dest($slug);
			$dest_id = $data['dest']['id'];
		

			if(empty($data['dest'])){
				show_404();
			}

			$data['title'] = $data['dest']['nama_destinasi'];

			$this->load->view('templates/header');
			$this->load->view('destinations/view', $data);
			$this->load->view('templates/footer');
		}
	public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Tambahkan Lokasi';

			
			$this->form_validation->set_rules('nama_destinasi', 'Nama Destinasi', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('destinations/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/destisasi';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2048;
				$config['max_width'] = 2000;
				$config['max_height'] = 2000;

				$this->load->library('upload', $config);

				if(! $this->upload->do_upload('userfile')){
					$errors = array('error' => $this->upload->display_errors());
					$gambar = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$gambar = $_FILES['userfile']['name'];
				}
				$this->destination_model->create_dest($gambar);
				$this->session->set_flashdata('post_created', 'Destination added');
				redirect('destinations');
			}
		}

		public function delete($id){
			$this->destination_model->delete_dest($id);
			redirect('destinations');
		}

		public function edit($slug){
			$data['dest'] = $this->destination_model->get_dest($slug);
			$dest_id = $data['dest']['id'];
		

			if(empty($data['dest'])){
				show_404();
			}

			$data['title'] = 'Edit Destination';

			$this->load->view('templates/header');
			$this->load->view('destinations/edit', $data);
			$this->load->view('templates/footer');
		}
		public function update(){
			// Check login
			

			$this->destination_model->update_dest();

			// Set message
			

			redirect('destinations');
		}
	
	}