@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-secondary">
            <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>
        </nav>
    </div>
    <br>

<div class="table-responsive-md">
  <table class="table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pedagangr</th>
          <th scope="col">Nomor HP</th>
          <th scope="col">Nomor WA</th>
          <th scope="col">Alamat Rinci</th>
          <th scope="col">Aksi</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <th scope="row">1</th>
            <td>gais</td>
            <td>082274906</td>
            <td>089089089</td>
            <td>jl.sitoluama</td>
            <td><a class="btn secondary" href="#" role="button">View</a></td>
            <td>Diterima</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>ojol</td>
            <td>082274906</td>
            <td>089089089</td>
            <td>jl.silimbat</td>
            <td><a class="btn secondary" href="#" role="button">View</a></td>
            <td>Ditolak</td>
          </tr>
          </tbody>
  </table>
</div>

@endsection
