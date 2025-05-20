<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran</title> 
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
<body class="bg-blue">
  <!-- Form Pendaftaran -->
  <div class="form-pendaftaran">
    <div class="container-fluid">
      <h1 class="text-center mt-5 mb-4 title-form"><strong>Form</strong> Pendaftaran</h1>

      <form action="{{ url('/daftar') }}" method="POST">
        @csrf
        <div class="form-group">
          <p><strong>Nama Lengkap:</strong></p>
          <input type="text" class="form-control" id="form-nama" name="nama" required>
        </div>

        <div class="form-group">
          <p><strong>Email:</strong></p>
          <input type="email" class="form-control" id="form-email" name="email" required>
        </div>

        <div class="form-group">
          <p for="telepon"><strong>Nomor Telepon/HP:</strong></p>
          <input type="text" class="form-control" id="form-telepon" name="telepon" required>
        </div>

        <div class="form-group">
          <p><strong>Paket:</strong></p>
          <select class="form-control" name="paket" id="form-paket" required>
            <option value="" disabled selected>Pilih Paket</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="UTBK">UTBK</option>
            <option value="LAINNYA">Lainnya</option>
          </select>
        </div>

        <!-- Kelas -->
        <div class="form-group">
          <p><strong>Kelas:</strong></p>
          <select class="form-control" name="kelas" id="form-kelas" required>
            <option value="" disabled selected>Pilih Kelas</option>
          </select>
        </div>
        
        <p class="text-muted mt-5 text-center" style="font-size: 14px;">
          <i class="fa fa-exclamation-circle" style="color:gray; margin-right:7px;"></i>
          Setelah semua data terisi, tolong lakukan konfirmasi di WhatsApp.
        </p>
        
        <div class="form-group mt-2 mb-4 text-center">
          <button type="submit" class="btn tombol-submit">Kirim Data</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
