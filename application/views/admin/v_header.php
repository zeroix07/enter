<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_daftar WHERE antrian_status='0'");
    $jum_email=$query->num_rows();
?>
<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url('admin/dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">ET</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b> - Antrean</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" title="Lihat Pesan" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $jum_email;?></span>
            </a>
            <ul class="dropdown-menu">
            
              <li class="header">Anda memiliki <?php echo $jum_email;?> pesan</li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
              <?php
                    $inbox=$this->db->query("SELECT tbl_daftar.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_daftar WHERE antrian_status='0' ORDER BY id DESC LIMIT 5");
                    foreach ($inbox->result_array() as $in) :
                        $id=$in['id'];
                        $no_antrian=$in['no_antrian'];
                        $nama=$in['nama'];
                        $email=$in['email'];
                        $tanggal=$in['tanggal'];
                ?>
                  <li><!-- start message -->
                    <a href="<?php echo base_url().'admin/peserta'?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url().'assets/images/user_blank.png'?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php echo $nama;?>
                        <small><i class="fa fa-clock-o"></i> <?php echo $tanggal;?></small>
                      </h4>
                      <p><?php echo $email;?></p>
                    </a>
                  </li>
                  <!-- end message -->
                  <?php endforeach;?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url().'admin/peserta'?>">Lihat Semua Email Pendaftar</a></li>
            </ul>
          </li>

           <li>
            <a href="<?php echo base_url().''?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
          </li>

        
          <?php
              $id_admin=$this->session->userdata('idadmin');
              $q=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
              $c=$q->row_array();
          ?>  
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="user-image" alt="">
              <span class="hidden-xs"><?php echo $c['pengguna_nama'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/images/'.$c['pengguna_photo'];?>" class="img-circle" alt="">

                <p>
                  <?php echo $c['pengguna_nama'];?>
                  <?php if($c['pengguna_level']=='1'):?>
                    <small>Administrator</small>
                    <?php else:?>
                    <small>Author</small>
                    <?php endif;?>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url().'admin/login/logout'?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out">Sign out</i></a>
                </div>
                
                
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>

    </nav>
  </header>
