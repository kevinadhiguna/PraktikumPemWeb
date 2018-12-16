<?php
	class Destination_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_dest($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('destinasi.id', 'DESC');
				$query = $this->db->get('destinasi');
				return $query->result_array();
			}

			$query = $this->db->get_where('destinasi', array('slug' => $slug));
			return $query->row_array();
		}
		public function create_dest($post_image){
			$slug = url_title($this->input->post('nama_destinasi'));

			$data = array(
				'nama_destinasi' => $this->input->post('nama_destinasi'),
				'slug' => $slug,
				'deskripsi' => $this->input->post('deskripsi'),
				'gambar' => $post_image
				
			);

			return $this->db->insert('destinasi', $data);
		}
		public function delete_dest($id){
			$image_file_name = $this->db->select('gambar')->get_where('destinasi', array('id' => $id))->row()->gambar;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\destinasi\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id',$id);
			$this->db->delete('destinasi');
			return true;
		}

		public function update_dest(){
			$slug = url_title($this->input->post('nama_destinasi'));

			$data = array(
				'nama_destinasi' => $this->input->post('nama_destinasi'),
				'slug' => $slug,
				'deskripsi' => $this->input->post('deskripsi'),
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('destinasi', $data);
		}

	}
?>