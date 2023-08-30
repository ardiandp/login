<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function login(Request $request)
    {
    $nip = $request->input('nip');
    $password = $request->input('password');

    $pegawai = DB::table('pegawai')
                    ->where('nip', $nip)
                    ->first();

    if ($pegawai && password_verify($password, $pegawai->password)) {
        // Autentikasi berhasil
        // Lakukan aksi setelah login berhasil
    } else {
        // Autentikasi gagal
        // Lakukan aksi ketika login gagal
    }
    }

    public function logout()
    {
    Auth::logout();
    return redirect('/login');
    }

    
}
