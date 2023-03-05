<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_daftar');
		$this->load->model('M_dokter');
		$this->load->model('M_kontak');
	}
	function index(){
		$x['no_antrian']=$this->M_daftar->get_no_antrian();
		$x['dokter']=$this->M_dokter->get_all_dokter();
		$x['kontak']=$this->M_kontak->get_all_kontak();
		$this->load->view('depan/index',$x);
	}


	// function simpan_daftar(){
	// 	$no_antrian = htmlspecialchars($this->input->post('no_antrian',TRUE),ENT_QUOTES);
	// 	$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
	// 	$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
	// 	$kontak = htmlspecialchars($this->input->post('kontak',TRUE),ENT_QUOTES);
	// 	if(empty($nama) || empty($email)){
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">Masukkan input dengan benar.</div>');
	// 		redirect('home');
	// 	}else{
	// 		$x = array(
	// 		    'no_antrian' => $no_antrian,
	// 		    'nama' => $nama,
	// 		    'email' => $email,
	// 			'kontak' => $kontak,
	// 			'antrian_status' => 0
	// 			);

	// 				$this->db->insert('tbl_daftar', $x);
	// 				echo $this->session->set_flashdata('msg','success');
	// 				redirect('home');
	// 			}
	// }


	function simpan_daftar(){
		$no_antrian = htmlspecialchars($this->input->post('no_antrian',TRUE),ENT_QUOTES);
		$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$nama = htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$kontak = htmlspecialchars($this->input->post('kontak',TRUE),ENT_QUOTES);
		$data = array(
			'no_antrian'=> $no_antrian,
			'nama'=> $nama,
			'email'=> $email,
			'kontak'=> $kontak,
			'antrian_status'=> 0
		);

			$this->db->insert('tbl_daftar',$data);
			// echo $this->session->set_flashdata('msg','success');
			redirect('home');
    }

// 	function kirim_pesan(){
//       $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
//       $email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
//       $kontak=htmlspecialchars($this->input->post('xphone',TRUE),ENT_QUOTES);
//       $pesan=htmlspecialchars($this->input->post('xmessage',TRUE),ENT_QUOTES);
//       $this->m_kontak->kirim_pesan($nama,$email,$kontak,$pesan);
//       echo $this->session->set_flashdata('msg','success');
//       redirect('home');
//   }

}
