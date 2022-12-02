
<?php
error_reporting(0);
?>
<div class="page-content">
	<div class="page-header">
		<h4>
			Sistem informasi pendapatan dan pengeluaran keuangan
		</h4>
	</div><!-- /.page-header -->
	<div class="row">
	<?php
if ($_SESSION['hak_akses']=='admin') { ?>
<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-user"></i>
				</button>
				<i class="ace-icon fa fa-user green"></i>
				Selamat datang
				<strong class="green"><?php echo $_SESSION['nama_user']; ?></strong> di Sistem Informasi Keuangan
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->

	 <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
             <div style="background-color:#6BCB77; color:#fff" class="small-box">
                <?php  
                //$user= $_SESSION['id_user'];
                //$users= $_SESSION['nama_user'];
                $query = mysqli_query($mysqli, "SELECT 
 
 sum(jumlah)as total_pendapatan

  
FROM
pendapatan WHERE keterangan='Pendapatan'")


                                                or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));

                $data = mysqli_fetch_assoc($query);

                
                ?>

                <div class="inner">

                    <h2>Rp. <?php echo number_format($data['total_pendapatan'],0); ?></h2>
                    <p>Total Pendapatan</p>
                    
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
             <div style="background-color:#EB1D36;color:#fff" class="small-box">
                <?php  
                //$user= $_SESSION['id_user'];
                //$users= $_SESSION['nama_user'];
                $query = mysqli_query($mysqli, "SELECT 
 
  sum(jumlah)as total_pengeluaran

  
FROM
pendapatan WHERE keterangan='Pengeluaran'")

                                                or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));

                $data = mysqli_fetch_assoc($query);

                
                ?>

                <div class="inner">

                    <h2>Rp. <?php echo number_format($data['total_pengeluaran'],0); ?></h2>
                    <p>Total Pengeluaran</p>
                    
                </div>
                <div class="icon">
                    <i class="fa fa-file"></i>
                </div>
                <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
      
    </div>

   <!-- <div class="container" style="margin-top:20px">
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">Total Project</div>
                <div class="panel-body">
                    <div id ="mygraph"></div>
                </div>
        </div>
    </div>
</div>-->
</div>

     <div class="content-body">
        <div class="row">

      <div class="col-xl-4 col-lg-4 col-xs-12">

     <div id="container"></div>
      </div>
       <div class="col-xl-4 col-lg-4 col-xs-12">

     <div id="cashout"></div>
      </div>
  </div>
</div>





    <?php

}
?>

<?php

if ($_SESSION['hak_akses']=='user') { ?>
    <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="alert alert-block alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-user"></i>
                    </button>
                    <i class="ace-icon fa fa-user green"></i>
                    Selamat datang
                    <strong class="green"><?php echo $_SESSION['nama_user']; ?></strong> di Sistem Informasi Keuangan
                </div>
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    
         <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                 <div style="background-color:#6BCB77; color:#fff" class="small-box">
                    <?php  
                    //$user= $_SESSION['id_user'];
                    //$users= $_SESSION['nama_user'];
                    $query = mysqli_query($mysqli, "SELECT 
     
     sum(jumlah)as total_pendapatan
    
      
    FROM
    pendapatan WHERE keterangan='Pendapatan'")
    
    
                                                    or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));
    
                    $data = mysqli_fetch_assoc($query);
    
                    
                    ?>
    
                    <div class="inner">
    
                        <h2>Rp. <?php echo number_format($data['total_pendapatan'],0); ?></h2>
                        <p>Total Pendapatan</p>
                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
    
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                 <div style="background-color:#EB1D36;color:#fff" class="small-box">
                    <?php  
                    //$user= $_SESSION['id_user'];
                    //$users= $_SESSION['nama_user'];
                    $query = mysqli_query($mysqli, "SELECT 
     
      sum(jumlah)as total_pengeluaran
    
      
    FROM
    pendapatan WHERE keterangan='Pengeluaran'")
    
                                                    or die('Ada kesalahan pada query tampil data: '.mysqli_error($mysqli));
    
                    $data = mysqli_fetch_assoc($query);
    
                    
                    ?>
    
                    <div class="inner">
    
                        <h2>Rp. <?php echo number_format($data['total_pengeluaran'],0); ?></h2>
                        <p>Total Pengeluaran</p>
                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <a class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
          
        </div>
    
       <!-- <div class="container" style="margin-top:20px">
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Total Project</div>
                    <div class="panel-body">
                        <div id ="mygraph"></div>
                    </div>
            </div>
        </div>
    </div>-->
    </div>
    
         <div class="content-body">
            <div class="row">
    
          <div class="col-xl-4 col-lg-4 col-xs-12">
    
         <div id="container"></div>
          </div>
           <div class="col-xl-4 col-lg-4 col-xs-12">
    
         <div id="cashout"></div>
          </div>
      </div>
    </div>
    
    
    
    
    
        <?php
    
    }
    ?>
?>



	 
	 <!-- /.page-content -->