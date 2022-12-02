<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="?module=beranda">Beranda</a>
        </li>
    </ul><!-- /.breadcrumb -->
</div>
<div class="page-content">
    <div class="page-header">
        <h1 style="color:#585858">
            <i class="ace-icon fa fa-list"></i> Laporan
            <a href="modules/laporan/cetak_keluar.php" target="_blank">
                <button class="btn btn-primary pull-right">
                    <i class="ace-icon fa fa-print"></i> Cetak
                </button>
            </a>
        </h1>
        <br>
        <br>
<?php

if (empty($_GET['alert'])) {
}

elseif ($_GET['alert'] == 1) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi baru berhasil disimpan.
        <br>
    </div>
<?php
} 
elseif ($_GET['alert'] == 2) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi berhasil diubah.
        <br>
    </div>
<?php
}
elseif ($_GET['alert'] == 3) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>
        <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
       Data Transaksi berhasil dihapus.
        <br>
    </div>
<?php
} 
?>
<br>
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- div.table-responsive -->
                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <div class="row">
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class='center'>No</th>
                                     <th class='center'>Tanggal</th>
                                     <th class='center'>Keterangan</th>
                                      <th class='center'>Kategori</th>
                                       <th class='center'>Jumlah</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            $query = mysqli_query($mysqli, "SELECT
                                                                a.*,b.kategori as kategori
                                                              FROM
                                                                pendapatan a, kategori b
                                                                where a.kategori_id=b.id and a.keterangan='Pengeluaran'
                                                             ")
                                                or die('Ada kesalahan pada query tampil Data: '.mysqli_error($mysqli));
                            while ($data = mysqli_fetch_assoc($query)) { 
                            ?>
                          <tr>
                                    <td width="10" class="center"><?php echo $no; ?></td>
                                       <td width="100"><?php echo $data['tgl'];?></td>
                                        <td width="100"><?php echo $data['keterangan'];?></td>
                                          <td width="100"><?php echo $data['kategori'];?></td>
                                            <td width="100"><?php echo $data['jumlah'];?></td>                                       
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
</div>
</div>
