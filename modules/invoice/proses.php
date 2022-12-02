<?php
session_start();
require_once "../../config/database.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
            echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
} else {
            if ($_GET['act'] == 'insert') {
                        if (isset($_POST['simpan'])) {
                                    // ambil data hasil submit dari form
                                    $id_invoice  = mysqli_real_escape_string($mysqli, trim($_POST['id_invoice']));
                                    $nama_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['nama_costumer']));
                                    $kategori = mysqli_real_escape_string($mysqli, trim($_POST['kategori']));
                                    $jumlah_bayar = mysqli_real_escape_string($mysqli, trim($_POST['jumlah_bayar']));
                                    $tanggal_bayar = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_bayar']));
                                    $tgl              = explode('-', $tanggal_bayar);
                                    $tanggal_tanggal     = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];
                                    $nama_marketing = mysqli_real_escape_string($mysqli, trim($_POST['nama_marketing']));
                                    $keterangan_bayar = mysqli_real_escape_string($mysqli, trim($_POST['keterangan_bayar']));
                                    $query = mysqli_query($mysqli, "INSERT INTO invoice(id_invoice,nama_costumer,kategori,jumlah_bayar,tanggal_bayar,nama_marketing,keterangan_bayar) 
VALUES('$id_invoice','$nama_costumer ','$kategori','$jumlah_bayar','$tanggal_tanggal','$nama_marketing','$keterangan_bayar')")
                                                or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));

                                    // cek query 
                                    // cari tahu
                                    if ($query) {
                                                header("location: ../../main.php?module=view_invoice&alert=1");
                                    }
                        }
            } elseif ($_GET['act'] == 'update') {
                        if (isset($_POST['simpan'])) {
                                    if (isset($_POST['id_invoice'])) {

                                                $id_invoice  = mysqli_real_escape_string($mysqli, trim($_POST['id_invoice']));
                                                $nama_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['nama_costumer']));
                                                $kategori = mysqli_real_escape_string($mysqli, trim($_POST['kategori']));
                                                $jumlah_bayar = mysqli_real_escape_string($mysqli, trim($_POST['jumlah_bayar']));
                                                $tanggal_bayar = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_bayar']));
                                                $nama_marketing = mysqli_real_escape_string($mysqli, trim($_POST['nama_marketing']));
                                                $keterangan_bayar = mysqli_real_escape_string($mysqli, trim($_POST['keterangan_bayar']));


                                                $query = mysqli_query($mysqli, "UPDATE invoice SET id_invoice   = '$id_invoice'

WHERE id_invoice     = '$id_invoice'")
                                                            or die('Ada kesalahan pada query update : ' . mysqli_error($mysqli));


                                                if ($query) {
                                                            header("location: ../../main.php?module=view_invoice&alert=2");
                                                }
                                    }
                        }
            } elseif ($_GET['act'] == 'delete') {
                        if (isset($_GET['id_invoice'])) {
                                    $id_invoice = $_GET['id_invoice'];


                                    $query = mysqli_query($mysqli, "DELETE FROM invoice WHERE id_invoice='$id_invoice'")
                                                or die('Ada kesalahan pada query delete : ' . mysqli_error($mysqli));

                                    if ($query) {

                                                header("location: ../../main.php?module=view_invoice&alert=3");
                                    }
                        }
            }
}
