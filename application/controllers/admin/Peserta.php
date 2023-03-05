<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Peserta extends CI_Controller{
	function __construct(){
		parent::__construct();
		require APPPATH.'libraries/PHPMailer/src/Exception.php';
			require APPPATH.'libraries/PHPMailer/src/PHPMailer.php';
			require APPPATH.'libraries/PHPMailer/src/SMTP.php';
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);	
        };
        $this->load->model('M_daftar');

	}

	function index(){
        $x['data']=$this->M_daftar->get_all_daftar();
		$this->load->view('admin/v_pendaftar',$x);
	}

	function kirim_email() {
		// $id=strip_tags($this->input->post('id'));
		// $email=strip_tags($this->input->post('email'));
		// $no_peserta=strip_tags($this->input->post('no_peserta'));
		// $nama=strip_tags($this->input->post('nama'));
		// $email=strip_tags($this->input->post('email'));
		// $kontak=strip_tags($this->input->post('kontak'));
		// $id = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
		// $nama = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
		// $email = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
		// $kontak = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);

       // PHPMailer object
		$response = false;
		$mail = new PHPMailer();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'akmalubed123@gmail.com'; // user email anda
		$mail->Password = 'htxosrqiqietpjbg'; // diisi dengan App Password yang sudah di generate
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('akmalubed123@gmail.com', ''); // user email anda
		$mail->addReplyTo('akmalubed123@gmail.com', ''); //user email anda

		// Email subject
		$mail->Subject = 'TIKET ANTRIAN'; //subject email

		// Add a recipient
		$mail->addAddress($this->input->post('email')); //email tujuan pengiriman email
		
		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<p>Hallo <b>".$this->input->post('nama')."</b> berikut ini adalah nomor antrian anda:</p>
		<table>
		<tr>
			<td>Nomor Antrian</td>
			<td>:</td>
			<td>".$this->input->post('no_antrian')."</td>
			</tr>
			<tr>
			<td>Nama</td>
			<td>:</td>
			<td>".$this->input->post('nama')."</td>
			</tr>
			<tr>
			<td>Kontak</td>
			<td>:</td>
			<td>".$this->input->post('kontak')."</td>
			</tr>
			<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td>".$this->input->post('deskripsi')."</td>
			</tr>
		</table>
		<p>Terimakasih <b>".$this->input->post('nama')."</b> telah menunggu antrian.</p>"; // isi email
		$mail->Body = $mailContent;

		// Send email
		if(!$mail->send()){
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			$array = array(
				'antrian_status' => '1',
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->db->set(
				$array
			);
			$this->db->where('email', $this->input->post('email'));
			$this->db->update('tbl_daftar'); 
			echo $this->session->set_flashdata('msg','info');
     		redirect('admin/peserta');
		}

	}

	function hapus(){
		$id=$this->input->post('id');
		$this->db->delete('tbl_daftar', array('id' => $id));
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/peserta');
	}
}