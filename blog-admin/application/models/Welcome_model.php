<?php
	class Welcome_model extends CI_model
	{

		function __construct()
		{
			parent::__construct();
		}

		function admin_rows()
		{
      $this->db->where('level', 'administrator');
			$query = $this->db->get('user');
			return $query->num_rows();
		}

    function penulis_rows()
		{
      $this->db->where('level', 'penulis');
			$query = $this->db->get('user');
			return $query->num_rows();
		}

		function post_rows()
		{
      $this->db->where('status_delete', '0');
			$query = $this->db->get('post');
			return $query->num_rows();
		}
		
		public function tampilkan_video(){
			return $this->db->get('video')->result();
		}

		public function changeGambar(){
			return $this->db->get('background')->row();
		}

		public function updateGambar($gambar){
			$data = array(
				"nama_background" => $gambar
			);
			if($this->db->update('background', $data)){
				return true;
			}else{
				return false;
			}
		}
	
		public function simpan_video($video){
			$data = array(
				"nama_video" => $video
			);
			if($this->db->insert('video', $data)){
				return true;
			}else{
				return false;
			}
			
			// redirect('Welcome/tambah_video');
		}
	}
 ?>
