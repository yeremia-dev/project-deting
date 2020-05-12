@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <!-- untuk emnu kategori kurir -->
      <h2 class=" mt-5 mb-3">KATEGORI KURIR</h2>
      <div class="row row-cols-1 row-cols-md-3">
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
        <h5 class="mb-5">KATEGORI KURIR: ANGKUTAN</h5>
        <!-- daftar kurir -->
        <div class="card" style="width: 18rem;">
          <img src="andi.jpg" alt="..." class="rounded-circle" style="height:150px; width: 150px; margin-left: auto; margin-right :auto; margin-top: 10px">
          <div class="card-body">
            <button type='button' class='btn btn-primary center' style="align-items: center;"> Klik Disini</button>
          </div>
        </div>
        <!-- end daftar kurir -->
    </div>

    <div class="col-3 mt-5 ml-5" style="background-color: #A9A9A9;">
      <h5 class="mt-3">Cari Berdasarkan:</h5>
      <button type="button" class="btn btn-info btn-block mt-5" >Lokasi Terdekat</button>
      
      <h5 class="mt-5 mb-1">Lokasi</h5>
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Provinsi</option>
          <option>2</option>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Kabupaten</option>
          <option>2</option>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Kecamatan</option>
          <option>2</option>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Kelurahan</option>
          <option>2</option>
        </select>
      </div>
      <button type="button" class="btn btn-primary btn-block" >Cari Kurir</button>

    </div>
  </div>
</div>
@endsection
