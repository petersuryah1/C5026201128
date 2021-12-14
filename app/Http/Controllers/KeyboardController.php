<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeyboardController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('keyboard')->get();
        $keyboard = DB::table('keyboard')->paginate(2);

    	// mengirim data keyboard ke view index
    	return view('keyboard.index',['keyboard' => $keyboard]);

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table keyboard sesuai pencarian data
		$keyboard = DB::table('keyboard')
		->where('merkkeyboard','like',"%".$cari."%")
		->paginate();

    		// mengirim data keyboard ke view index
		return view('keyboard.index',['keyboard' => $keyboard]);

	}
    // method untuk menampilkan view form tambah keyboard
    public function tambah()
    {

	// memanggil view tambah
	return view('keyboard.tambah');

    }
    // method untuk insert data ke table keyboard
    public function store(Request $request)
    {
	// insert data ke table keyboard
	DB::table('keyboard')->insert([
		'merkkeyboard' => $request->merkkeyboard,
		'stockkeyboard' => $request->stockkeyboard,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman keyboard
	return redirect('/keyboard');

    }
    // method untuk edit data keyboard
    public function edit($id)
    {
	// mengambil data keyboard berdasarkan id yang dipilih
	$keyboard = DB::table('keyboard')->where('kodekeyboard',$id)->get();
	// passing data keyboard yang didapat ke view edit.blade.php
	return view('keyboard.edit',['keyboard' => $keyboard]);

    }
    // update data keyboard
    public function update(Request $request)
    {
	// update data keyboard
	DB::table('keyboard')->where('kodekeyboard',$request->id)->update([
		'merkkeyboard' => $request->merkkeyboard,
		'stockkeyboard' => $request->stockkeyboard,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman keyboard
	return redirect('/keyboard');
    }
    // method untuk hapus data keyboard
    public function hapus($id)
    {
	// menghapus data keyboard berdasarkan id yang dipilih
	DB::table('keyboard')->where('kodekeyboard',$id)->delete();

	// alihkan halaman ke halaman keyboard
	return redirect('/keyboard');
    }
    public function view($id)
    {
    // mengambil data keyboard berdasarkan id yang dipilih
    $keyboard = DB::table('keyboard')->where('kodekeyboard',$id)->get();
    // passing data keyboard yang didapat ke view edit.blade.php
    return view('keyboard.detail',['keyboard' => $keyboard]);

    }
}
