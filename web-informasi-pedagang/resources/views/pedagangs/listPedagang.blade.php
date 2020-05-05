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
			</tr>
		</tbody>
	</table>
	</div>
</div>
@endsection

