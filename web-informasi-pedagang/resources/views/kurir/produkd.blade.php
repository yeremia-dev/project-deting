@extends('layouts.master')
@section('content')

    <div class="container">
        <nav class="navbar bg-secondary text-white">
            <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Pedagang</span>
        </nav>
    </div><br>
    <h6>Masukkan Produk Dagangan</h6><br>
    <div>
        <select class="col-sm-6 col-custom-select">
            <option selected>Kategori Produk</option>
            <option value="1">Sayuran</option>
            <option value="2">Daging</option>
            <option value="3">Rempah-rempah</option>
        </select>
    </div><br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr class="table-secondary">
            <th scope="col">Nama Produk</th>
            <th scope="col">Satuan</th>
            <th scope="col">Harga</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Daging ayam potong</td>
            <td>1 kg</td>
            <td>Rp.30000</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div><button type="button" class="border border-light">+ tambah produk</button></div><br><br>
    <div><button type="button" class="btn btn-secondary">Kirim request</button></div>

@endsection