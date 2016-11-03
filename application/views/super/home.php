<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <?php 


  echo $cek['kd_produk'];?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
         <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
                Data STOCK Yang Kurang Dari 12 PCS Berikut Silahkan lakukan Order Kembali
              </div>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool">
               </button>
            <button type="button" class="btn btn-box-tool">
               </button>
          </div>
        </div>
        <div class="box-body">
        <table class="table table-bordered table-striped" id="alert">
                               <thead bgcolor="#eeeeee" align="center">
                                  <tr>

                              <th>Kode Produk </th>
                                    <th>Nama Produk </th>
                                    <th>Jenis</th>
                                    <th>Stock </th>
                                    <th>Lokasi</th>
                                   
                                    


                                    </tr>
                                    </thead>

                                  <tbody>
                                  </tbody>
                              </table>

                             <h3 class="box-title"></h3>
            </div>
    </section>  
        


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


