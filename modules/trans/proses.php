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
             $tgl_tanggal         = mysqli_real_escape_string($mysqli, trim($_POST['tanggal']));
            $tgl              = explode('-',$tgl_tanggal);
            $tanggal_tanggal     = $tgl[2]."-".$tgl[1]."-".$tgl[0];
             $keterangan  = mysqli_real_escape_string($mysqli, trim($_POST['keterangan']));
              $kategori  = mysqli_real_escape_string($mysqli, trim($_POST['kategori']));
               $jumlah  = mysqli_real_escape_string($mysqli, trim($_POST['jumlah']));

                $notes  = mysqli_real_escape_string($mysqli, trim($_POST['notes']));

            $query = mysqli_query($mysqli, "INSERT INTO pendapatan(tgl,keterangan,kategori_id,jumlah,note) 
                                            VALUES('$tanggal_tanggal','$keterangan','$kategori','$jumlah','$notes')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                header("location: ../../main.php?module=view_inout&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id'])) {
               
                $id  = mysqli_real_escape_string($mysqli, trim($_POST['id']));
              
                $jumlah  = mysqli_real_escape_string($mysqli, trim($_POST['jumlah']));
              
                $query = mysqli_query($mysqli, "UPDATE pendapatan SET jumlah    = '$jumlah'
                                                               WHERE id      = '$id'")
                                                or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                
                if ($query) {
                    header("location: ../../main.php?module=view_inout&alert=2");
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    
          
            $query = mysqli_query($mysqli, "DELETE FROM pendapatan WHERE id='$id'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            if ($query) {
               
                header("location: ../../main.php?module=view_inout&alert=3");
            }
        }
    }       
}       
?>