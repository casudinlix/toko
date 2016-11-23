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
                    <h2>Profil Perusahaan</h2>
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
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              
                            </th>
                            <th class="column-title">Nama </th>
                            <th class="column-title">Alamat </th>
                            <th class="column-title">Kota</th>
                            <th class="column-title">Telphone </th>
                            <th class="column-title">Fax</th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Aksi</th>
                            
                          </tr>
                        </thead>
                        <tbody>
 <tr class="even pointer">
  <td class="a-center ">
                              
                            </td>

                        <?php 
foreach ($profil as $y) {
  
  ?>
<td colspan="" rowspan="" headers=""><?php echo $y->koperasi?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->alamat?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->kota?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->tlp?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->fax?></td>
<td colspan="" rowspan="" headers=""><?php echo $y->email?></td>
<td colspan="" rowspan="" headers=""><i class='btn btn-info'><?php echo anchor('super/edit_profil/'.$y->id, '<b/>Edit');?><i class="fa fa-edit"></i></i></td>
   
  </tr>
  </tbody>
  <?php } ?>


  </table>