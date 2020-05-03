@extends('layouts.master')
@section('content')
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Pedagang</span>
        </nav>
    </div><br>
    <h6>Masukkan Data Diri</h6><br>
    <div class="row">
        <div class="col col-md-3">
            <img class="imagePedagang" src="assets/images/author/avatar.jpg" alt="logo">
        </div>
        <div class="col col-md-5">
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Nama"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Nomor HP"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Nomor WA"><br>
            </div>
            <div>
                <select class="col-sm-6 col-custom-select">
                    <option selected>Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div><br>
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Jenis Kendaraan"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Plat Kendaraan"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-6 col-form-control" id="formGroupExampleInput" placeholder="Status"><br>
            </div><br>
            <a href="#"><button type="button" class="btn btn-secondary btn-sm">Kirim Request</button></a>
        </div>

        <div class="col col-md-4">
            <div>
                <p>Alamat:</p><br>
                <select class="col-sm-6 col-custom-select">
                    <option selected>Kabupaten</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3">Tapanuli Utara</option>
                </select>
            </div><br>
            <div>
                <select class="col-sm-6 col-custom-select">
                    <option selected>Kecamatan</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3">Tapanuli Utara</option>
                </select>
            </div><br>
            <div>
                <select class="col-sm-6 col-custom-select">
                    <option selected>Kelurahan</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3">Tapanuli Utara</option>
                </select><br><br>
            </div>
        </div>
    </div>


@endsection
