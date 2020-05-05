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
				<button type="button" class="btn btn-primary">Edit</button>
				<button type="button" class="btn btn-danger">Hapus</button>
			</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
<div class="jarak">
<label for="" class="tulisanDataDiri">Produk</label>
<div>
	<table class="table table-hover">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Nama Produk</th>
			<th scope="col">Kategori</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Andaliman</td>
			<td>Rempah</td>
			<td>
				<button type="button" class="btn btn-primary">Edit</button>
				<button type="button" class="btn btn-danger">Hapus</button>
			</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
@endsection

