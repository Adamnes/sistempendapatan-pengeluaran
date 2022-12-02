 <?php
    if ($_GET['form'] == 'add') { ?>
     <!-- tampilan form add data -->
     <!-- Content Header (Page header) -->
     <div class="page-content">
         <div class="page-header">
             <h1 style="color:#585858">
                 <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
                 Input Data Costumer
             </h1>
         </div>
         </section>
         <!-- Main content -->
         <section class="content">
             <div class="row">
                 <div class="col-md-12">
                     <div class="box box-primary">
                         <!-- form start -->
                         <form role="form" class="form-horizontal" action="modules/costumer/proses.php?act=insert" method="POST" enctype="multipart/form-data" />
                         <div class="box-body">
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">Kode Costumer</label>*
                                 <div class="col-sm-5">
                                     <input type="text" class="form-control" name="kode_costumer" autocomplete="off" required>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">Nama Costumer</label>*
                                 <div class="col-sm-5">
                                     <input type="text" class="form-control" name="nama_costumer" autocomplete="off" required>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">Nomor Telfon</label>*
                                 <div class="col-sm-5">
                                     <input type="text" class="form-control" name="no_telp" autocomplete="off" required>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-2 control-label">Alamat</label>*
                                 <div class="col-sm-5">
                                     <input type="text" class="form-control" name="alamat" autocomplete="off" required>
                                 </div>
                             </div>
                             <div class="box-footer">
                                 <div class="form-group">
                                     <div class="col-sm-offset-2 col-sm-10">
                                         <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                         <a href="?module=view" class="btn btn-default btn-reset">Batal</a>
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
    } elseif ($_GET['form'] == 'edit') {
        if (isset($_GET['kode_costumer'])) {

            $query = mysqli_query($mysqli, "SELECT * from costumer where kode_costumer='$_GET[kode_costumer]'")
                or die('Ada kesalahan pada query tampil Data Vendor: ' . mysqli_error($mysqli));
            $data  = mysqli_fetch_assoc($query);
        }

    ?>
     <section class="content-header">
         <div class="page-content">
             <div class="page-header">
                 <h1 style="color:#585858">
                     <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
                     Edit Costumer
                 </h1>
             </div>

     </section>
     <section class="content">
         <div class="row">
             <div class="col-md-12">
                 <div class="box box-primary">
                     <!-- form start -->
                     <form role="form" class="form-horizontal" action="modules/costumer/proses.php?act=update" method="POST" enctype="multipart/form-data" />

                     <div class="form-group">
                         <label class="col-sm-2 control-label">Kode Costumer</label>
                         <div class="col-sm-5">
                             <input type="text" class="form-control" name="kode_costumer" autocomplete="off" value="<?php echo $data['kode_costumer']; ?>">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-sm-2 control-label">Nama Costumer</label>
                         <div class="col-sm-5">
                             <input type="text" class="form-control" name="nama_costumer" autocomplete="off" value="<?php echo $data['nama_costumer']; ?>">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-sm-2 control-label">No Telpon</label>
                         <div class="col-sm-5">
                             <input type="text" class="form-control" name="no_telp" autocomplete="off" value="<?php echo $data['no_telp']; ?>">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="col-sm-2 control-label">Alamat</label>
                         <div class="col-sm-5">
                             <input type="text" class="form-control" name="alamat" autocomplete="off" value="<?php echo $data['alamat']; ?>">
                         </div>
                     </div>



                     <!-- perlu dikoreksi -->
                     <div class="box-footer">
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-10">
                                 <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                 <!-- <a href="?module=view" type="submit" class="btn btn-primary btn-submit" name="simpan">Simpan</a> -->
                                 <a href="?module=view" class="btn btn-default btn-reset">Batal</a>
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