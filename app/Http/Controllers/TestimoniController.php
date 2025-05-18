<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('testimoni', compact('testimonis'));
    }
}
