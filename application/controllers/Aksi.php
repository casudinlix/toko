<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Aksi extends CI_Controller{
	function __construct(){
		parent::__construct();


	}
	function index(){


	}

function update_harga(){
$kd_produk= $this->input->post('kd_produk');
$hargabeli=$this->input->post('hargabeli');
$hargajual=$this->input->post('hargajual');

$harga=array('kd_produk'=>$this->input->post('kd_produk'),
	'harga_beli'=>$this->input->post('hargabeli'),
	'harga_jual'=>$this->input->post('hargajual'));


$this->db->where('kd_produk',$kd_produk);
$this->db->update('m_produk',$harga);

$s = "<script>
  alert('Update Data Berhasil');
</script>";
echo "<script language='JavaScript'>top.location='javascript:history.go(-2)'; </script> ";
echo $s;     
	}

	//tempat function lain

function update_item(){
	$kd_produk= $this->input->post('kd_produk');
	$jenis=$this->input->post('jenis');

$harga=array('kd_produk'=>$this->input->post('kd_produk'),
	'nama_produk'=>$this->input->post('namaproduk'),
	'jenis_produk'=>$this->input->post('jenis'));


$this->db->where('kd_produk',$kd_produk);
$this->db->update('m_produk',$harga);

$s = "<script>
  alert('Update Data Berhasil');
</script>";
echo "<script language='JavaScript'>top.location='javascript:history.go(-2)'; </script> ";
echo $s;     

}

//untuk function
function tambah_item(){
	 $kd= $this->input->post('kode');
	 $nama= $this->input->post('namaproduk');
	 $jenis=$this->input->post('jenis');

	 $insert=array('kd_produk'=>$kd,'nama_produk'=>$nama,'jenis_produk'=>$jenis);
$this->db->insert('m_produk',$insert);

	 $s = "<script>
  alert('Insert Data Berhasil');
</script>";
echo "<script language='JavaScript'>top.location='javascript:history.go(-2)'; </script> ";
echo $s;     



}

}