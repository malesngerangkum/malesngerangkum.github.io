<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Males Ngerangkum - Rangkuman Buat Kamu Yang Mau Ujian';
        return view('index', compact('title'));
    }

    public function about()
    {
        $title = 'Males Ngerangkum - Tentang Kami';
        return view('tentang-kami', compact('title'));
    }
}
