@extends('layouts.master')
@section('content')
<label for="" class="tulisan">Informasi Pedagang</label>
<body>
    <div class="cup">  
		<div class="col-md-12 kurirBox">
			<label for="" class="tulisanInfo">Data Pedagang</label>	
			<div class="row">
				<div class="col-md-4">
					<img class="imagePedagang" src="{{ asset('assets/images/author/profil.jpg') }}" alt="logo">
					<label for="" class="tulisanFoto">Foto Pedagang</label>
					</div>
				<div class="col-md-8" > 
					<table class="table" >
						<thead class="tulisanDataDiri">
							<tr >
								<th >Nama Pedagang</th>
								<th>:</th>
								<th>Sanny Sinaga</th>
							</tr>
							<tr>
								<th>No WA</th>
								<th>:</th>
								<th>08745043504350437</th>
							</tr>
							<tr>
								<th>No WA</th>
								<th>:</th>
								<th>08745043504350437</th>
							</tr>
							<tr>
								<th>Alamat</th>
								<th>:</th>
								<th>Laguboti</th>
							</tr>
							<tr>
								<th>Alamat Rinci</th>
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
			<label for="" class="tulisanBarangDagangan">Daftar Produk</label>	
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
			
			<tr>
			<th scope="row">1</th>
			<td>TEs</td>
			<td>yes </td>
		
		</tbody>
	</table>
	</div>
	</div>
</body>
@endsection

