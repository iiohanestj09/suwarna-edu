$(document).ready(function () {
  // ── VIDEO HOVER ─────────────────────────────────────────────
  $(document).on('mouseenter', '.gallery-box video', function () {
    this.muted = false;
    this.volume = 1.0;
    this.play();
  });

  $(document).on('mouseleave', '.gallery-box video', function () {
    this.pause();
    this.currentTime = 0;
  });

  // ── 1) Owl Carousel: Baris 1 ─
  $(".baris-1").owlCarousel({
    items: 4,
    margin: 20,
    loop: true,
    nav: true,
    dots: true,
    autoplay: false,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 4 }
    }
  });

  // ── 2) Owl Carousel: Baris 2 ─
  $(".baris-2").owlCarousel({
    items: 4,
    margin: 20,
    loop: true,
    nav: true,
    dots: true,
    autoplay: false,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 4 }
    }
  });

  // ── 3) Hash-based Carousel Scroll ─
  var hash = window.location.hash;
  var slideMap = {
    "#card-sd": 0,
    "#card-smp": 1,
    "#card-sma": 2,
    "#card-utbk": 3,
    "#card-lain": 4
  };

  var $carousel = $('#carouselExampleControls');

  if (slideMap[hash] !== undefined) {
    $carousel.addClass('carousel-fade');
    $carousel.carousel(slideMap[hash]);

    setTimeout(function () {
      var target = document.querySelector(hash);
      var navbar = document.querySelector('.navbar');
      if (target && navbar) {
        window.scrollTo({
          top: target.offsetTop - navbar.offsetHeight,
          behavior: 'smooth'
        });
      }
    }, 300);

    setTimeout(function () {
      $carousel.removeClass('carousel-fade');
    }, 1000);
  } else {
    $carousel.removeClass('carousel-fade');
  }

  // ── 4) Owl Carousel: Brosur (post-media) ─
  $(".post-media.owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4500,
    autoplayHoverPause: false,
    items: 1
  });

  // ── BACK TO TOP ──────────────────────────────────────────────
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $('.dmtop').css({ bottom: "10px" });
    } else {
      $('.dmtop').css({ bottom: "-100px" });
    }

    if ($(this).scrollTop() > 100) {
      $('#scroll-to-top').addClass('show');
    } else {
      $('#scroll-to-top').removeClass('show');
    }
  });

  $('#scroll-to-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 700);
  });

  
  $('#scroll-to-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 700);
  });

  // ── FORM PENDAFTARAN: Dropdown Paket → Kelas ────────────────
  $('#form-paket').on('change', function () {
    const paket = $(this).val();
    let options = '<option value="" disabled selected>Pilih Kelas</option>';

    switch (paket) {
      case 'SD':
        options += `
          <option value="Kelas 4 SD">Kelas 4 SD</option>
          <option value="Kelas 5 SD">Kelas 5 SD</option>
          <option value="Kelas 6 SD">Kelas 6 SD</option>
        `;
        break;
      case 'SMP':
        options += `
          <option value="Kelas 7 SMP">Kelas 7 SMP</option>
          <option value="Kelas 8 SMP">Kelas 8 SMP</option>
          <option value="Kelas 9 SMP">Kelas 9 SMP</option>
        `;
        break;
      case 'SMA':
        options += `
          <option value="Kelas 10 SMA">Kelas 10 SMA</option>
          <option value="Kelas 11 SMA">Kelas 11 SMA</option>
          <option value="Kelas 12 SMA">Kelas 12 SMA</option>
        `;
        break;
      case 'UTBK':
        options += `
          <option value="Intensif UTBK Fullday">Intensif UTBK Fullday</option>
          <option value="Intensif UTBK Supercamp">Intensif UTBK Supercamp</option>
        `;
        break;
      case 'LAINNYA':
        options += `
          <option value="Ujian Nasional">Ujian Nasional</option>
          <option value="Asesmen Kompetensi Minimum">Asesmen Kompetensi Minimum</option>
          <option value="Kelas Olimpiade">Kelas Olimpiade</option>
          <option value="Paket Kedinasan">Paket Kedinasan</option>
        `;
        break;
    }

    $('#form-kelas').html(options);
  });
});
