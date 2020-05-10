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
	<form method="POST"  action="{{ url('/pedagang/store') }}" enctype="multipart/form-data">
		@csrf
		<div class="form-group" >
		<div class="pading">
			<input type="text" class="form-control"  id="nama" placeholder="Nama Produk" name="nama_produk">
		</div>
		<div class="pading">
			<input type="number" class="form-control"  id="nama" placeholder="Harga Produk" name="harga_produk">
		</div>
		<div class="form-group">
		<div class="pading">
			<select class="form-control" id="exampleFormControlSelect1" placeholder="test" name="kategori">
				<option>Kategori</option>
				<option>Rempah-rempah</option>
				<option>obat</option>
			</select>
			</div>
		<div class="buttonPedagang">
			<button type="submit" class="btn btn-primary active">Simpan</button>
		</div>
	</form>
</div>


			</td>
			</tr>
		</tbody>
		</table>
	</div>
	<div class="padding ml-3">
		<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
</form>

@endsection