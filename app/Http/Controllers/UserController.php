<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index', [
            'pageTitle' => 'Fatubraon | Beranda',
            'page' => 'beranda',
        ]);
    }
    public function fatubraonStore()
    {
        return view('store', [
            'pageTitle' => 'Fatubraon | Store',
            'page' => 'store',
        ]);
    }
    public function tentangPage()
    {
        return view('tentang', [
            'pageTitle' => 'Fatubraon | Tentang',
            'page' => 'tentang',
        ]);
    }
    public function kontakPage()
    {
        return view('kontak', [
            'pageTitle' => 'Fatubraon | Kontak Kami',
            'page' => 'kontak',
        ]);
    }
}
