@extends('layout.ceria')

@section('title', 'EDIT TUGAS')

@section('isikonten')

    <h2>Peter Surya Hariyanto (5026201128) / PWEB C</h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->tugas_id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $t->tugas_idpegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="tanggal" value="{{ $t->tugas_tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="namatugas" value="{{ $t->tugas_namatugas }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $t->tugas_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
