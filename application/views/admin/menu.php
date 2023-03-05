<?php
    $query=$this->db->query("SELECT * FROM tbl_daftar WHERE antrian_status='1'");
    $jum_antrean=$query->num_rows();
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">GENERAL</li>
        <li class="active">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo base_url().'admin/peserta'?>">
            <i class="fa fa-table"></i> <span>Data Pendaftar</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/email'?>">
            <i class="fa fa-table"></i> <span>Data Antrian</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $jum_antrean;?></span>
            </span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url().'admin/rawat'?>">
            <i class="fa fa-table"></i> <span>Cek Dokter</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="header">REFERENSI DATA</li>
        <li>
          <a href="<?php echo base_url().'admin/pasien'?>">
            <i class="fa fa-users"></i> <span>Data Pasien</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="header">USER</li>
        <li>
          <a href="<?php echo base_url().'admin/dokter'?>">
            <i class="fa fa-users"></i> <span>Data Dokter</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url().'admin/kontak'?>">
            <i class="fa fa-phone"></i> <span>Kontak</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
       
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>