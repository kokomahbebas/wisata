<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->with('error', 'Email atau password anda salah!');
    }
    public function verifikasiTokenPage()
    {
        return view('verifikasi-akun');
    }
    public function resetForm($token)
    {
        return view('reset-form', [
            'token' => $token,
        ]);
    }
    public function registrasi()
    {

        return view('registrasi');
    }
    public function kirimToken()
    {
        $to_name = auth()->user()->nama;
        $to_email = auth()->user()->email;

        $token = Str::random(6);

        User::find(auth()->user()->user_id)->update(['token' => $token]);

        $data = array('name' => $to_name, 'token' => $token);
        Mail::send('admin.mail.regis-token', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Wisata Fatubraon');
            $message->from('kokoakuncoc09@gmail.com', 'Verifikasi akun anda untuk melanjutkan pendaftaran di Wisata Fatubraon');
        });

        return redirect('/')->with('success', 'Token berhasil dikirim ulang silahkan cek email anda.');
    }
    public function daftarStore(Request $request)
    {
        date_default_timezone_set("Asia/Makassar");

        $input = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'no_hp' => $request->input('no_hp'),
            'role' => 'user',
            'token' => Str::random(6),
        ];
        User::create($input);

        $to_name = $request->input('nama');
        $to_email = $request->input('email');

        $data = array('name' => $to_name, 'token' => $input['token']);
        Mail::send('admin.mail.regis-token', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Verifikasi akun anda');
            $message->from('kokoakuncoc09@gmail.com', 'Verifikasi akun anda untuk melanjutkan pendaftaran di Wisata Fatubraon');
        });

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/verifikasi-akun');
        }
    }
    
    
    public function verifikasiToken(Request $req)
    {
        $user = User::find(auth()->user()->user_id);

        if ($user->token == $req->input('token')) {
            User::find(auth()->user()->user_id)->update(['email_verified_at' => date('Y-m-d H:s:i')]);
            return redirect('/')->with('success', 'Verifikasi email anda berhasil');
        }
        return redirect('/verifikasi-akun')->with('error', 'Token email salah, silahkan cek kembali');
    }
}
