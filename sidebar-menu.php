<?php 


if ($_SESSION['hak_akses']=='admin'){ ?>
    <ul class="nav nav-list">
    <?php
  
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

   

    if ($_GET["module"] == "view_project" || $_GET["module"] == "view_project") {
        echo '  <li class="active">
                    <a href="?module=view_project">
                         <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text">Project List</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_project">
                         <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text">Project List</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 

     if ($_GET["module"] == "view_inout" || $_GET["module"] == "view_inout") {
        echo '  <li class="active">
                    <a href="?module=view_inout">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text fs-6">Pendapatan / Pengeluaran</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_inout">
                        <i class="menu-icon fa fa-money"></i>
                        <span class="menu-text">Pendapatan / Pengeluaran</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

   
    


     if ($_GET["module"] == "laporan_pendapatan") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="active">
                            <a href="?module=laporan_pendapatan">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan pendapatan
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=laporan_pengeluaran">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan  pengeluaran
                            </a>
                            <b class="arrow"></b>
                        </li>

                       
                    </ul>
                </li>';
    } 
    
    elseif ($_GET["module"] == "laporan_pengeluaran") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text">Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=laporan_pendapatan">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan Pendapatan
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="active">
                            <a href="?module=laporan_pengeluaran">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                               Laporan Pengeluaran
                            </a>
                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>';
    } 
    // jika tidak, menu lap_klien tidak aktif
    else {
        echo '  <li>
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=laporan_pendapatan">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Laporan Pendapatan
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=laporan_pengeluaran">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                               Laporan Pengeluaran
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    }
     if ($_GET["module"] == "user" || $_GET["module"] == "user") {
        echo '  <li class="active">
                    <a href="?module=user">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">Admin</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=user">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">Admin </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // untuk memunculkan halaman di utama
    if ($_GET["module"] == "costumer" || $_GET["module"] == "costumer") {
        echo '  <li class="active">
                    <a href="?module=view">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">Costumer</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text">Costumer</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }


    if ($_GET["module"] == "invoice" || $_GET["module"] == "invoice") {
        echo '  <li class="active">
                    <a href="?module=view_invoice">
                        <i class="menu-icon fa fa-dollar"></i>
                        <span class="menu-text">Invoice</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
   
    else {
        echo '  <li>
                    <a href="?module=view_invoice">
                        <i class="menu-icon fa fa-dollar"></i>
                        <span class="menu-text">invoice</span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }
}

    ?>



    </ul>




    <!-- hak user -->
    <?php
    if ($_SESSION['hak_akses']=='user'){ ?>
        <ul class="nav nav-list">
        <?php
      
        if ($_GET["module"] == "beranda") {
            echo '  <li class="active">
                        <a href="?module=beranda">
                            <i class="menu-icon fa fa-home"></i>
                            <span class="menu-text"> Beranda </span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        } 
       
        else {
            echo '  <li>
                        <a href="?module=beranda">
                            <i class="menu-icon fa fa-home"></i>
                            <span class="menu-text"> Beranda </span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        }
        if ($_GET["module"] == "invoice" || $_GET["module"] == "invoice") {
            echo '  <li class="active">
                        <a href="?module=view_invoice">
                            <i class="menu-icon fa fa-dollar"></i>
                            <span class="menu-text">Invoice</span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        } 
       
        else {
            echo '  <li>
                        <a href="?module=view_invoice">
                            <i class="menu-icon fa fa-dollar"></i>
                            <span class="menu-text">invoice</span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        }
       
        if ($_GET["module"] == "costumer" || $_GET["module"] == "costumer") {
            echo '  <li class="active">
                        <a href="?module=view">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">Costumer</span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        } 
       
        else {
            echo '  <li>
                        <a href="?module=view">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text">Costumer</span>
                        </a>
                        <b class="arrow"></b>
                    </li>';
        }
    }
    
?>