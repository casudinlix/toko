<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                 
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                     
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Pengguna</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                         
                      </li>
                       
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

              
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   

                    
                    <div class="table-responsive">
                    <a href="" title="Tambah"><button class="btn btn-warning"><i class="fa fa-users "></i> Tambah</button></a>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                          <th class="column-title">No </th>
                            <th class="column-title">Username </th>
                            <th class="column-title">Nama User</th>
                            
                            <th class="column-title">Aksi</th>
                            
                          </tr>
                        </thead>
                        <tbody>
 <tr class="even pointer">
   

                        <?php 
                        $no=1;
foreach ($user as $y) {
  
  ?>
  <td colspan="" rowspan="" headers=""><?php echo $no?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->username?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->nama_user?></td>
<td colspan="" rowspan="" headers=""><i class='btn btn-info'><?php echo anchor('super/edit_user/'.$y->id."/".$y->id, '<b/>Edit');?><i class="fa fa-edit"></i></i>
<i class='btn btn-info'><?php echo anchor('super/hapus_user/'.$y->id, '<b/>Hapus');?><i class="fa fa-tra	sh"></i></i>
</td>
   
  </tr>
   </tbody>
  <?php $no++ ;
   } ?>

 

  </table>