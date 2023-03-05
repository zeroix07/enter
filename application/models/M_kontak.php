<?php
class M_kontak extends CI_Model{

    function get_all_kontak(){
        $hsl=$this->db->query("SELECT * FROM tbl_kontak");
        return $hsl;
	}
	
	function simpan_kontak($alamat,$email,$telepon){
        $hsl=$this->db->query("insert into tbl_kontak(alamat,email,telepon) values ('$alamat','$email','$telepon')");
        return $hsl;
    }
	
	function update_kontak($id,$alamat,$email,$telepon){
		$hsl=$this->db->query("update tbl_kontak set alamat='$alamat',email='$email',telepon='$telepon' where id='$id'");
		return $hsl;
	}

	//Front-End
	
	function kontak(){
		$hsl=$this->db->query("SELECT * FROM tbl_kontak");
		return $hsl;
	}

}