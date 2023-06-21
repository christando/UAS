<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl0454;
date_default_timezone_set("Asia/Bangkok");

class PageController extends Controller
{
    public function home()
    {
        return view('no2');
    }

    public function tampil(Request $request)
    {
        $tampil = $request->jenis;
        return view('tampil_no2', ['tampil'=>$tampil]);
    }

    public function tampil2()
    {
        $table = tbl0454::orderBy('id','desc')->get();
        return view('no4', ['table' => $table]);
    }

    public function no3(){
        return view('no3');
    }

    public function tampilNo3(Request $request)
    {
        $hobi = $request->hobi;
        return view('tampil_no3', ['hobi'=>$hobi]);
    }

    public function greeting()
    {
        $jam_sekarang = date('H:i:s');
        if ($jam_sekarang >= '03:00:00' && $jam_sekarang <= '09:59:59') {
            $greeting = "Selamat Pagi";
        } elseif ($jam_sekarang >= '10:00:00' && $jam_sekarang <= '14:59:59') {
            $greeting = "Selamat Siang";
        } elseif ($jam_sekarang >= '10:00:00' && $jam_sekarang <= '14:59:59') {
            $greeting = "Selamat Sore";
        } elseif ($jam_sekarang >= '15:00:00' && $jam_sekarang <= '17:59:59') {
            $greeting = "Selamat Petang";
        } else {
            $greeting = "Selamat Malam";
        }

        $nama = "Valentino";

        return view('no5', ['greeting' => $greeting, 'nama' => $nama]);
    }
}
