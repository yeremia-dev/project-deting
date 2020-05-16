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
		<?php $i=1; ?>
			@foreach($pedagangs as $pedagang)

			<tr>
			<td>{{ $i  }}</td>
			<td>{{  $pedagang->nama  }}</td>			
			<td>{{ $pedagang->no_hp }}</td>
			<td>{{ $pedagang->no_wa }}</td>
			<td>{{ $pedagang->alamat }}</td>
			<td>
				<div class="row">

					<div class="col-md-4"><a href="{{ url('pedagang/produk', $pedagang->id) }}"><button type="button" class="btn btn-primary">Detail</button></a></div>
					<div class="col-md-4"><a href="{{ url('pedagangs/editInfo?id='. $pedagang->id) }}"><button type="button" class="btn btn-primary">Edit</button></a></div>
					<div class="col-md-4"><a href="{{ url('pedagang/delete', $pedagang->id) }}"><button type="button" class="btn btn-danger">Hapus</button></a></div>
				</div>
			</div>							
			</td>
			</tr>
			<?php $i++ ?>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
@endsection

