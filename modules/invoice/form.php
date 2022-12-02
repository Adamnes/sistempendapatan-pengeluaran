<?php

if ($_GET['form'] == 'add') { ?>
    <!-- tampilan form add data -->
    <!-- Content Header (Page header) -->
    <div class="page-content">
        <div class="page-header">
            <h1 style="color:#585858">
                <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
                Input Data invoice
            </h1>
        </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <!-- form start -->
                        <form role="form" class="form-horizontal" action="modules/invoice/proses.php?act=insert" method="POST" enctype="multipart/form-data" />
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kode Invoice</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kode_invoice" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Costumer</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_costumer" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kategori</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="kategori" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jumlah bayar</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="jumlah_bayar" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right">Tanggal Bayar</label>
                                <div style="padding-right:20px;" class="col-sm-4">
                                    <div class="input-group">
                                        <input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="tanggal_bayar" required />
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar bigger-110"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Merketing</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama_marketing" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">keterangan Bayar</label>*
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="keterangan_bayar" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                        <!-- ubah -->
                                        <a href="?module=view_invoice" class="btn btn-default btn-reset">Batal</a>
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
    if (isset($_GET['id_invoice'])) {
        $query = mysqli_query($mysqli, "SELECT * from invoice where id_invoice='$_GET[id_invoice]'")
            or die('Ada kesalahan pada query tampil Data Vendor: ' . mysqli_error($mysqli));
        $data  = mysqli_fetch_assoc($query);
    }
?>
    <section class="content-header">
        <div class="page-content">
            <div class="page-header">
                <h1 style="color:#585858">
                    <i style="margin-right: 5px" class="ace-icon fa fa-edit"></i>
                    Edit Invoice
                </h1>
            </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" class="form-horizontal" action="modules/invoice/proses.php?act=update" method="POST" enctype="multipart/form-data" />
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-5">
                                <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data['id']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kode Invoice</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="id_invoice" autocomplete="off" value="<?php echo $data['id_invoice']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Costumer</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_costumer" autocomplete="off" value="<?php echo $data['nama_costumer']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">Kategori</label>*
                            <div class="col-sm-5">
                                <select class="chosen-select" name="kategori" data-placeholder="-- Pilih Kategori--" autocomplete="off" required>
                                    <option value=""></option>
                                    <?php
                                    $query_kategori = mysqli_query($mysqli, "SELECT * FROM kategori group by id")
                                        or die('Ada kesalahan pada query tampil: ' . mysqli_error($mysqli));
                                    while ($data_kategori = mysqli_fetch_assoc($query_kategori)) {
                                        echo "<option value=\"$data_kategori[id]\"> $data_kategori[kategori] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">jumlah bayar</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="jumlah_bayar" autocomplete="off" value="<?php echo $data['jumlah_bayar']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">Tanggal bayar</label>
                            <div style="padding-right:20px;" class="col-sm-4">
                                <div class="input-group">
                                    <input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="tanggal_bayar" value="<?php echo $data['tanggal_bayar']; ?>">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar bigger-110"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama_marketing</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="nama_marketing" autocomplete="off" value="<?php echo $data['nama_marketing']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Keterangan Bayar</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="keterangan_bayar" autocomplete="off" value="<?php echo $data['keterangan_bayar']; ?>">
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                                    <a href="?module=view_invoice" class="btn btn-default btn-reset">Batal</a>
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