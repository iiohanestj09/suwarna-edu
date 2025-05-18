<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda: Suwarna Education</title>  
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
						<li class="nav-item active"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('paket') }}">Paket</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('testimoni') }}">Testimoni</a></li>
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

  <!-- Header Beranda 3 Slides -->
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section beranda" style="background-image:url('{{ asset('images/slider-01.jpg') }}');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 class="wow fadeInUp"><strong>Suwarna </strong> education</h2>
										<p class="lead">Sedang mencari tempat bimbingan belajar yang berkualitas untuk Putra Putri Anda? <br> Come Join Us!</p>
                    <a href="https://wa.me/628563129756" class="hover-btn-new wow fadeInDown"><span>Hubungi Kami</span></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://forms.gle/ehNdd4CxUFZRZXq38" target="_blank" class="hover-btn-new wow fadeInDown"><span>Daftar Sekarang</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section beranda" style="background-image:url('{{ asset('images/slider-02.jpg') }}');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Suwarna Education</h2>
										<p class="lead" data-animation="animated fadeInLeft">Banyak Program dan Paket yang disusun oleh mentor berpengalaman dan terpercaya. <br>Kami siap mendampingi Putra Putri Anda meraih masa depan gemilang melalui pendidikan berkualitas.</p>
                    <a href="https://wa.me/628563129756" class="hover-btn-new wow fadeInDown"><span>Hubungi Kami</span></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://forms.gle/ehNdd4CxUFZRZXq38" target="_blank" class="hover-btn-new wow fadeInDown"><span>Daftar Sekarang</span></a>
									</div>
								</div>
							</div>           
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section beranda" style="background-image:url('{{ asset('images/slider-03.jpg') }}');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 data-animation="zoomInRight">Suwarna <strong>Education</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">Kembangkan potensi akademis dengan bimbingan belajar kami! <br>Bersama kami, belajar jadi lebih mudah dan menyenangkan.</p>
                    <a href="https://wa.me/628563129756" class="hover-btn-new wow fadeInDown"><span>Hubungi Kami</span></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://forms.gle/ehNdd4CxUFZRZXq38" target="_blank" class="hover-btn-new wow fadeInDown"><span>Daftar Sekarang</span></a>
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

			<!-- Kontrol Kanan -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
  <!-- Tentang Kami dan Brosur -->
  <div id="overviews" class="section wb">
    <div class="container">
      <div class="section-title row text-center sect-brosur">
        <div class="col-md-10 offset-md-1">
          <h3>Tentang Kami</h3>
          <p class="lead wow zoomIn">Suwarna Education merupakan lembaga bimbingan belajar yang berdiri sejak awal tahun 2007 sampai sekarang. Dengan pengalaman lebih dari satu dekade, kami berkomitmen untuk menjadi mitra terpercaya dalam mendampingi proses belajar siswa dari berbagai jenjang pendidikan. Dengan tim mentor yang berdedikasi dan pendekatan belajar yang adaptif, Kami menghadirkan suasana belajar yang kondusif, terarah, dan menyenangkan. Kami percaya bahwa proses belajar yang baik tidak hanya mengandalkan materi, tetapi juga suasana, metode, dan hubungan yang terjalin antara siswa dan pendamping belajarnya. Di sinilah kami hadir — sebagai teman belajar yang dapat diandalkan.</p>
          <a href="{{ route('tentang-kami') }}" class="hover-btn-new blue wow zoomIn"><span>Lihat Selengkapnya</span></a>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="message-box wow fadeInUp" data-wow-duration="1.7s">
            <h4>Raih Kesempatan Emas-Mu,</h4>
            <h2>Brosur <strong>Suwarna Education</strong></h2>
            <p class="lead">Suwarwa Education hadir sebagai solusi bagi siswa yang ingin mendapatkan pendidikan berkualitas dengan metode yang terstruktur, inovatif, dan efektif</p>
            <p>✅ Dapatkan informasi mengenai metode pengajaran yang didesain untuk meningkatkan pemahaman siswa. <br>✅ Kenali suasana belajar yang nyaman dengan fasilitas memadai yang menunjang perkembangan akademik dan keterampilan siswa. <br>✅ Jelajahi berbagai program unggulan yang dirancang untuk membantu siswa mencapai prestasi terbaik dalam akademik maupun pengembangan diri.</p>
            <img class="brosur-ill" src="{{ asset('images/brosur-illus.png') }}" alt="">
          </div>
        </div>
        
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="post-media wow fadeInUp owl-carousel" data-wow-delay="0.5s" data-wow-duration="1.4s">
            <img src="{{ asset('images/brosur-01.jpg') }}" alt="Brosur 1">
            <img src="{{ asset('images/brosur-02.jpg') }}" alt="Brosur 2">
            <img src="{{ asset('images/brosur-03.jpg') }}" alt="Brosur 3">
            <img src="{{ asset('images/brosur-04.jpg') }}" alt="Brosur 4">
            <img src="{{ asset('images/brosur-05.jpg') }}" alt="Brosur 5">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Paket dan Testimoni -->
  <div class="bg-blue">
    <section class="section paket page-section">
      <div class="section-title">
        <h3>Paket-Paket</h3>
      </div>
      <div class="card-container">
        <a href="{{ route('paket') }}#card-sd" class="card small-card wow fadeInLeft" data-wow-duration="1.3s">
          <img src="{{ asset('images/paket1.gif') }}" alt="">
          <h3>Paket SD</h3>
          <p>Program dasar untuk memperkuat pemahaman dan membangun kepercayaan diri siswa sejak dini.</p>
        </a>
        <a href="{{ route('paket') }}#card-smp" class="card small-card wow fadeInLeft" data-wow-duration="1.3s">
          <img src="{{ asset('images/paket2.gif') }}" alt="">
          <h3>Paket SMP</h3>
          <p>Pendampingan belajar untuk membantu siswa memahami materi inti dan membentuk kebiasaan belajar mandiri.</p>
        </a>
        <a href="{{ route('paket') }}#card-sma" class="card small-card wow fadeInLeft" data-wow-duration="1.3s">
          <img src="{{ asset('images/paket3.gif') }}" alt="">
          <h3>Paket SMA</h3>
          <p>Fokus pada pendalaman materi dan strategi belajar efektif guna meraih prestasi terbaik di sekolah.</p>
        </a>
        <a href="{{ route('paket') }}#card-utbk" class="card big-card wow fadeInLeft" data-wow-duration="1.3s">
          <img src="{{ asset('images/paket4.gif') }}" alt="">
          <h3>Paket Intensif UTBK</h3>
          <p>Persiapan UTBK terstruktur dengan latihan soal, pembahasan mendalam, dan simulasi rutin.</p>
        </a>
        <a href="{{ route('paket') }}#card-lain" class="card big-card wow fadeInLeft" data-wow-duration="1.3s">
          <img src="{{ asset('images/paket5.gif') }}" alt="">
          <h3>Paket Spesial Lainnya</h3>
          <p>Meliputi Paket UN, AKM, Paket Kedinasan hingga Kelas Olimpiade untuk menunjang kebutuhan belajar spesifik siswa.</p>
        </a>          
      </div> 
    </section>

    <div class="section testi">
      <div class="container">
        <div class="section-title text-center">
          <h3>Testimoni</h3>
          <p class="red-fnt"> <strong>"Apa kata mereka tentang Suwarna Education?"</strong></p>
          <p>Simak pengalaman para siswa dan orang tua yang telah merasakan dampak positif dari Bimbel kami. </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="tab-content">
              <div class="tab-pane active fade show" >
                <div class="row text-center">
                  <div class="col-md-4">
                    <div class="testi-table testi-table-highlighted wow fadeInLeft">
                      <div class="testi-table-header">
                        <img class="img-testi" src="{{ asset('images/testimoni-01.jpg') }}" alt="">
                        <h2>Siti Aisyah</h2>
                        <h3>Kedokteran, UNAIR</h3>
                      </div>
                      <div class="testi-table-features">
                        <p>"Seruu banget belajar di SE. Tentornya keren-keren dan ngebahas soal dgn bisa tanya-tanya soal juga. Terus materi yg dikasih juga TOP lah, banyak yg juga, juga ada pembahasan soal. Suasananya enak banget apalagi banyak temennya jadi belajar juga diselingi seru-seruan dikit sama temen-teman."</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="testi-table testi-table-highlighted wow fadeInUp">
                      <div class="testi-table-header">
                        <img class="img-testi" src="{{ asset('images/testimoni-02.jpg') }}" alt="">
                        <h2>Hasby Ibrahim Yusuf</h2>
                        <h3>Teknik Industri, ITS</h3>
                      </div>
                      <div class="testi-table-features">
                        <p>"Alhamdulillah sangat bersyukur bisa ikut les di LBB SE hingga aku bisa lolos di PTN impianku. Tentor tentor yang mengajar asik dan materi yang disampaikan mudah dipahami. Sangat banyak ilmu yang saya dapatkan. Modul pembelajarannya bagus, sangat membantu dalam mempersiapkan UTBK."</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="testi-table testi-table-highlighted wow fadeInRight">
                      <div class="testi-table-header">
                        <img class="img-testi" src="{{ asset('images/testimoni-03.jpg') }}" alt="">
                        <h2>Sheva Ali Husein</h2>
                        <h3>Kedinasan PPI, Madiun</h3>
                      </div>
                      <div class="testi-table-features">
                        <p>"Bagi saya LBB SE adalah pilihan terbaik yang pernah saya buat. berkat bimbingannya, alhamdulillah saya berhasil masuk ke sekolah kedinasan impian saya. Saya sangat bahagia bisa les di sini, semua mentornya ramah juga baik hati, metode pengajaran sangat efektif dan penuh dengan kesabaran."</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="testi-table-daftar wow zoomIn">
                  <a href="{{ route('testimoni') }}" class="hover-btn-new orange"><span>Selengkapnya</span></a>
                </div>
              </div>
            </div>
          </div>
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