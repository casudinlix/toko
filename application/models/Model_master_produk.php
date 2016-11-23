<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_master_produk extends CI_Model{

	function produk($kd_produk){
		return $this->db->get_where('m_produk', array('kd_produk' => $kd_produk));
	}
	function jenis(){
		$result = $this->db->get("m_jenis")->result();
		return $result;
	}
	function kode_item(){
		$create = strtoupper(uniqid(rand(),true)); 
    $s='SB.';
    $d=date('Y');
    $b=date('m');
    $h=date('d');
    $style = $s.$d.$b.$h.substr($create,0,3);
        
    return $style;
}
function profil(){
	$result = $this->db->get("profil")->result();
		return $result;

}
function edit_profil1($id){
	return $this->db->get_where('profil', array('id' => $id));

}
function user(){
	$result = $this->db->get_where('users',array('role'=> 2))->result();
		return $result;

}
}
