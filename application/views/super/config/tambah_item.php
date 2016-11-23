
        <!-- page content -->
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
                    <h2>Form Tambah Item <small></small></h2>
                    <a href="<?php echo site_url('super/item');?>"><button class="btn btn-primary">Cancel</button></a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       
                         
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<form class="form-horizontal form-label-left" novalidate method="post" action="<?php echo site_url('aksi/tambah_item') ?>">

                      <p> 
                      </p>
                      <span class="section"></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kode Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
  <input id="name" class="form-control col-md-7 col-xs-12" name="" readonly="" type="text" value="<?php echo $kode?>">
                        </div>
                        <input type="hidden" name="kode" value="<?php echo $kode?>">
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nama Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="name" required="required" name="namaproduk" class="form-control col-md-7 col-xs-12" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                                  </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Jenis Produk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="select" name="jenis" class="form-control" required="">
                          <option value="">-Pilih-</option>}
                          option
                            <?php foreach ($jenis as $row) {
  ?>
  <option value="<?php echo $row->nama_jenis;?>"><?php echo $row->nama_jenis;?></option>
  <?php }?>
</select>
                          </select>
                        </div>
                      </div>
                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>