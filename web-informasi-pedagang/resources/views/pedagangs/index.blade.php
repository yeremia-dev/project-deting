@extends('layouts.master')
@section('content')
<label for="" class="tulisan">Toko A</label>
<body>
    <div class="cup">  
		<div class="col-md-12 kurirBox">
			<label for="" class="tulisanInfo">INFORMASI PEDAGANG</label>	
			<div class="row">
				<div class="col-md-4">
					<img class="imagePedagang" src="{{ asset('assets/images/author/profil.jpg') }}" alt="logo">
					<label for="" class="tulisanFoto">Foto Pedagang</label>
					</div>
				<div class="col-md-8" > 
					<table class="table" >
						<thead class="tulisanDataDiri">
							<tr >
								<th >Nama</th>
								<th>:</th>
								<th>Sanny Sinaga</th>
							</tr>
							<tr>
								<th>No Hp/WA</th>
								<th>:</th>
								<th>08745043504350437</th>
							</tr>
							<tr>
								<th>Alamat</th>
								<th>:</th>
								<th>Laguboti</th>
							</tr>
						</thead>
					</table>
				</div>
			</div> 	
		</div>

	</div>
	<div class="col-md-12" >
		<div class="jarak">
			<div class="search-box pull-left" >
				<form action="#">
					<input type="text" name="search" placeholder="cari(nama barang)" required>
					<i class="ti-search"></i>
				</form>
			</div>
			<label for="" class="tulisanBarangDagangan">Dagangan</label>	
		</div>
			<table class="table" >
				<thead>
					<tr>
						<td>nama</td>
						<td class="trcenter">kategori</td>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $dat)					
					<tr>
					<td>{{ $dat->nama_produk }}</td>
					<td class="trcenter">{{ $dat->kategori }}</td>
					</tr>					
					@endforeach
				</tbody>
			</table>
	</div>
</body>
@endsection

