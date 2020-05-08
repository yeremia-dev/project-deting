@extends('layouts.master')

@section('title')
	<title>Request Aduan</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <br>
                        <h4 class="text-center">Form Pengaduan</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>                   
                </div>
            </div>
        </div>
        <br>
 <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                                <form action="/save-aduan" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="sel1">Keluhan Kepada</label>
                                        <select class="form-control" id="Keluhan Kepada">
                                            <option>-</option>
                                            <option>Pedagang</option>
                                            <option>Kurir</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_budaya" class="col_form-label">Nama Pengadu</label>
                                        <input type="text" name="nama_pengadu" class="form-control" id="nama_budaya">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_budaya" class="col_form-label">Email Pengadu</label>
                                        <input type="text" name="email_pengadu" class="form-control" id="nama_budaya">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_budaya" class="col_form-label">Nomor Telepon</label>
                                        <input type="text" name="nomor_telepon" class="form-control" id="nama_budaya">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_budaya" class="col_form-label">Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control" id="nama_budaya">
                                    </div>                               
                                        <div class="form-group">
                                        <label for="nama_budaya" class="col_form-label">Foto Bukti Aduan</label>
                                        <input type="file" name="foto_buktiAduan" id="foto" class="form-control" id="nama_budaya">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="nama_budaya" class="col-form-label">Isi Aduan</label>
                                        <textarea name="isi" cols="20" rows="20" class="form-control" id="nama_budaya"></textarea>
                                    </div>
                                    <div class="align-self-end ml-auto">
                                    <button class="btn btn-primary" style="float:right">Kirim</button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            
        </section>
    </div>
@endsection

