<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
  public function form()
  {
      return view('form-daftar');
  }

  public function submit(Request $request)
  {
    $data = $request->validate([
      'nama' => 'required|string|max:255',
      'email' => 'required|email',
      'telepon' => 'required',
      'paket' => 'required',
      'kelas' => 'required',
    ]);

    // Simpan ke DB
    Pendaftaran::create($data);

    // Redirect ke WA
    $pesan = "Halo Admin, Saya Telah Mengisi Form.\n\nNama: {$data['nama']}\nEmail: {$data['email']}\nNo HP: {$data['telepon']}\nPaket: {$data['paket']} - Kelas {$data['kelas']}";
    $url = 'https://wa.me/628563129756?text=' . urlencode($pesan);

    return redirect($url);
  }
}
