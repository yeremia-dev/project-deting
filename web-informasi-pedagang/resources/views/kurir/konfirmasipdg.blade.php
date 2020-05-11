@extends('layouts.master')
@section('content')
<div id="app">
        <div class="container">
            <nav class="navbar navbar-grey bg-light">
                <h5>Request Informasi Pedagang</h5>
{{--                <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>--}}
            </nav>
        </div>
        <hr>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>Profil</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table bg-light">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nomor Hp</th>
                            <th scope="col">Nomor WA</th>
                            <th scope="col">Alamat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Produk</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table bg-light">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <button class="btn btn-secondary" style="width: 200px">Terima</button>
                </div>
            </div>
        </div>

    </div>

@endsection
