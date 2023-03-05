<?php
class M_dokter extends CI_Model{

    function get_all_dokter(){
        $hsl=$this->db->query("SELECT * FROM tbl_dokter");
        return $hsl;
	}
	
	function simpan_dokter($nama_dokter,$dokter_spesialis,$foto){
        $hsl=$this->db->query("insert into tbl_dokter(nama_dokter,dokter_spesialis,foto) values ('$nama_dokter','$dokter_spesialis','$foto')");
        return $hsl;
    }
	
	function update_dokter($id,$nama_dokter,$dokter_spesialis,$foto){
		$hsl=$this->db->query("update tbl_dokter set nama_dokter='$nama_dokter',dokter_spesialis='$dokter_spesialis',foto='$foto' where id='$id'");
		return $hsl;
	}
    function update_dokter_tanpa_img($id,$nama_dokter,$dokter_spesialis){
		$hsl=$this->db->query("update tbl_dokter set nama_dokter='$nama_dokter',dokter_spesialis='$dokter_spesialis' where id='$id'");
		return $hsl;
	}
	
	function hapus_dokter($id){
		$hsl=$this->db->query("delete from tbl_dokter where id='$id'");
		return $hsl;
	}

	//Front-End
	
	function dokter(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter");
		return $hsl;
	}
	function limit_dokter(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter ORDER BY id DESC limit 5");
		return $hsl;
	}

}