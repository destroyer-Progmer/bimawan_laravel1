<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = ["Matematika", "Pemrograman Web", "Basis Data", "Bahasa Inggris"];
        
        return view('mapel', ['mapel' => $mapel]);
    }
}