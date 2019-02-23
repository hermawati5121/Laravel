<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function daftar(Request $require)
    {
    	return view('admin.pages.kategori.daftar');
    }
}
