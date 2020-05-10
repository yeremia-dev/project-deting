@extends('layouts.master')
@section('content')
<div class="jarak">
	<div class="cup" >
		<label for="" class="tulisanDataPedagang">List Pedagang</label>
	</div>
</div>
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
			<td>1</td>
			<td>Sanny Naomi Sinaga</td>
			<td>sanny.jpg</td>
			<td>08324324423</td>
			<td>@08324324423</td>
			<td>Laguboti</td>
			<td>
			<a href="{{ asset('/pedagangs/detailPedagang') }}"><button type="button" class="btn btn-primary">Detail</button></a>
			<a href="{{ asset('/pedagangs/detailPedagang') }}"><button type="button" class="btn btn-primary">Edit</button></a>
			</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>
@endsection

