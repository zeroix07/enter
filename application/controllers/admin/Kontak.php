<?php
class Kontak extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kontak');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kontak->get_all_kontak();
		$this->load->view('admin/v_kontak',$x);
	}

	function simpan_kontak(){
		$alamat=strip_tags($this->input->post('alamat'));
        $email=strip_tags($this->input->post('email'));
        $telepon=strip_tags($this->input->post('telepon'));
		$this->m_kontak->simpan_kontak($alamat,$email,$telepon);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kontak');
	}

	function update_kontak(){
		$id=strip_tags($this->input->post('id'));
        $alamat=strip_tags($this->input->post('alamat'));
        $email=strip_tags($this->input->post('email'));
        $telepon=strip_tags($this->input->post('telepon'));		
        $this->m_kontak->update_kontak($id,$alamat,$email,$telepon);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kontak');
	}

}
