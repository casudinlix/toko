<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profil Perusahaan</h3>
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
                     <?php echo $this->uri->segment(3);?>
                      <a href="<?php echo site_url('super/profil')?>"><button class="btn btn-primary">Cancel</button></a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                         
                        </ul>
                      </li>
                       
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

 <form class="form-horizontal form-label-left" novalidate method="post" action="<?php echo site_url('aksi/update_profil')?>">

                      

                      <div class="item form-group">
                        <?php echo form_hidden('id', $this->uri->segment(3));?>

                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="nama" class="form-control col-md-7 col-xs-12" class="form-control"><?php echo $profil['koperasi']?></textarea>
                        </div>
                      </div>

                        
                      </div>
                      <div class="item form-group">
                        
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="alamat" class="form-control col-md-7 col-xs-12" class="form-control"><?php echo $profil['alamat']?></textarea>
                        </div>
                      </div>

                        
                      </div>
                      
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="teks" id="number" name="kota" required="required" data-validate-minmax="1000" class="form-control col-md-7 col-xs-12"  value="<?php echo $profil['kota']?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Telephone <span class="required">*</span>
                        </label>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="tlp" required="required" data-validate-minmax="1000" class="form-control col-md-7 col-xs-12" value="<?php echo $profil['tlp']?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Fax <span class="required">*</span>
                        </label>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="fax" required="required" data-validate-minmax="1000" class="form-control col-md-7 col-xs-12" value="<?php echo $profil['fax']?>" >
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Email <span class="required">*</span>
                        </label>


                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $profil['email']?>" >
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
     
                          <input id="send" type="submit" class="btn btn-success" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
