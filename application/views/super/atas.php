<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>.:Sari Baja:. </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    




    <!--ini datatables -->

<link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
   
     
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/jquery-ui.min.css" />
  
   
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome-animation.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>asset/css/dataTables.tableTools.css">
     <link rel="stylesheet" href="<?php echo base_url();?>asset/css/datatables.css">
     <link rel="stylesheet" href="<?php echo base_url();?>asset/css/buttons.dataTables.min.css">

 

 <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/datepicker.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/jquery.dataTables.css">
 <script src="<?php echo base_url();?>asset/js/jquery-1.9.1.min.js" type="text/javascript"></script>
 
   <link rel="stylesheet" href="<?php echo base_url();?>asset/css/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/TableTools.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/demo_table_jui.css"/>


  <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">

  <link rel="shortcut icon" href="<?php echo base_url();?>asset/img/pp1.jpg"/>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/plugins/select2/select2.min.css">

  <!-- Datatables -->
    <link href="<?php echo base_url();?>asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!--ini Akhir datatables -->
<link href="<?php echo base_url();?>asset/build/css/custom.min.css" rel="stylesheet">
  </head>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url()?>" class="site_title"><i class="fa fa-user"></i> <span>Sari Baja!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>asset/img/pp1.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $nama_user ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Content</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-wrench faa-tada animated"></i> Config <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('super/harga');?>"><i class="fa fa-money faa-tada animated"></i> Harga</a></li>
            <li><a href="<?php echo site_url('super/item');?>"><i class="fa fa-cube faa-tada animated"></i> Item</a></li>
            <li><a href="<?php echo site_url('super/profil');?>"><i class="fa fa-building  faa-tada animated"></i> Profil</a></li>
             <li><a href="<?php echo site_url('super/user');?>"><i class="fa fa-users  faa-tada animated"></i> User Pengguna</a></li>
             <li><a href="?page=config-jenis"><i class="fa fa-dropbox  faa-tada animated"></i> Jenis Item</a></li>
             <li><a href="?page=config-lokasi"><i class="fa fa-location-arrow  faa-tada animated"></i> Lokasi</a></li>
             <li><a href="?page=config-suplier"><i class="fa fa-truck  faa-tada animated"></i>Suplier</a></li>
             <li><a href="?page=config-backup"><i class="fa fa-database  faa-tada animated"></i>Backup Database</a></li>

        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-credit-card"></i> Purcase Order <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=create-po"><i class="fa fa-tasks faa-tada animated"></i>PO</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck faa-passing-reverse animated"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=transaksi-terima-barang"><i class="fa fa-car faa-passing-reverse animated"></i> Penerimaan Barang</a></li>
<li><a href="?page=transaksi-penjualan"><i class="fa fa-money faa-passing-reverse animated"></i> Penjualan Barang</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-database"></i> Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=inventory-produk"><i class="fa fa-cube"></i>Cek Stock</a></li>

                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-book"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?page=laporan-penjualan"><i class="glyphicon glyphicon-shopping-cart"></i>Penjualan</a></li>
            <li><a href="?page=laporan-pembelian"><i class="fa fa-truck"></i>Pembelian</a></li>
            <li><a href="?page=laporan-stock"><i class="glyphicon glyphicon-folder-open"></i>Stock</a></li>
            <li><a href="?page=laporan-hutang"><i class="fa fa-gift"></i>Hutang</a></li>
                    </ul>
                  </li>
                  
              </div>
              </div>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
               
               
              <a href="<?php echo site_url('auth/keluar');?>" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             
            </nav>
          </div>
        </div>
        <!-- /top navigation -->



