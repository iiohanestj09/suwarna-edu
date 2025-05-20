<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>  
  <link rel="icon" sizes="64x64" href="{{ asset('images/main-logo.png') }}"/>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

  <!-- JS -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/all.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body>
  <!-- Navbar -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('beranda') }}">
          <img src="{{ asset('images/logo.png') }}" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></spa>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('paket') }}">Paket</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log blue" href="{{ route('daftar') }}" target="_blank"><span>Daftar Sekarang</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="bg-siang">
    <div class="ttg-kami-heading">
      <h2><strong>Tentang</strong> Kami</h2>
    </div>
  </div>
  <div class="container-fluid tentang_kami">
    <section id="overviews" class="section">
      <div class="section-title text-center section-sejarah">
        <h3 class="wow fadeInUp">SEJARAH</h3>
        <?php foreach ($sejarah as $row): ?>
          <p class="wow zoomIn"><?php echo htmlspecialchars($row->sejarah); ?></p>
        <?php endforeach; ?>
        <img class="ilus-sejarah img-fluid img-center" src="{{ asset('images/ilus-team.gif') }}" alt="">
      </div>
    </section>

    <div class="bg-blue">
      <div class="section-title text-center header-sct-ttgkami">
        <h3>Visi</h3>
        <ul class="box-visi wow fadeInDown">
          <?php foreach ($visi as $row): ?>
            <h2><?php echo htmlspecialchars($row->visi); ?></h2>
          <?php endforeach; ?>
        </ul>  
      </div>
      <div class="section-title header-sct-ttgkami">
        <h3 class="text-center">Misi</h3>
        <div class="container-lg box-misi">
          <div class="row">
            <ul class="list-unstyled d-flex flex-wrap">
              <?php foreach ($misi as $row): ?>
                <li class="col-lg-3 col-md-6 col-sm-12 cardbox-misi wow zoomIn"><?php echo htmlspecialchars($row->misi); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="section-title header-sct-ttgkami">
      <h3 class="text-left title-unggul">Keunggulan</h3>
      <div class="row section-keunggulan">
        <div class="col-md-7 col-sm-12">
          <ul>
            <?php foreach ($keunggulan as $row): ?>
              <li class="list-unggul"><?php echo htmlspecialchars($row->keunggulan); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-md-5 col-sm-12">
          <img src="{{ asset('images/ilus-unggul.svg') }}" alt="" class="wow fadeInRight">
        </div>
      </div>
    </div>

    <div id="maps" class="section glmaps" style="background-color: #1b1b1b;">
      <div class="container">
        <div class="section-title text-center">
          <h3 class="title-glmaps">LOKASI</h3>
        </div>
        <div class="maps-meta">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9020971591567!2d112.73461317595678!3d-7.364870272476018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e500943348a3%3A0x476cffa6bea210ac!2sSuwarna%20Education!5e0!3m2!1sid!2sid!4v1746001509707!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="wow zoomIn"></iframe>
          </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="row">
      <div class="col-lg-3 d-none d-lg-block text-center">
        <div class="widget clearfix text-center">
          <a href="https://wa.me/628563129756"><img src="{{ asset('images/ilus-foot1.gif') }}" alt="Berikan Pertanyaan Anda Di sini" class="img-fluid ilus-kiri"></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-12">
        <div class="widget clearfix suwarna-title">
          <div class="widget-title">
            <h3>Suwarna Education</h3>
          </div>
          <p>Sedang mencari tempat bimbingan belajar yang berkualitas untuk Putra Putri Anda? <br> Come Join Us!</p>   
          <div class="footer-right">
            <ul class="footer-links-soi">
              <li><a href="https://wa.me/628563129756"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://youtube.com/@bimbelsuwarnaeducation5395?si=d-Vu8cukcyxKMuH7"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="https://www.instagram.com/suwarna_education/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100063481541554"><i class="fa fa-facebook"></i></a></li>
              <li><a href="mailto:suwarnaeducation1@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
            </ul>
          </div>						
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-12">
        <div class="widget clearfix info-link">
          <div class="widget-title">
            <h3>Information Link</h3>
          </div>
          <ul class="footer-links">
            <li><a href="{{ route('beranda') }}">Beranda</a></li>
            <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
            <li><a href="{{ route('paket') }}">Paket</a></li>
            <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
            <li><a href="{{ route('galeri') }}">Galeri</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 col-12">
        <div class="widget clearfix details">
          <div class="widget-title">
            <h3>Contact Details</h3>
          </div>
          <ul class="footer-links">
            <li><a href="https://www.instagram.com/indah_firzasuaidy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Admin: @indah_firzasuaidy</a></li>
            <li><a href="https://linktr.ee/suwarnaeducation?utm_source=linktree_profile_share&ltsid=5c1f0afc-acb5-45d0-8ab7-ae358236957e">Linktree Suwarna Education</a></li>
            <li><a href="https://www.google.com/maps/place/Suwarna+Education/@-7.3648756,112.7371881,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7e500943348a3:0x476cffa6bea210ac!8m2!3d-7.3648756!4d112.7371881!16s%2Fg%2F11ghqbw723?entry=ttu&g_ep=EgoyMDI1MDQyMC4wIKXMDSoASAFQAw%3D%3Dy">Kantor Pusat: Delta Sari Indah Blok H no. 5 Waru - Sidoarjo</a></li>
            <li><a href="https://wa.me/628563129756">+62 856 3129 756</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-3 d-none d-lg-block text-center">
        <div class="widget clearfix text-center">
          <a href="https://linktr.ee/suwarnaeducation?utm_source=linktree_profile_share&ltsid=5c1f0afc-acb5-45d0-8ab7-ae358236957e"><img src="{{ asset('images/ilus-foot2.gif') }}" alt="Linktree Suwarna Education" class="img-fluid ilus-kanan"></a>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
</body>
</html>
