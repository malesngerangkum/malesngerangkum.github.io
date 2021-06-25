<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Males Ngerangkum - Rangkuman Buat Kamu Yang Besok Mau Ujian';
        return view('index', compact('title'));
    }

    public function preview($name, $id=null, $title='')
    {
        if (is_null($id))
        {
            $title = 'Males Ngerangkum - ' . $title;
            return view($name, compact('title'));
        }
        else return compact($name, $id);
    }
}
