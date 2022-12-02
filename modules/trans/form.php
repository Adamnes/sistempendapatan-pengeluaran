 <?php  

if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Input Data
      </h1>
    </div>
   
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/trans/proses.php?act=insert" method="POST" enctype="multipart/form-data" />
           <div class="box-body">
             <div class="form-group">
                  <label class="col-sm-2 control-label no-padding-right">Tanggal</label>
                  <div style="padding-right:20px;" class="col-sm-4">
                    <div class="input-group">
                      <input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="tanggal" required />
                      <span class="input-group-addon">
                        <i class="fa fa-calendar bigger-110"></i>
                      </span>
                    </div>
                  </div>
                </div>

           
 <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Keterangan</label>*
                <div class="col-sm-5">
                  <select class="chosen-select" name="keterangan" data-placeholder="-- Pilih Keterangan--" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_keterangan = mysqli_query($mysqli, "SELECT * FROM tipe group by tipe")
                                                            or die('Ada kesalahan pada query tampil: '.mysqli_error($mysqli));
                      while ($data_keterangan = mysqli_fetch_assoc($query_keterangan)) {
                        echo"<option value=\"$data_keterangan[tipe]\"> $data_keterangan[tipe] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right">Kategori</label>*
                <div class="col-sm-5">
                  <select class="chosen-select" name="kategori" data-placeholder="-- Pilih Kategori--" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_kategori = mysqli_query($mysqli, "SELECT * FROM kategori group by id")
                                                            or die('Ada kesalahan pada query tampil: '.mysqli_error($mysqli));
                      while ($data_kategori = mysqli_fetch_assoc($query_kategori)) {
                        echo"<option value=\"$data_kategori[id]\"> $data_kategori[kategori] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="jumlah" autocomplete="off" required>
                </div>
              </div>


               <div class="form-group">
                <label class="col-sm-2 control-label">Notes</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="notes" autocomplete="off" required>
                </div>
              </div>
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=view_inout" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </div>
<?php
error_reporting(0);
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
  
      $query = mysqli_query($mysqli, "SELECT * from pendapatan where id='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data Vendor: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query); 
    }
  
?>
 
  <section class="content-header">
    <div class="page-content">
    <div class="page-header">
      <h1 style="color:#585858">
        <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
        Edit Cash in / Out
      </h1>
    </div>
    
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/trans/proses.php?act=update" method="POST" enctype="multipart/form-data" />
          
            <div class="box-body">

               <div class="form-group">
                <div class="col-sm-5">
                  <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data['id']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Kategori</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kategori" autocomplete="off" value="<?php echo $data['keterangan']; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Notes</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="notes" autocomplete="off" value="<?php echo $data['note']; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah</label>*
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="jumlah" autocomplete="off" value="<?php echo $data['jumlah']; ?>" readonly>
                </div>
              </div>



             
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=view_inout" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
<?php
      }
     
?>