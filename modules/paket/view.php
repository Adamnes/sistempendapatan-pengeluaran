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
            <i class="ace-icon fa fa-list"></i> Kategori Project
            <a href="?module=form_kategori&form=add">
                <button class="btn btn-primary pull-right">
                    <i class="ace-icon fa fa-plus"></i> Tambah
                </button>
            </a>
        </h1>
        <br>
        <br>
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
                                            <th class='center'>Kategori</th>
                                            <th class='center'>Harga</th>
                                            <th class='center'>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($mysqli, "SELECT
*
FROM
kategori
GROUP BY id ")
                                        or die('Ada kesalahan pada query tampil Data: ' . mysqli_error($mysqli));
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>
                                            <td width="10" class="center"><?php echo $no; ?></td>
                                            <td width="100"><?php echo $data['kategori']; ?></td>
                                            <td width="100"><?php echo $data['Harga']; ?></td>
                                            <td class='center' width='30'>
                                                <div>
                                                    <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href="?module=form_kategori&form=edit&id=<?php echo $data['id']; ?>">
                                                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                                                    </a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/paket/proses.php?act=delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['kategori']; ?> ?');">
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