<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //ini tampilan function index
    public function index()
    {
        // echo "<h1>Hello World dari Controller</h1>"
        // $nama = "Muhamad Yusuf Sucahyo";
        // $pelajaran = ["PWPB", "Algoritma", "Pemdas", "Basis Data", "PBO"];
        // return view('hello.index', compact('nama')); 
        // $nama = "Muhamad Yusuf Sucahyo";
        // $pelajaran = ["PWPB", "Algoritma", "Pemdas", "Basis Data", "PBO"];
        // return view('hello.index', ['nama' => $nama, 'pelajaran' => $pelajaran]); 
        $d['nama'] = "Muhamad Yusuf Sucahyo";
        $d['pelajaran'] = ["PWPB", "Algoritma", "Pemdas", "Basis Data", "PBO"];
        return view('hello.index', $d); 
    }
}
