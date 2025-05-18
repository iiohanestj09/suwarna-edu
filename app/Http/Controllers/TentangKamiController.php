<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Keunggulan;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data = [
            'sejarah' => Sejarah::all(),
            'visi' => Visi::all(),
            'misi' => Misi::all(),
            'keunggulan' => Keunggulan::all(),
        ];

        return view('tentang-kami', $data);
    }
}
