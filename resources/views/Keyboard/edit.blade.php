@extends("layout.ceria")
@section("title", "Edit Keyboard")

@section("isikonten")
<h1>Edit Keyboard</h1>

        <a href="/keyboard " class="btn btn-secondary"> < Kembali</a>

	<br/>

	@foreach($keyboard as $k)
    <form action="/keyboard/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k ->kodekeyboard }}">
        <div class="mb-3">
            <label class="form-label">Merk</label>
            <input type="text" class="form-control" name="merkkeyboard" value="{{ $k->merkkeyboard}}" required="required">
            </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="text" class="form-control" name="stockkeyboard" value="{{ $k->stockkeyboard}}" required="required">
            </div>
            <div class="mb-3">
                <label class="form-label">Tersedia</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="ya" name="tersedia" value="Y" value="{{ $k->tersedia}}"  required>
                    <label class="form-check-label" for="hadir">
                      YA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" id="tidak" name="tersedia" value="X" checked="checked" required>
                    <label class="form-check-label" for="tidak">
                      TIDAK
                    </label>
                  </div>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection
