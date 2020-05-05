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
	<table class="table table-hover">
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
			<td>Andaliman</td>
			<td>
			<div class="form-group">
			<select class="form-control" id="exampleFormControlSelect1">
			<option>Kategori</option>
			<option>Rempah</option>
			<option>Telur</option>
			</select>
	</div>
			</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="buttonPedagang">
<a href="{{ asset('/pedagangs/editPagangan') }}"><button type="button" class="btn btn-primary active">DAFTAR</button></a>
</div>
@endsection