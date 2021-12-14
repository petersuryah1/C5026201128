@extends('layout.ceria')

@section('isikonten')

	<h2>Peter Surya Hariyanto (5026201128) / PWEB C</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambahkan Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->tugas_idpegawai }}</td>
			<td>{{ $t->tugas_tanggal }}</td>
			<td>{{ $t->tugas_namatugas }}</td>
			<td>{{ $t->tugas_status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
