@extends("layout.ceria")
@section("title", "Tabel Keyboard")

@section("isikonten")

    <h1>Tabel Keyboard</h1>

    <a href="/keyboard/tambah" class="btn btn-primary"> + Tambah Keyboard Baru</a>


	<form class="mt-3" action="/keyboard/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Keyboard .." value="{{ old('cari') }}">
		<input type="submit"  class="btn btn-primary" value="GO">


	<br/>
	<br/>

	<table border="1" class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Merk</th>
			<th>Tersedia</th>
			<th>Opsi</th>

		</tr>
		@foreach($keyboard as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $s->merkkeyboard }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
				<a href="/keyboard/edit/{{ $s->kodekeyboard}} " class="btn btn-warning">Edit</a>
				<a href="/keyboard/hapus/{{ $s->kodekeyboard}}" class="btn btn-danger">Hapus</a>
                <a href="/keyboard/detail/{{ $s->kodekeyboard}}" class="btn btn-success">View Detail</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>

	{{ $keyboard->links() }}
@endsection
