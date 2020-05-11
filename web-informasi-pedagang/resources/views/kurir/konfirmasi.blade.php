@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-secondary">
            <span class="navbar-brand mb-0 h1">Request Informasi Kurir</span>
        </nav>
    </div>
    <br>

<div class="table-responsive-md">
  <table class="table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Kurir</th>
          <th scope="col">Alamat Rinci</th>
          <th scope="col">nomor telepon</th>
          <th scope="col">Nomor KTP</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Nomor Kendaraan</th>
          <th scope="col">Jenis Kendaraan</th>
          <th scope="col">Aksi</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th scope="row">1</th>
            <td>ojol</td>
            <td>jalanjalan</td>
            <td>089089089</td>
            <td>1111</td>
            <td>laki-laki</td>
            <td>BL3713BFF</td>
            <td>roda 3</td>
            <td><a class="btn secondary" href="#" role="button">Terima</a></td>
            <td><a class="btn secondary" href="#" role="button">Tolak</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>ojol</td>
            <td>jalanjalan</td>
            <td>089089089</td>
            <td>1111</td>
            <td>laki-laki</td>
            <td>BL3713BFF</td>
            <td>roda 2</td>
            <td><a class="btn secondary" href="#" role="button">Terima</a></td>
            <td><a class="btn secondary" href="#" role="button">Tolak</a></td>
          </tr>
          </tbody>
  </table>
</div>

@endsection
