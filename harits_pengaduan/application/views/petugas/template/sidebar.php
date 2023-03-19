 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-text mx-3 mt-3">Pelaporan Pengaduan Masyarakat</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0 mt-3">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('petugas') ?>">
             <i class="fa fa-home"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Addon
     </div>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="<?=base_url('petugaskategori')?>">
             <i class="fa fa-file"></i>
             <span>Kategori</span></a>
     </li>
     
     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="<?=base_url('petmasyarakat')?>">
             <i class="fa fa-user"></i>
             <span>Masyarakat</span></a>
     </li>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="<?=base_url('petugaspet')?>">
             <i class="fa fa-user"></i>
             <span>Petugas</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Menu
     </div>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="<?=base_url('petpengaduan')?>">
             <i class="fa fa-book"></i>
             <span>Pengaduan</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->