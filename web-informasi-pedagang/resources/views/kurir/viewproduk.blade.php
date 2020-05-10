@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-secondary">
            <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>
        </nav>
    </div>
    <br>
    <h6>Profil</h6>
    <div class="table-responsive-md">
      <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pedagang	</th>
              <th scope="col">Alamat Rinci</th>
              <th scope="col">Nomor HP</th>
              <th scope="col">Nomor WA</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kelurahan</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Togar</td>
                <td>Jl.lumbanbalian</td>
                <td>089089089</td>
                <td>08227490</td>
                <td>Sigumpar</td>
                <td>Situa-tua</td>
              </tr>
              </tbody>
      </table>
      <br>
      <h6>Produk</h6>
      <div class="table-responsive-md">
            <table class="table">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Ayam potong</td>
                      <td>Daging</td>
                    </tr>
                </tbody>
            </table><hr><br>
            <div><button type="button" class="btn btn-secondary btn-block">Terima</button></div>
    </div>

@endsection
