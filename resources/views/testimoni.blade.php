<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimoni</title>  
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
					<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('paket') }}">Paket</a></li>
						<li class="nav-item active"><a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log blue" href="https://forms.gle/ehNdd4CxUFZRZXq38" target="_blank"><span>Daftar Sekarang</span></a>
            </li>
          </ul>
				</div>
			</div>
		</nav>
	</header>

  <!-- Isi Testimoni -->
  <div class="bg-blue">
    <section class="testimoni-section">
      <h2><strong>Testimoni</strong> Alumni</h2>

      @php
        $total = $testimonis->count();
        $midpoint = ceil($total / 2);
      @endphp

      <div class="testimoni-columns-wrapper">
        <!-- Kolom Kiri -->
        <div class="testimoni-column wow fadeInUp">
          @foreach ($testimonis->take($midpoint) as $index => $testimoni)
            <div class="testimoni-card">
              <img src="{{ asset('images/student-' . ($index + 1) . '.svg') }}" alt="{{ $testimoni->nama }}" class="testimoni-image">
              <div class="testimoni-content">
                <h3>{{ $testimoni->nama }}</h3>
                <p>"{{ $testimoni->pesan }}"</p>
                <small>{{ $testimoni->jurusan }}</small>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Kolom Kanan -->
        <div class="testimoni-column wow fadeInDown">
          @foreach ($testimonis->skip($midpoint) as $index => $testimoni)
            <div class="testimoni-card">
              <img src="{{ asset('images/student-' . ($index + 0) . '.svg') }}" alt="{{ $testimoni->nama }}" class="testimoni-image">
              <div class="testimoni-content">
                <h3>{{ $testimoni->nama }}</h3>
                <p>"{{ $testimoni->pesan }}"</p>
                <small>{{ $testimoni->jurusan }}</small>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
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