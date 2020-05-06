@extends('layouts.master')

@section('title')
	<title>Aduan</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <br>
                        <h4 class="text-center">Form Pengaduan</h4>
                    </div>                   
                </div>
            </div>
        </div>
        <br>
 <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                                <form>
                                    <div class="form-group">
                                        <label for="sel1">Keluhan Kepada</label>
                                        <select class="form-control" id="Keluhan Kepada">
                                            <option>-</option>
                                            <option>Pedagang</option>
                                            <option>Kurir</option>
                                        </select>
                                    </div>
                                </form>
                                 <div class="form-group">
                                    <label for="nama_budaya">Nama Pengadu</label>
                                    <input type="text" name="nama_budaya" class="form-control {{ $errors->has('nama_budaya') ? 'is-invalid':'' }}" id="nama_budaya" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_budaya">Email Pengadu</label>
                                    <input type="text" name="nama_budaya" class="form-control {{ $errors->has('nama_budaya') ? 'is-invalid':'' }}" id="nama_budaya" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_budaya">Nomor Telepon</label>
                                    <input type="text" name="nama_budaya" class="form-control {{ $errors->has('nama_budaya') ? 'is-invalid':'' }}" id="nama_budaya" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_budaya">Lokasi</label>
                                    <input type="text" name="nama_budaya" class="form-control {{ $errors->has('nama_budaya') ? 'is-invalid':'' }}" id="nama_budaya" required>
                                </div>                               
                                <div class="form-group">
                                    <label for="foto">Foto Bukti Aduan</label>
                                    <input type="file" name="foto" id="foto" class="form-control {{ $errors->has('foto') ? 'is-invalid':'' }}" required="">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="lokasi">Isi Aduan</label>
                                    <textarea name="lokasi" id="lokasi" cols="20" rows="20" class="form-control {{ $errors->has('lokasi') ? 'is-invalid':'' }}" required=""></textarea>
                                </div>
                                 <div class="align-self-end ml-auto">
                                    <button class="btn btn-primary" style="float:right">Kirim</button>
                                </div>
                            </div>
                    </div>
                </div>
            
        </section>
    </div>
@endsection

