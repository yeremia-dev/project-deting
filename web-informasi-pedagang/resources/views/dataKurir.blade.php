@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>

{{--    <div class="cup">--}}
{{--        @if(session('sukses'))--}}
{{--            <div class="alert alert-success" role="alert">--}}
{{--                {{session('sukses')}}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <label for="" class="labelText">Angk.AE</label>--}}
{{--    <div class="col-md-12 kurirBox">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4">--}}
{{--                <form method="POST" action="{{ route('createkurir') }}" enctype="multipart/form-data">--}}
{{--                {{csrf_field()}}--}}
{{--                <label for="" class="labelText">INFORMASI KURIR</label>--}}
{{--            <!-- <img class="imgProfile" src="assets/images/author/avatar.png" alt="logo"> -->--}}
{{--            <input type="file" name="foto_kurir">--}}
{{--            <label for="" class="fotoKurir">Foto Kurir</label>--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <table class="table">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Nama Lengkap</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th><input type="text" name="nama_kurir" class="form-control" value=""></th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>Alamat Kurir</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th>--}}
{{--                        <textarea name="alamat_kurir" id="" cols="30" rows="10" class="form-control textarea"></textarea>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>No Hp/WA</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th><input type="text" name="nomor_telepon" class="form-control inputForm" value=""></th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>Nomor KTP</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th><input type="text" name="nomor_ktp" class="form-control" value=""></th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>Status</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th><input name="status" type="text" class="form-control"></th>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                    <th>Jenis kelamin</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th>--}}
{{--                            <select class="form-control option" name="jenis_kelamin" value="jenis_kelamin">--}}
{{--                                    <option name="jenis_kelamin" value="">--Pilih--</option>--}}
{{--                                  <option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>--}}
{{--                                  <option name="jenis_kelamin" value="Perempuan">Perempuan</option>--}}
{{--                            </select>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>Jenis Kendaraan</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th>--}}
{{--                            <select class="form-control option" name="jenis_kendaraan" value="jenis_kendaraan">--}}
{{--                                  <option name="" value="male">--Pilih--</option>--}}
{{--                                  <option name="jenis_kendaraan" value="Sepeda Motor">Sepeda Motor</option>--}}
{{--                                  <option name="jenis_kendaraan" value="Becak">Becak</option>--}}
{{--                                  <option name="jenis_kendaraan" value="Mobil">Mobil</option>--}}
{{--                            </select>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th>Nomor Kendaraan</th>--}}
{{--                        <th>:</th>--}}
{{--                        <th><input name="nomor_kendaraan" type="text" class="form-control"></th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--            </table>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <div class="col-md-12">--}}

{{--            <label for="" class="infoTambahan">Infomasi Tambahan</label>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label>Foto KTP</label>--}}
{{--                    <input type="file" name="foto_ktp">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label>Foto STNK</label>--}}
{{--                    <input type="file" name="foto_stnk">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <label>Foto SIM</label>--}}
{{--                    <input type="file" name="foto_SIM">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 buttonKirim">--}}
{{--                        <button class="btn btn-outline-primary btn-sm btn-block">Kirim</button>--}}
{{--                        {!!csrf_field()!!}--}}
{{--                    </div>--}}

<div class="cup">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
    <label for="" class="labelText">Angk.AE</label>
<div class="col-md-12 kurirBox">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="dataKurir/create" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="" class="labelText">INFORMASI KURIR</label>
        <!-- <img class="imgProfile" src="assets/images/author/avatar.png" alt="logo"> -->
        <input type="file" name="foto_kurir">
        <label for="" class="fotoKurir">Foto Kurir</label>
        </div>
        <div class="col-md-8">
            <table class="table">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>:</th>
                    <th><input type="text" name="nama_kurir" class="form-control" value=""></th>
                </tr>
                <tr>
                    <th>Alamat Kurir</th>
                    <th>:</th>
                    <th>
                    <textarea name="alamat_kurir" id="" cols="30" rows="10" class="form-control textarea"></textarea>
                    </th>
                </tr>
                <tr>
                    <th>No Hp/WA</th>
                    <th>:</th>
                    <th><input type="text" name="nomor_telepon" class="form-control inputForm" value=""></th>
                </tr>
                <tr>
                    <th>Nomor KTP</th>
                    <th>:</th>
                    <th><input type="text" name="nomor_ktp" class="form-control" value=""></th>
                </tr>
                <!-- <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><input name="status" type="text" class="form-control"></th>
                </tr> -->

                <tr>
                <th>Jenis kelamin</th>
                    <th>:</th>
                    <th>
                        <select class="form-control option" name="jenis_kelamin" value="jenis_kelamin">
                                <option name="jenis_kelamin" value="">--Pilih--</option>
                                <option name="jenis_kelamin" value="Laki-Laki">Laki-Laki</option>
                                <option name="jenis_kelamin" value="Perempuan">Perempuan</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Jenis Kendaraan</th>
                    <th>:</th>
                    <th>
                        <select class="form-control option" name="jenis_kendaraan" value="jenis_kendaraan">
                                <option name="" value="male">--Pilih--</option>
                                <option name="jenis_kendaraan" value="Sepeda Motor">Sepeda Motor</option>
                                <option name="jenis_kendaraan" value="Becak">Becak</option>
                                <option name="jenis_kendaraan" value="Mobil">Mobil</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Nomor Kendaraan</th>
                    <th>:</th>
                    <th><input name="nomor_kendaraan" type="text" class="form-control"></th>
                </tr>
            </thead>
        </table>
        </div>
    </div>

</div>
<div class="col-md-12">

        <label for="" class="infoTambahan">Infomasi Tambahan</label>
            <div class="row">
                <div class="col-md-3">
                    <label>Foto KTP</label>
                <input type="file" name="foto_ktp">
                </div>
                <div class="col-md-3">
                    <label>Foto STNK</label>
                <input type="file" name="foto_stnk">
                </div>
                <div class="col-md-3">
                    <label>Foto SIM</label>
                <input type="file" name="foto_SIM">
                </div>
                <div class="col-md-3 buttonKirim">
                    <button class="btn btn-outline-primary btn-sm btn-block">Kirim</button>
                    {!!csrf_field()!!}
                </div>
            </div>
    </div>
</div>
</form>
</body>
</html>
@endsection
