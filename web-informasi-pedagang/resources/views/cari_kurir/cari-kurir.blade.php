@extends('layouts.master')
@section('content')
<div class="jumbutron">
  <div class="row">
    <div class="col-8">
      <!-- untuk emnu kategori kurir -->
      <h2 class=" mt-5 mb-3">KATEGORI KURIR</h2>
        <div class="row">
          <div class="col-4 mb-5">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <hr>
              <div class="card-body">
                <h5 class="card-title text-center">Angkutan</h5>
              </div>
            </div>
          </div>
          <div class="col-4 mb-5">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <hr>
              <div class="card-body">
                <h5 class="card-title text-center">Motor</h5>
              </div>
            </div>
          </div>
          <div class="col-4 mb-5">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <hr>
              <div class="card-body text-center ">
                <h5 class="card-title">Becak</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- end kategroi kurir -->
        <hr>
        <h5 class="mb-5">Kategori Kurir</h5>
        <!-- daftar kurir -->
        
        <!-- end daftar kurir -->
    </div>

    <div class="col-3 mt-5 ml-5" style="background-color: #A9A9A9;">
      <h5 class="mt-3">Cari Berdasarkan:</h5>
      <a href="/kurir-terdekat"><button type="button" class="btn btn-info btn-block mt-5" >Lokasi Terdekat</button></a>
      
      <h5 class="mt-5 mb-1">Lokasi</h5>
      <form action="/search-kurir" method="post">
        @csrf
         <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="provinsi" required>
            <option>Provinsi</option>
            @foreach($wilayahs as $wilayah)
              <option value="{{$wilayah->kode}}">{{ $wilayah->nama}}</option>
            @endforeach  
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="kabupaten" required>
            <option>Kabupaten</option>
            @foreach($wilayahs as $wilayah)
              <option value="{{$wilayah->kode}}">{{ $wilayah->nama}}</option>
            @endforeach 
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="kecamatan" required>
            <option>Kecamatan</option>
            @foreach($wilayahs as $wilayah)
              <option value="{{$wilayah->kode}}">{{ $wilayah->nama}}</option>
            @endforeach 
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="kelurahan" required>
            <option>Kelurahan</option>
            @foreach($wilayahs as $wilayah)
              <option value="{{$wilayah->kode}}">{{ $wilayah->nama}}</option>
            @endforeach 
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block" >Cari Kurir</button>
      </form>

    </div>
  </div>
</div>
@endsection
