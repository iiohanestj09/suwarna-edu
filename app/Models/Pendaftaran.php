<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
  protected $fillable = [
    'nama',
    'email',
    'telepon',
    'paket',
    'kelas',
  ];
}
