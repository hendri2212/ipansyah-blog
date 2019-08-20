<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends ADM_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
		if (!$this->session->userdata('username')) {
			redirect('login');
		}
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['admins'] = $this->Welcome_model->admin_rows();
		$data['penulis'] = $this->Welcome_model->penulis_rows();
		$data['posts'] = $this->Welcome_model->post_rows();
		$this->pages('welcome', $data);
	}

	public function edit_Background(){
		$this->pages('background/editBackground');
	}

	public function update_background(){
		$config['upload_path']   = "../assets/img/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['overwrite']     = FALSE;
        $config['remove_spaces'] = TRUE;
		$config['max_size']		 = '1000000';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('nama_background')){
			$gbr = $this->upload->data();
			$gambar = $gbr['file_name'];
			
			$cek = $this->Welcome_model->changeGambar();

			$remove_image = "../assets/img/".$cek->nama_background;
			unlink($remove_image);

			if ($this->Welcome_model->updateGambar($gambar)) {
				$data['info']  = '
					<div class="alert alert-success"><p><strong>Berhasil Mengupload Video</strong></p></div>';
			}else{
				$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Mengupload Video!</strong></p></div>';
			}
		}else{
			$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Mengupload Video!</strong></p></div>';
		}
		$this->pages('background/editBackground', $data);
	}

	public function tampilkan_video(){
		$data['video'] = $this->Welcome_model->tampilkan_video();
		$this->pages('video/videoList', $data);
	}

	public function tambah_video(){
        $this->pages('video/videoForm');
        
    }

    public function simpan_video(){
		$config['upload_path']   = "../assets/video";
		$config['allowed_types'] = 'avi|flv|wmv|mp3|mp4|jpg';
        $config['overwrite']     = FALSE;
        $config['remove_spaces'] = TRUE;
		$config['max_size']		 = '1000000';

		$this->load->library('upload', $config);
        if($this->upload->do_upload('nama_video')){
			$vdo = $this->upload->data();
			$video = $vdo['file_name'];

			if ($this->Welcome_model->simpan_video($video)) {
				$data['info']  = '
					<div class="alert alert-success"><p><strong>Berhasil Mengupload Video</strong></p></div>';
			}else{
				$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Mengupload Video!</strong></p></div>';
			}
		}else{
			$data['info']  = '
					<div class="alert alert-danger"><p><strong> Gagal Mengupload Video!</strong></p></div>';
		}
		$this->pages('video/videoForm', $data);
        
  }

}
