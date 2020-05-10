@extends('layouts.master')
@section('content')
<div class="jarak">
<div class="cup" >
	<label for="" class="tulisanDataPedagang">Form Mendaftar Informasi Pedagang</label>
</div>
</div>	
<div class="jarak">
	<label for="" class="tulisanDataDiri">Profil</label>
	<div>
	<table class="table table-hover">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nama</th>
			<th scope="col">Foto</th>
			<th scope="col">Nomor HP</th>
			<th scope="col">Nomor WA</th>
			<th scope="col">Alamat</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Sanny Naomi Sinaga</td>
			<td>sanny.jpg</td>
			<td>08324324423</td>
			<td>@08324324423</td>
			<td>Laguboti</td>
			<td>
			<a href="{{ asset('/pedagangs/editPedagang') }}"><button type="button" class="btn btn-primary">Edit</button></a>
			</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
<div class="jarak">
<label for="" class="tulisanDataDiri">Produk</label>
<div>
	<!-- <a href="{{ asset('/pedagangs/tambahProduk') }}">	<button type="button" class="btn btn-primary">Tambah Produk</button></a> -->
	</div>
<div>
	<table class="table table-hover">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Produk</th>
			<th scope="col">Kategori</th>
			<!-- <th scope="col">Harga</th>
			<th scope="col">Action</th> -->
			</tr>
		</thead>
		<tbody>
			@foreach($data as $datas)
			<tr>
			<th scope="row">1</th>
			<td>{{ $datas->nama_produk }}</td>
			<td>{{ $datas->kategori}} </td>
			<!-- <td>{{ $datas->harga}} </td> -->
			<!-- <td>
				<a href="{{ url('/pedagangs/editProduk', $datas->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>				
				<form method="POST"  action="{{ url('/produk/delete', $datas->id) }}" enctype="multipart/form-data">
					@csrf
					<button type="submit" class="btn btn-danger">Hapus</button>
				</form>
			</td> -->
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
@endsection

