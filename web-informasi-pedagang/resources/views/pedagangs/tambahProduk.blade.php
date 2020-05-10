@extends('layouts.master')
@section('content')
<div class="jarak">
	<div class="cup" >
		<label for="" class="tulisanDataPedagang">Tambah Pedagang</label>
	</div>
</div>	
<div>
	<label for="" class="tulisanDataDiri">Masukkan Produk</label>
</div>
<form method="POST" action="{{ route('produks.store') }}" enctype="multipart/form-data">
@csrf
	<div class="pading">
		<table class="table">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Produk</th>
			<th scope="col">Kategori</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<input type="text" class="form-control"  id="nama_produk" name="nama_produk" placeholder="Nomor WA">
			</td>
			<td>
			<div class="form-group">
				<select class="form-control" name="kategori" id="kategori" placeholder="tes">
				<option value="">Kategori</option>
				<option value="Rempah-rempah">Rempah-rempah</option>
				<option value="Daging">Daging</option>
				</select>
			</div>

			</td>
			</tr>
		</tbody>
		</table>
	</div>
	<div class="padding ml-3">
		<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
</form>

@endsection