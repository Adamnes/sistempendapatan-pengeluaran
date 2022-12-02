<?php
session_start();
require_once "../../config/database.php";
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form
            $kode_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['kode_costumer']));
            $nama_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['nama_costumer']));
            $no_telp  = mysqli_real_escape_string($mysqli, trim($_POST['no_telp']));
            $alamat = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
            $query = mysqli_query($mysqli, "INSERT INTO costumer(kode_costumer,nama_costumer,no_telp,alamat) 
                                            VALUES('$kode_costumer','$nama_costumer ','$no_telp ','$alamat ')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    
            // cek query
            if ($query) {
                header("location: ../../main.php?module=view_costumer&alert=1");
            }   
        }   
    }
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['kode_costumer'])) {
                $kode_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['kode_costumer']));
                $nama_costumer  = mysqli_real_escape_string($mysqli, trim($_POST['nama_costumer']));
                $no_telp  = mysqli_real_escape_string($mysqli, trim($_POST['no_telp']));
                $alamat = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
                $query = mysqli_query($mysqli, "UPDATE costumer SET kode_costumer   = ('$kode_costumer') WHERE kode_costumer    = '$kode_costumer'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                if ($query) {
                    header("location: ../../main.php?module=view_costumer&alert=2");
                }         
            }
        }
    }
    elseif ($_GET['act']=='delete') {
        if (isset($_GET['kode_costumer'])) {
            $kode_costumer = $_GET['kode_costumer'];
            $query = mysqli_query($mysqli, "DELETE FROM costumer WHERE kode_costumer='$kode_costumer'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));
            if ($query) {
                header("location: ../../main.php?module=view_costumer&alert=3");
            }
        }
    }       
}
