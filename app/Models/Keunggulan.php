<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
  use HasFactory;

  protected $table = 'keunggulan_mitra';
  protected $fillable = ['keunggulan']; 
}
