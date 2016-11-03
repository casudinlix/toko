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
		$cek=$this->db->get_where("tt_stock",array('stock'<=12))->result();
//$cek =$this->db->select("kd_produk");
		//$cek['stock']=$this->db->or_where("stock <=12 ");
		//$cek['stock1']=$this->db->or_where("stock <>0 ");



$this->load->view('super/home',$cek);



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
	array( 'db' => 'sum(`ud`.`stock`)',     'dt' => 5, 'field' => 'stock','as' =>'stock')
	
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

	//tempat function lain

}