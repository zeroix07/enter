<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Antrean Medis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url().'assets/user/lib/owlcarousel/assets/owl.carousel.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css';?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url().'assets/user/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url().'assets/user/css/style.css';?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <?php foreach ($kontak->result_array() as $k):
                            $id=$k['id'];
                            $alamat=$k['alamat'];
                            $email=$k['email'];
                            $telepon=$k['telepon'];
                        ?>
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i><?php echo $telepon;?></a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i><?php echo $email ;?></a>
                        <?php endforeach ;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h3 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Medical Enter</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#service" class="nav-item nav-link">Layanan Kami</a>
                        <a href="#daftar" class="nav-item nav-link">Daftar</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <section id="home">
      <div class="container-fluid bg-primary py-5 mb-5 hero-header">
          <div class="container py-5">
              <div class="row justify-content-start">
                  <div class="col-lg-6 text-center text-lg-start">
                      <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Selamat Datang di Enter</h5>
                      <h1 class="display-1 text-white mb-md-4">Puskesmas Terbaik di Kota Anda</h1>
                      <!-- <div class="pt-2">
                          <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                          <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                      </div> -->
                  </div>
                  <div class="col-lg-6 text-center text-lg-start" style="margin-top: -60px;">
                      <img src="<?php echo base_url().'assets/hero/hero.svg'?>" alt="">
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- Hero End -->


    <!-- About Start -->
    <section id="about">
      <div class="container-fluid py-5">
          <div class="container">
              <div class="row gx-5">
                  <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                      <div class="position-relative h-100">
                          <img class="position-absolute w-100 h-100 rounded" src="<?php echo base_url().'assets/hero/hero2.svg'?>" style="object-fit: cover;">
                      </div>
                  </div>
                  <div class="col-lg-7">
                      <div class="mb-4">
                          <h5 class="d-inline-block text-about text-uppercase border-bottom border-5">Tentang Kami</h5>
                          <h1 class="display-4">Kami Puskesmas Terbaik di Kota Anda</h1>
                      </div>
                      <p>Kami Menyediakan beberapa layanan yang sangat kumplit serta di dampingi dengan dokter yang profesional dan berpengalaman.
                        Kami mempunyai banyak fasilitas yang memadai dan obat-obatan yang sudah resmi dari pemerintah.
                      </p>
                      <div class="row g-3 pt-3">
                          <div class="col-sm-3 col-6">
                              <div class="bg-light text-center rounded-circle py-4">
                                  <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                  <h6 class="mb-0">Dokter<small class="d-block text-primary">Berpengalaman</small></h6>
                              </div>
                          </div>
                          <div class="col-sm-3 col-6">
                              <div class="bg-light text-center rounded-circle py-4">
                                  <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                  <h6 class="mb-0">Perawatan<small class="d-block text-primary">Daraurat</small></h6>
                              </div>
                          </div>
                          <div class="col-sm-3 col-6">
                              <div class="bg-light text-center rounded-circle py-4">
                                  <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                  <h6 class="mb-0">Ambulance<small class="d-block text-primary">Gratis</small></h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->
    </section>
    

    <!-- Services Start -->
    <section id="service">
      <div class="container-fluid py-5">
          <div class="container">
              <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                  <h5 class="d-inline-block text-layanan text-uppercase border-bottom border-5">Layanan Kami</h5>
                  <h1 class="display-4">Layanan Terbaik Kami</h1>
              </div>
              <div class="row g-5">
                  <div class="col-lg-4 col-md-6">
                      <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                          <div class="service-icon mb-4">
                              <i class="fa fa-2x fa-user-md text-white"></i>
                          </div>
                          <h4 class="mb-3">Perawatan Darurat</h4>
                          <p class="m-0">Kami menyediakan perawatan darurat untuk anda</p>
                          
                      </div>
                  </div>
                  
                 
                  <div class="col-lg-4 col-md-6">
                      <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                          <div class="service-icon mb-4">
                              <i class="fa fa-2x fa-ambulance text-white"></i>
                          </div>
                          <h4 class="mb-3">Ambulance Gratis</h4>
                          <p class="m-0">Kami menyediakan mobil ambulance secara gratis untuk pasien</p>
                         
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                          <div class="service-icon mb-4">
                              <i class="fa fa-2x fa-pills text-white"></i>
                          </div>
                          <h4 class="mb-3">Obat</h4>
                          <p class="m-0">Kami menjual obat yang berkualitas dan tentu resep dari dokter</p>
                         
                      </div>
                  </div>

              </div>
          </div>
      </div>
    </section>
    <!-- Services End -->


    <!-- Appointment Start -->
    <section id="daftar">
      <div class="container-fluid bg-primary my-5 py-5">
          <div class="container py-5">
              <div class="row gx-5">
                  <div class="col-lg-6 mb-5 mb-lg-0">
                      <div class="mb-4">
                          <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Daftar</h5>
                          <h1 class="display-4">Daftarkan dari rumah</h1>
                      </div>
                      <p class="text-white mb-5">Anda dapat mendaftar dari rumah agar anda bisa menunggu dari rumah sambil mengerjakan pekerjaan rumah</p>
                  </div>
                  <div class="col-lg-6">
                      <div class="bg-white text-center rounded p-5">
                          <h1 class="mb-4">DAFTAR</h1>
                          <form action="<?php echo site_url('home/simpan_daftar');?>" method="post">
                              <div class="row g-3">
                                  <div class="col-12 col-sm-6">
                                      <input type="hidden" value="<?php echo $no_antrian;?>" name="no_antrian" class="form-control" id="name" placeholder="Your No Peserta" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <input type="text" name="nama" class="form-control bg-light border-0" placeholder="Nama Lengkap" style="height: 55px;">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                      <input type="email" name="email" class="form-control bg-light border-0" placeholder="Email Anda" style="height: 55px;">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                      <input type="number" name="kontak" class="form-control bg-light border-0" placeholder="Kontak Anda" style="height: 55px;">
                                  </div>
                                  <div class="col-12 col-sm-6">
                                    <button class="btn btn-primary w-100 py-3" type="submit">DAFTAR</button>
                                  </div>
                                  
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-dokter text-uppercase border-bottom border-5">Dokter Kami</h5>
                <h1 class="display-4">Professional dan Memiliki Pengalaman</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
            <?php foreach ($dokter->result() as $d):
                    ?>
                <div class="team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php echo base_url().'assets/images/'.$d->foto;?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                            <div class="mt-5 p-4">
                                <h2><?php echo $d->nama_dokter;?></h3>
                                <h6 class="fw-normal fst-italic text-dokter mb-4"><?php echo $d->dokter_spesialis;?></h6>
                                <!-- <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p> -->
                            </div>
                            <!-- <div class="d-flex mt-auto border-top p-4">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Team End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">E-Antrean</h4>
                    <p class="mb-4">Kami Menyediakan beberapa layanan yang sangat kumplit serta di dampingi dengan dokter yang profesional dan berpengalaman. Kami mempunyai banyak fasilitas yang memadai dan obat-obatan yang sudah resmi dari pemerintah.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <?php foreach ($kontak->result_array() as $k):
                        $id=$k['id'];
                        $alamat=$k['alamat'];
                        $email=$k['email'];
                        $telepon=$k['telepon'];
                    ?>
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Kontak Kami</h4>
                    <div class="d-flex flex-column justify-content-start">
                      <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i><?php echo $alamat ;?></p>
                      <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i><?php echo $email ;?></p>
                      <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo $telepon ;?></p>
                    </div>
                    <?php endforeach;?>
                </div> 
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">E-Antrean</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">Akmal Fauzan M</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url().'assets/user/lib/easing/easing.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/user/lib/waypoints/waypoints.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/user/lib/owlcarousel/owl.carousel.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/user/lib/tempusdominus/js/moment.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/user/lib/tempusdominus/js/moment-timezone.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js';?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url().'assets/user/js/main.js';?>"></script>
</body>

</html>