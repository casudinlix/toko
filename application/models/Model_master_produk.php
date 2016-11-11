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
		$years                = date('Y');// tahun
		$get_3_number_of_year = substr($years, 0);// mengambil 3 angka dari sebelah kanan pada tahun sekarang
		$this->db->select('RIGHT(kd_produk,6) as kode', FALSE);
		$this->db->order_by('kd_produk', 'DESC');
		//$this->db->limit(1);
		$query  = $this->db->get('m_produk')->num_rows();
		$query1 = $this->db->get('m_produk')->result();
		$maxid  = $query1[0];
		//cek dulu apakah ada sudah ada kode di tabel.
		if ($query <> 0) {
			//jika kode ternyata sudah ada.
			$data = $query;
			$kode = intval($data)+1;
		} else {
			//jika kode belum ada
			$kode = 1;
		}
		$kodemax  = str_pad($kode, 6, "0", STR_PAD_LEFT);
		$kodejadi = "SB".$get_3_number_of_year.$kodemax;
		return $kodejadi;
	}
}
