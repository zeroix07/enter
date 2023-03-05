<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Pasien extends CI_Controller {

 public function __construct()
 {
   parent::__construct(); 
   $this->load->model('M_daftar');
   require APPPATH.'libraries/PHPMailer/src/Exception.php';
   require APPPATH.'libraries/PHPMailer/src/PHPMailer.php';
   require APPPATH.'libraries/PHPMailer/src/SMTP.php';
 }

 public function index()
 {
    $x['data']=$this->M_daftar->get_all_daftar_pasien();
    $this->load->view('admin/v_pasien',$x);
 }

//  public function update()
//  {
//     $array = array(
//         'antrian_status' => '3',
//         'deskripsi' => $this->input->post('deskripsi')
//     );
//     $this->db->set(
//         $array
//     );
//     $this->db->where('email', $this->input->post('email'));
//     $this->db->update('tbl_daftar'); 
//     echo $this->session->set_flashdata('msg','success');
//      redirect('admin/email');
//  }
}