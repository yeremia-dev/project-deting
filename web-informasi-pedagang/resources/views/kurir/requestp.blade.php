@extends('layouts.master')
@section('content')
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Pedagang</span>
        </nav>
    </div><br>

    <form>
        <h6>Masukkan Data diri</h6><br>
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
            <h6>Alamat:</h6><br>
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
            <a href="#"><button type="button" class="btn btn-secondary btn-sm">Berikutnya</button></a>
        </div>
    </form>


@endsection
