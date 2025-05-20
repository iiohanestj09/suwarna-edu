<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paket</title>  
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
						<li class="nav-item active"><a class="nav-link" href="{{ route('paket') }}">Paket</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('galeri') }}">Galeri</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
            <li><a class="hover-btn-new log blue" href="{{ route('daftar') }}" target="_blank"><span>Daftar Sekarang</span></a>
            </li>
          </ul>
				</div>
			</div>
		</nav>
	</header>

  <!-- Card 5 Paket -->
  <div id="paket">
    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider brdr-pkt carousel-fade" data-ride="carousel" data-pause="hover" data-interval="false" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        <li data-target="#carouselExampleControls" data-slide-to="3"></li>
        <li data-target="#carouselExampleControls" data-slide-to="4"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        <div id="card-sd" class="carousel-item active">
          <div class="first-section" style="background-image:url('{{ asset('images/bg-sd.png') }}');">
            <div class="dtab">
              <div class="container card-paket paket-sd">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="{{ asset('images/ilus-sd.svg') }}" alt="Ilustrasi SD" class="img-fluid wow zoomIn">
                  </div>
                  <div class="col-md-1"></div> <!-- Space kosong -->
                  <div class="col-md-7 text-justify">
                    <div class="big-tagline">
                      <h2>Paket <strong>Sekolah Dasar:</strong></h2>
                      <p class="lead">Adik-adik yang masih duduk di bangku sekolah dasar, pasti ingin meraih prestasi terbaik dan masuk ke SMP impian, kan? Suwarna Education siap mendukungmu untuk meningkatkan nilai rapor agar kamu bisa jadi siswa berprestasi dan lolos ke sekolah impian. Di sini, kamu akan BELAJAR bersama pengajar yang ramah dan kompeten, serta rutin BERLATIH menyelesaikan berbagai tipe soal yang serupa dengan ujian sekolah. Kamu juga akan BERTANDING dalam berbagai Try Out yang bisa diakses kapan pun dan di mana pun. Jadi, tunggu apa lagi? Ayo gabung dengan Suwarna Education, wujudkan cita-citamu bersama kami!</p>
                      <span class="hover-btn-new wow fadeInDown spn-sd">Kelas 4 SD</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-sd">Kelas 5 SD</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-sd">Kelas 6 SD</span>
                    </div>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div id="card-smp" class="first-section" style="background-image:url('{{ asset('images/bg-smp.png') }}');">
            <div class="dtab">
              <div class="container card-paket paket-smp">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="{{ asset('images/ilus-smp.svg') }}" alt="Ilustrasi SD" class="img-fluid wow zoomIn">
                  </div>
                  <div class="col-md-1"></div> <!-- Space kosong -->
                  <div class="col-md-7 text-justify">
                    <div class="big-tagline">
                      <h2>Paket <strong>Sekolah Menengah Pertama:</strong></h2>
                      <p class="lead">Sobat-sobat yang masih duduk di bangku SMP, pasti ingin meraih prestasi terbaik dan masuk ke SMA impian, kan? Suwarna Education siap mendukungmu untuk meningkatkan nilai rapor agar kamu bisa jadi siswa berprestasi dan lolos ke sekolah impian. Di sini, kamu akan BELAJAR bersama pengajar yang ramah dan kompeten, serta rutin BERLATIH menyelesaikan berbagai tipe soal yang serupa dengan ujian sekolah. Kamu juga akan BERTANDING dalam berbagai Try Out yang bisa diakses kapan pun dan di mana pun. Jadi, tunggu apa lagi? Ayo gabung dengan Suwarna Education, wujudkan cita-citamu bersama kami!</p>
                      <span class="hover-btn-new wow fadeInDown spn-smp">Kelas 7 SMP</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-smp">Kelas 8 SMP</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-smp">Kelas 9 SMP</span>
                    </div>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div id="card-sma" class="first-section" style="background-image:url('{{ asset('images/bg-sma.png') }}');">
            <div class="dtab">
              <div class="container card-paket paket-sma">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="{{ asset('images/ilus-sma.svg') }}" alt="Ilustrasi SD" class="img-fluid wow zoomIn">
                  </div>
                  <div class="col-md-1"></div> <!-- Space kosong -->
                  <div class="col-md-7 text-justify">
                    <div class="big-tagline">
                      <h2>Paket <strong>Sekolah Menengah Atas:</strong></h2>
                      <p class="lead">Paket SMA Suwarna Education dirancang khusus untuk membantu kamu lulus ujian dengan percaya diri, berbekal materi lengkap dan mudah dipahami. Dengan bimbingan tutor berpengalaman, kamu akan lebih siap menghadapi tantangan akademik dan meraih nilai terbaik. Sistem belajar yang fleksibel memungkinkan kamu menyesuaikan waktu belajar sesuai kebutuhan, tanpa mengorbankan kegiatan lain. Bergabung sekarang dan rasakan pengalaman belajar yang menyenangkan, efektif, dan terbukti membantu banyak siswa sukses lulus SMA!</p>
                      <span class="hover-btn-new wow fadeInDown spn-sma">Kelas 10 SMA</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-sma">Kelas 11 SMA</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-sma">Kelas 12 SMA</span>
                    </div>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div id="card-utbk" class="first-section" style="background-image:url('{{ asset('images/bg-utbk.png') }}');">
            <div class="dtab">
              <div class="container card-paket paket-utbk">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="{{ asset('images/ilus-utbk.svg') }}" alt="Ilustrasi SD" class="img-fluid wow zoomIn">
                  </div>
                  <div class="col-md-1"></div> <!-- Space kosong -->
                  <div class="col-md-7 text-justify">
                    <div class="big-tagline">
                      <h2>Paket <strong>Intensif UTBK:</strong></h2>
                      <p class="lead">Paket Intensif UTBK adalah solusi terbaik untuk kamu yang ingin lolos seleksi masuk PTN favorit! Program ini dirancang khusus dengan materi super padat dan strategi jitu yang langsung fokus ke tipe soal UTBK terkini. Dibimbing oleh tutor ahli dan dilengkapi try out rutin, kamu bisa mengukur progres sekaligus memperkuat kepercayaan diri. Yuk, maksimalkan peluang kamu dan raih skor UTBK impian bersama Suwarna Education!</p>
                      <span class="hover-btn-new wow fadeInDown spn-utbk">Intensif UTBK Fullday</span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span class="hover-btn-new wow fadeInDown spn-utbk">Intensif UTBK Supercamp</span>
                    </div>
                  </div>
                </div>            
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div id="card-lain" class="first-section" style="background-image:url('{{ asset('images/bg-lain.png') }}');">
            <div class="dtab">
              <div class="container card-paket paket-lain">
                <div class="row align-items-center">
                  <div class="col-md-4 text-center">
                    <img src="{{ asset('images/ilus-lain.svg') }}" alt="Ilustrasi SD" class="img-fluid wow zoomIn">
                  </div>
                  <div class="col-md-1"></div> <!-- Spacer kosong -->
                  <div class="col-md-7 text-left">
                    <div class="big-tagline">
                      <h2>Paket <strong>Spesial Lainnya:</strong></h2>
                      <p class="lead">Paket Spesial Lainnya ini dirancang untuk mendampingi kamu dalam berbagai jalur prestasi dan ujian penting—mulai dari persiapan Ujian Nasional (UN), Asesmen Kompetensi Minimum (AKM), Kelas Olimpiade untuk siswa unggulan, hingga bimbingan intensif masuk sekolah kedinasan. Didukung tutor ahli dan sistem belajar terarah, kamu bisa lebih siap menghadapi persaingan dan meraih hasil maksimal. Bersama Suwarna Education, sukses bukan lagi sekadar harapan—tapi tujuan yang pasti!</p>
                      <span class="hover-btn-new wow fadeInDown spn-lain">Ujian Nasional</span>
                      <span class="hover-btn-new wow fadeInDown spn-lain">Asesmen Kompetensi Minimum</span>
                      <span class="hover-btn-new wow fadeInDown spn-lain">Kelas Olimpiade</span>
                      <span class="hover-btn-new wow fadeInDown spn-lain">Paket Kedinasan</span>									
                    </div>
                  </div>
                </div>           
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Kontrol Kiri -->
      <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <!-- Kontrol Kanan-->
      <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="testi-table-daftar wow zoomIn">
      <a href="{{ route('daftar') }}" target="_blank" class="hover-btn-new daftar-sekarang"><span>Daftar Sekarang</span></a>
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