

<?php
// panggil file database.php untuk koneksi ke database
require_once "config/database.php";


// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module']=='beranda') {
		include "modules/beranda/view.php";
	}

	// jika halaman konten yang dipilih customer, panggil file view customer
	

	elseif ($_GET['module']=='form_transaksi') {
		include "modules/trans/form.php";
	}

	elseif ($_GET['module']=='view_inout') {
		include "modules/trans/view.php";
	}


	elseif ($_GET['module']=='form_kategori') {
		include "modules/paket/form.php";
	}

	elseif ($_GET['module']=='view_project') {
		include "modules/paket/view.php";
	}

	elseif ($_GET['module']=='laporan_pendapatan') {
		include "modules/Laporan/lap_all.php";
	}

	elseif ($_GET['module']=='laporan_pengeluaran') {
		include "modules/Laporan/lap_all_keluar.php";
	}

	elseif ($_GET['module']=='user') {
		include "modules/user/view.php";
	}

	elseif ($_GET['module']=='form_user') {
		include "modules/user/form.php";
		
	}

	elseif ($_GET['module']=='form_costumer') {
		include "modules/costumer/form.php";
	}
	
	elseif ($_GET['module']=='view') {
		include "modules/costumer/view.php";
		
	}
	elseif ($_GET['module']=='view_invoice') {
		include "modules/invoice/view.php";
		
	}

	elseif ($_GET['module']=='form_invoice') {
		include "modules/invoice/form.php";
	}


}
?>