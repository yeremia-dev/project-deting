@extends('layouts.master')
@section('content')
<div class="jarak">
	<div class="cup" >
		<label for="" class="tulisanDataPedagang">Tambah Pedagang</label>
	</div>
</div>	
<div>
	<label for="" class="tulisanDataDiri">Edit Produk</label>
</div>
<div>
	<form method="POST" action="{{ url('/pedagangs/updateProduk', $data->id) }}" enctype="multipart/form-data">
		@csrf
		<div class="form-group" >
		<div class="pading">
		<input type="text" class="form-control"  id="nama" placeholder="Nama Produk" name="nama_produk" value="{{ $data->nama_produk}}"> 
		</div>
		<!-- <div class="pading">
		<input type="email" class="form-control"  id="nama" placeholder="Harga Produk">
		</div> -->
		<div class="form-group">
		<div class="pading">
			<select name="kategori" class="form-control" id="exampleFormControlSelect1" placeholder="tes">
			<option>{{ $data->kategori}}</option>
			<option>Kategori</option>
			<option>Rempah-rempah</option>
			</select>
			</div>
		<div class="buttonPedagang">
			<button type="submit" class="btn btn-primary active">Simpan</button>
		</div>		
	</form>
</div>
<!-- <div class="buttonPedagang">
<a href="{{ asset('/pedagangs/detailPedagang') }}"><button type="button" class="btn btn-primary active">Simpan</button></a> -->
</div>


@endsection