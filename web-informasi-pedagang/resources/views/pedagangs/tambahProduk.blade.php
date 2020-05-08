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
<div>
	<form>
		<div class="form-group" >
		<div class="pading">
		<input type="email" class="form-control"  id="nama" placeholder="Nama Produk">
		</div>
		<div class="pading">
		<input type="email" class="form-control"  id="nama" placeholder="Harga Produk">
		</div>
		<div class="form-group">
		<div class="pading">
			<select class="form-control" id="exampleFormControlSelect1" placeholder="tes">
			<option>Kategori</option>
			<option>Rempah-rempah</option>
			</select>
			</div>
	</form>
</div>
<div class="buttonPedagang">
<a href="{{ asset('/pedagangs/detailPedagang') }}"><button type="button" class="btn btn-primary active">Simpan</button></a>
</div>


@endsection