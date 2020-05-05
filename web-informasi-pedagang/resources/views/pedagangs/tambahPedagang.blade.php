@extends('layouts.master')
@section('content')
<div class="jarak">
<div class="cup" >
	<label for="" class="tulisanDataPedagang">Tambah Pedagang</label>
</div>
</div>	
<div>
<label for="" class="tulisanDataDiri">Masukkan Data Diri:</label>
<form>
	
  <div class="form-group" >
	<div class="pading">
	<input type="email" class="form-control"  id="nama" placeholder="Nama">
  </div>
  <div class="pading">
	<input type="email" class="form-control"  id="nama" placeholder="Foto">
  </div>
  <div class="pading">
	<input type="email" class="form-control"  id="nama" placeholder="Nomor HP">
  </div>
  <div class="pading">
	<input type="email" class="form-control"  id="nama" placeholder="Nomor WA">
  </div>
  </div>
  <div class="form-group">
	<label for="exampleFormControlSelect1" class="pading" >Alamat: </label>
	<div class="pading">
		<select class="form-control" id="exampleFormControlSelect1" placeholder="tes">
		<option>Kabupaten</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
 	 </div>
	
	  <div class="pading">
		<select class="form-control" id="exampleFormControlSelect1" placeholder="tes">
		<option>Kecamatan</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
	  </div>
	<div class="pading">
		<select class="form-control" id="exampleFormControlSelect1" placeholder="tes">
		<option>Kelurahan</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		</select>
 	 </div>
    <div class="pading">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan alamat rinci"></textarea>
    </div>
</form>
<div class="buttonPedagang">
<a href="{{ asset('/pedagangs/tambahDagangan') }}"><button type="button" class="btn btn-primary active">BERIKUTNYA</button></a>
</div>
</div>
@endsection

