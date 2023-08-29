<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function visiMisi()
    {
        return view('visi-misi');
    }

    public function strukturPemerintahan()
    {
        return view('struktur-pemerintahan');
    }

    public function petaLokasi()
    {
        return view('peta-lokasi');
    }
}
