<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Super extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		if ($this->session->userdata('role') <> 1) {
			redirect('auth');
		}

	}


	public function index(){
		

		
		
		$d['nama_user'] = $this->session->userdata('nama_user');
		
		$this->load->view('super/atas', $d);
	//ini untuk konten
		//$cek['sisa']=$this->db->get_where('tt_stock',array('stock'<=12))->result();
		//$this->db->select("kd_produk");
		$this->db->where("stock <=12 ");
		//$this->db->or_where("stock <>0 ");
		$cek=$this->db->get('tt_stock');

		$row = $cek->result();
		
		$this->load->view('super/home');



		$this->load->view('super/bawah',$d);
	}

	function alert(){

if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
	$this->load->library('ssp');

$table = 'm_produk';

// Table's primary key
$primaryKey = 'kd_produk';

$columns = array(
	array( 'db' => '`u`.`kd_produk`', 'dt' => 0, 'field' => 'kd_produk' ),
	array( 'db' => '`u`.`nama_produk`',  'dt' => 1, 'field' => 'nama_produk' ),
	array( 'db' => '`u`.`jenis_produk`',   'dt' => 2, 'field' => 'jenis_produk' ),
	array( 'db' => '`ud`.`stock`',     'dt' => 3, 'field' => 'stock'),
	array( 'db' => '`ud`.`lokasi`',     'dt' => 4, 'field' => 'lokasi'),
	array( 'db' => '`ud`.`stock`',     'dt' => 5, 'field' => 'stock','as' =>'stock')
	
);
// SQL server connection information

$sql_details = array(
	'user' => 'root',
	'pass' => 'bintang',
	'db'   => 'toko',
	'host' => 'localhost'
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

// require( 'ssp.class.php' );
//require('inventory/produk/ssp.customized.class.php' );

$joinQuery = "FROM `m_produk` AS `u` JOIN `tt_stock` AS `ud` ON (`ud`.`kd_produk` = `u`.`kd_produk`)";
$extraWhere = "`ud`.`stock` <= 12 AND `ud`.`stock` <> 0";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery,$extraWhere)
);


		






        }
	}

	function harga(){
		$d['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('super/atas', $d);
		$this->load->view("super/config/harga");
		$this->load->view('super/bawah',$d);

	}
	function setting_harga(){
		$this->load->model('model_master_produk');
	$kd_produk = $this->uri->segment(3);
	$data['produk'] = $this->model_master_produk->produk($kd_produk)->row_array();

		$d['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('super/atas', $d);
		$this->load->view("super/config/setting_harga",$data);
		$this->load->view('super/bawah',$d);

	}
	function item(){
		$d['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('super/atas', $d);
		$this->load->view("super/config/item");
		$this->load->view('super/bawah',$d);

	}
	function setting_item(){
		$d['nama_user'] = $this->session->userdata('nama_user');
		$this->load->model('model_master_produk');
		$d['jenis']= $this->model_master_produk->jenis();
		$kd_produk = $this->uri->segment(3);
		$data['produk'] = $this->model_master_produk->produk($kd_produk)->row_array();


		$this->load->view('super/atas', $d);
		$this->load->view("super/config/setting_item",$data,$d);
		$this->load->view('super/bawah',$d);

	}
	function tambah_item(){
		$d['nama_user'] = $this->session->userdata('nama_user');

		$this->load->model('model_master_produk');
		$d['kode'] = $this->model_master_produk->kode_item();
		$d['jenis']= $this->model_master_produk->jenis();
		$this->load->view('super/atas', $d);
		$this->load->view("super/config/tambah_item",$d);
		$this->load->view('super/bawah',$d);


	}
	function profil(){
		$d['nama_user'] = $this->session->userdata('nama_user');

		$this->load->model('model_master_produk');
		$d['profil'] = $this->model_master_produk->profil();
		//$d['jenis']= $this->model_master_produk->jenis();
		$this->load->view('super/atas', $d);
		$this->load->view("super/config/profil",$d);
		$this->load->view('super/bawah',$d);

	}
	function edit_profil(){
		$this->load->model('model_master_produk');
		$d['jenis']= $this->model_master_produk->profil();
		$id = $this->uri->segment(3);
		$data['profil'] = $this->model_master_produk->edit_profil1($id)->row_array();
$d['nama_user'] = $this->session->userdata('nama_user');

		$this->load->view('super/atas', $d);
		$this->load->view("super/config/edit_profil",$data,$d);
		$this->load->view('super/bawah',$d);
}
}