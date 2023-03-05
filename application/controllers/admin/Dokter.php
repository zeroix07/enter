<?php
class Dokter extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_dokter');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_dokter->get_all_dokter();
		$this->load->view('admin/v_dokter',$x);
	}
	
	function simpan_dokter(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $foto=$gbr['file_name'];
							$nama_dokter=strip_tags($this->input->post('nama_dokter'));
							$dokter_spesialis=strip_tags($this->input->post('dokter_spesialis'));
							$this->m_dokter->simpan_dokter($nama_dokter,$dokter_spesialis,$foto);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/dokter');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/dokter');
	                }
	                 
	            }else{
	            	// $nama_dokter=strip_tags($this->input->post('nama_dokter'));
					// $isi=strip_tags($this->input->post('isi'));
					// $email=strip_tags($this->input->post('email'));
					// $this->m_dokter->simpan_testi($nama,$isi,$email);
					// echo $this->session->set_flashdata('msg','success');
					// redirect('admin/dokter');
				}
				
	}
	
	function update_dokter(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $foto=$gbr['file_name'];
	                        $id=$this->input->post('id');
							$nama_dokter=strip_tags($this->input->post('nama_dokter'));
							$dokter_spesialis=strip_tags($this->input->post('dokter_spesialis'));
							$this->m_dokter->update_dokter($id,$nama_dokter,$dokter_spesialis,$foto);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/dokter');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/dokter');
	                }
	                
	            }else{
					$id=$this->input->post('id');
					$nama_dokter=strip_tags($this->input->post('nama_dokter'));
					$dokter_spesialis=strip_tags($this->input->post('dokter_spesialis'));
					$this->m_dokter->update_dokter_tanpa_img($id,$nama_dokter,$dokter_spesialis);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/dokter');
	            } 

	}

	function hapus_dokter(){
		$id=$this->input->post('id');
        $nama_dokter=$this->input->post('nama_dokter');
		$foto=$this->input->post('foto');
		$path='./assets/images/'.$foto;
		unlink($path);
		$this->m_dokter->hapus_dokter($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/dokter');
	}

}