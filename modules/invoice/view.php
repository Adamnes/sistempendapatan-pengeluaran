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
                                    <i class="ace-icon fa fa-list"></i> Data Invoice
                                    <a href="?module=form_invoice&form=add">
                                                <button class="btn btn-primary pull-right">
                                                            <i class="ace-icon fa fa-plus"></i> Tambah
                                                </button>
                                                <a href="modules/laporan/cetak_invoice.php" target="_blank">
                                                            <button class="btn btn-primary pull-right">
                                                                        <i class="ace-icon fa fa-print"></i> Cetak
                                                            </button>
                                                </a>
                        </h1>
                        <br>
                        <br>
                        <!-- baru sampe sini nanti lanjut -->

                        <?php

                        if (empty($_GET['alert'])) {
                        } elseif ($_GET['alert'] == 1) { ?>
                                    <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">
                                                            <i class="ace-icon fa fa-times"></i>
                                                </button>
                                                <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
                                                Data Kategori baru berhasil disimpan.
                                                <br>
                                    </div>
                        <?php
                        } elseif ($_GET['alert'] == 2) { ?>
                                    <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">
                                                            <i class="ace-icon fa fa-times"></i>
                                                </button>
                                                <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
                                                Data Kategori berhasil diubah.
                                                <br>
                                    </div>
                        <?php
                        } elseif ($_GET['alert'] == 3) { ?>
                                    <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert">
                                                            <i class="ace-icon fa fa-times"></i>
                                                </button>
                                                <strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
                                                Data Kategori berhasil dihapus.
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
                                                                                                                                    <th class='center'>No Invoice</th>
                                                                                                                                    <th class='center'>Nama Costumer</th>
                                                                                                                                    <th class='center'>Ketegori</th>
                                                                                                                                    <th class='center'>Jumlah Bayar</th>
                                                                                                                                    <th class='center'>Tanggal Bayar</th>
                                                                                                                                    <th class='center'>Nama Marketing</th>
                                                                                                                                    <th class='center'>Keterangan Bayar</th>
                                                                                                                                    <th class='center'>Action</th>
                                                                                                                        </tr>
                                                                                                            </thead>

                                                                                                            <?php
                                                                                                            $no = 1;

                                                                                                            // sudah di ubah yang ini menggunakan INNER JOIN
                                                                                                            $query = mysqli_query($mysqli, "SELECT * FROM  invoice 
-- INNER JOIN costumer ON invoice.id_invoice = costumer.kode_costumer
-- INNER JOIN kategori ON invoice.id_invoice = kategori.id
")
                                                                                                                        or die('Ada kesalahan pada query tampil Data: ' . mysqli_error($mysqli));
                                                                                                            while ($data = mysqli_fetch_assoc($query)) {

                                                                                                            ?>
                                                                                                                        <tr>
                                                                                                                                    <td width="10" class="center"><?php echo $no; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['id_invoice']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['nama_costumer']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['kategori']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['jumlah_bayar']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['tanggal_bayar']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['nama_marketing']; ?></td>
                                                                                                                                    <td width="100"><?php echo $data['keterangan_bayar']; ?></td>






                                                                                                                                    <td class='center' width='30'>
                                                                                                                                                <div>

                                                                                                                                                            <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href="?module=form_invoice&form=edit&id_invoice=<?php echo $data['id_invoice']; ?>">
                                                                                                                                                                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                                                                                                                                                            </a>

                                                                                                                                                            <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href="modules/laporan/cetak_invoice.php?module=form_invoice&form=edit&id_invoice=<?php echo $data['id_invoice']; ?>">
                                                                                                                                                                        <i style='color:#fff' class='glyphicon glyphicon-print'></i>
                                                                                                                                                            </a>

                                                                                                                                                            <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/invoice/proses.php?act=delete&id_invoice=<?php echo $data['id_invoice']; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['invoice']; ?> ?');">
                                                                                                                                                                        <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                                                                                                                                                            </a>

                                                                                                                                                </div>
                                                                                                                                    </td>
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