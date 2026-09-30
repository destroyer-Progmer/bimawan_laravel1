<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Bimawan";
        $kelas = "XII RPL ";
        $hobi = "Coding, Membaca, Olahraga";

        return view('profil', [
            'nama' => $nama,
            'kelas' => $kelas,
            'hobi' => $hobi,
        ]);
    }

     public function sapa($nama)
    {
        return view('sapa', ['nama' => $nama]);
    }
}