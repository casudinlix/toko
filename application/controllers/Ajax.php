<?php
defined('BASEPATH') or exit('No direct script access allowed');
include(FCPATH."config1.php");
class Ajax extends CI_Controller{
	function __construct(){
		parent::__construct();


	}
	function index(){


	}

function harga(){

if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
	$this->load->library('ssp');

$table = 'm_produk';

// Table's primary key
$primaryKey = 'kd_produk';

$columns = array(
  array( 'db' => 'kd_produk', 'dt' => 0, 'field' => 'kd_produk' ),
  array( 'db' => 'nama_produk',  'dt' => 1, 'field' => 'nama_produk' ),
  array( 'db' => 'jenis_produk',   'dt' => 2, 'field' => 'jenis_produk' ),
  array( 'db' => 'harga_beli',     'dt' => 3, 'field' => 'harga_beli'),
  array( 'db' => 'harga_jual',     'dt' => 4, 'field' => 'harga_jual'),
  array('db' => 'kd_produk', 'dt' => 5, 'field' => 'kd_produk', 'formatter' => function( $d ) {
          return '<a href="'. site_url('super/setting_harga/') .'' . $d . '"><i class=\'fa fa-money fa-lg faa-tada animated\' title=\'Update\'></i>Update Harga</a>';
      })




);
// SQL server connection information

$sql_details = array(
	'user' => "root",
	'pass' => "bintang",
	'db'   => "toko",
	'host' => "localhost"
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

// require( 'ssp.class.php' );
//require('inventory/produk/ssp.customized.class.php' );

//$joinQuery = "FROM `m_produk` AS `u` JOIN `tt_stock` AS `ud` ON (`ud`.`kd_produk` = `u`.`kd_produk`)";
//$extraWhere = "`ud`.`stock` <= 12 AND `ud`.`stock` <> 0";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
);









        }
	}

	//tempat function lain

function item(){
	if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
	$this->load->library('ssp');

$table = 'm_produk';

// Table's primary key
$primaryKey = 'kd_produk';

$columns = array(
  array( 'db' => 'kd_produk', 'dt' => 0, 'field' => 'kd_produk' ),
  array( 'db' => 'nama_produk',  'dt' => 1, 'field' => 'nama_produk' ),
  array( 'db' => 'jenis_produk',   'dt' => 2, 'field' => 'jenis_produk' ),
 // array( 'db' => 'harga_beli',     'dt' => 3, 'field' => 'harga_beli'),
  //array( 'db' => 'harga_jual',     'dt' => 4, 'field' => 'harga_jual'),
  array('db' => 'kd_produk', 'dt' => 3, 'field' => 'kd_produk', 'formatter' => function( $d ) {
          return '<a href="'. site_url('super/setting_item/') .'' . $d . '"><i class=\'fa fa-edit fa-lg faa-tada animated\' title=\'Update\'></i>Edit</a>';
      })




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

//$joinQuery = "FROM `m_produk` AS `u` JOIN `tt_stock` AS `ud` ON (`ud`.`kd_produk` = `u`.`kd_produk`)";
//$extraWhere = "`ud`.`stock` <= 12 AND `ud`.`stock` <> 0";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
);

}

}
function user(){
	if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
	$this->load->library('ssp');

$table = 'users';

// Table's primary key
$primaryKey = 'id';

$columns = array(
  array( 'db' => 'username', 'dt' => 0, 'field' => 'username' ),
  array( 'db' => 'nama_user',  'dt' => 1, 'field' => 'nama_user' ),
  //array( 'db' => 'jenis_produk',   'dt' => 2, 'field' => 'jenis_produk' ),
 // array( 'db' => 'harga_beli',     'dt' => 3, 'field' => 'harga_beli'),
  //array( 'db' => 'harga_jual',     'dt' => 4, 'field' => 'harga_jual'),
  array('db' => 'id', 'dt' => 2, 'field' => 'id', 'formatter' => function( $d ) {
          return '<a href="'. site_url('super/setting_user/') .'' . $d . '"><i class=\'fa fa-edit fa-lg faa-tada animated\' title=\'Edit\'></i>Edit</a>';
      })




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

//$joinQuery = "FROM `m_produk` AS `u` JOIN `tt_stock` AS `ud` ON (`ud`.`kd_produk` = `u`.`kd_produk`)";
//$extraWhere = "`ud`.`stock` <= 12 AND `ud`.`stock` <> 0";

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
);
}
}


// untuk function baru
}
