<?php
class M_daftar extends CI_Model{

	function get_no_antrian(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_antrian,4)) AS kd_max FROM tbl_daftar WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
	}
    function get_all_daftar(){
		$hsl=$this->db->query("SELECT tbl_daftar.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar WHERE antrian_status='0' ORDER BY id DESC");
		return $hsl;
	}
	function get_all_daftar_ceklis(){
		$hsl=$this->db->query("SELECT tbl_daftar.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar WHERE antrian_status='1' ORDER BY id DESC");
		return $hsl;
	}
	function get_all_daftar_rawat(){
		$hsl=$this->db->query("SELECT tbl_daftar.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar WHERE antrian_status='2' ORDER BY id DESC");
		return $hsl;
	}
	function get_all_daftar_pasien(){
		$hsl=$this->db->query("SELECT tbl_daftar.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar WHERE antrian_status='3' ORDER BY id DESC");
		return $hsl;
	}

    function simpan_daftar($table,$data){
		$this->db->insert($table, $data);

	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM tbl_inbox WHERE inbox_id='$kode'");
		return $hsl;
	}

	function update_status_kontak(){
		$hsl=$this->db->query("UPDATE tbl_inbox SET inbox_status='0'");
		return $hsl;
	}
}