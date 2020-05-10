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
			<th scope="col">Nomor HP</th>
			<th scope="col">Nomor WA</th>
			<th scope="col">Alamat</th>
			<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedagangs as $pedagang)
			<tr>
			<td>{{ $pedagang->id  }}</td>
			<td>{{  $pedagang->nama  }}</td>			
			<td>{{ $pedagang->no_hp }}</td>
			<td>{{ $pedagang->no_wa }}</td>
			<td>{{ $pedagang->alamat }}</td>
			<td>			
			<a href="{{ url('pedagang/produk', $pedagang->id) }}"><button type="button" class="btn btn-primary">Detail</button></a>
			<a href="{{ url('pedagangs/editInfo', $pedagang->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>			
			<form method="POST" action="{{ url('/pedagang/delete', $pedagang->id) }}" enctype="multipart/form-data">
			@csrf
			<button type="submit" class="btn btn-danger">Hapus</button>
			<form>					
			</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
@endsection

