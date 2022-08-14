<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wisata;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'pageTitle' => 'Fatubraon | Admin Beranda',
            'page' => 'Beranda',
        ]);
}
public function wisata()
{
    // $wisata = Wisata::where('wisata.wisata_id', auth()->user()->user_id)->orderBy('wisata.created_at', 'desc')->paginate(10);
    return view('admin.wisata', [
        'pageTitle' => 'Fatubraon | Wisata',
        'page' => 'Wisata',
        // 'dataUser' => User::find(auth()->user()->user_id),
        // 'wisata' => $wisata
    ]);
}
public function wisataStore(Request $request)
    {
        $wisata = ['nama_wisata', 'deskripsi'];
        $gambar = ['gambar'];

        foreach ($wisata as $key => $r) {
            $temp_berkas = $request->file($r)->getPathName();
            $file_berkas = auth()->user()->user_id . '-' . $r . time();
            $folder_berkas = "unggah/wisata/" . $file_berkas . ".pdf";
            move_uploaded_file($temp_berkas, $folder_berkas);
            $berkas[$key] = '/unggah/wisata/' . $file_berkas . '.pdf';
        }

        foreach ($gambar as $key2 => $s) {
            $temp_berkas = $request->file($s)->getPathName();
            $ex = $request->file($s)->extension();
            $file_berkas = auth()->user()->user_id . '-' . $s . time();
            $folder_berkas = "unggah/wisata/" . $file_berkas . "." . $ex;
            move_uploaded_file($temp_berkas, $folder_berkas);
            $foto[$key2] = '/unggah/wisata/' . $file_berkas . "." . $ex;
        }

        $data = [
            'nama_wisata' => $wisata[0],
            'deskripsi' => $wisata[1],
            'gambar' => $gambar[0],
            'user_id' => auth()->user()->user_id,
        ];

        Wisata::create($data);

        return redirect('/admin/wisata')->with('success', 'Wisata berhasil ditambah');
    }
    public function layanan()
{
    // $wisata = Wisata::where('wisata.wisata_id', auth()->user()->user_id)->orderBy('wisata.created_at', 'desc')->paginate(10);
    return view('admin.layanan', [
        'pageTitle' => 'Fatubraon | Layanan',
        'page' => 'Layanan',
        // 'dataUser' => User::find(auth()->user()->user_id),
        // 'wisata' => $wisata
    ]);
}
public function layananStore(Request $request)
    {
        // $wisata = ['nama_wisata', 'deskripsi'];
        // $gambar = ['gambar'];

        // foreach ($wisata as $key => $r) {
        //     $temp_berkas = $request->file($r)->getPathName();
        //     $file_berkas = auth()->user()->user_id . '-' . $r . time();
        //     $folder_berkas = "unggah/wisata/" . $file_berkas . ".pdf";
        //     move_uploaded_file($temp_berkas, $folder_berkas);
        //     $berkas[$key] = '/unggah/wisata/' . $file_berkas . '.pdf';
        // }

        // foreach ($gambar as $key2 => $s) {
        //     $temp_berkas = $request->file($s)->getPathName();
        //     $ex = $request->file($s)->extension();
        //     $file_berkas = auth()->user()->user_id . '-' . $s . time();
        //     $folder_berkas = "unggah/wisata/" . $file_berkas . "." . $ex;
        //     move_uploaded_file($temp_berkas, $folder_berkas);
        //     $foto[$key2] = '/unggah/wisata/' . $file_berkas . "." . $ex;
        // }

        // $data = [
        //     'nama_wisata' => $wisata[0],
        //     'deskripsi' => $wisata[1],
        //     'gambar' => $gambar[0],
        //     'user_id' => auth()->user()->user_id,
        // ];

        // Wisata::create($data);

        // return redirect('/admin/wisata')->with('success', 'Wisata berhasil ditambah');
    }
}
