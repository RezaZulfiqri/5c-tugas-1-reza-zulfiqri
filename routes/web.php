<?php

use Illuminate\Support\Facades\Route;

Route::get('/dosen', function(){
    $list_dosen = ["Iqbal maulana", "Intan Purnamasari", "Betha Nurina Sari", "Arip solehudin",  "Purwantoro", "Aji primajaya", "Tesa Nur Padila", "Susi", "Adhi Riza", "Ibnu Riza",];
    return view('dosen')->with('dosen_s', $list_dosen);
});

Route::get('/matakuliah', function(){
    $list_matakuliah = ["Data mining", "Pemrograman berbasis web", "Pemrograman berbasis mobile", "Cloud Computing", "Kalkulus", "Metode numerik",  "Technopreneur", "Komputer masyarakat", "Matematika diskrit", "Fisika dasar"];
    return view('matakuliah')->with('matakuliah_s', $list_matakuliah);
});

Route::get('/mahasiswa', function(){
    $list_mahasiswa = ["Reza Zulfiqri", "Sophia Maratuss", "Nagaryanto", "Joice Margaretha", "Alfianto Aditya", "Risfandhiani Putri", "Rafly pasya", "Dwi Miftahusalamah", "Fajar Adityo", "Hulwa salsabila"];
    return view('mahasiswa')->with('mahasiswa_s', $list_mahasiswa);
});


