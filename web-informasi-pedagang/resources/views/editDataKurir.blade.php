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
  <div class="col-md-12">
  <h3>Update Data kurir</h3>
  @foreach($data as $d)
  
  <form method="post" action="/dataKurir/{{$d->id_kurir}}/update" enctype="multipart/form-data">
  {{csrf_field()}}
  
    <label for="">Nama</label>
    <input type="text"name="nama_kurir" class="form-control" value="{{$d->nama_kurir}}">
    <label for="">Alamat</label>
    <textarea name="alamat_kurir" id="" cols="30" class="form-control"rows="3">{{$d->alamat_kurir}}</textarea>
    <label for="">Nomor Telepon</label>
    <input type="text" name="nomor_telepon" class="form-control"value="{{$d->nomor_telepon}}">
    <label for="">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="" class="form-control">
      <option name="jenis_kelamin"  value="Laki-Laki" @if($d->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
      <option name="jenis_kelamin"  value="Perempuan" @if($d->jenis_kelamin == 'P') selected @endif>Perempuan</option>
    </select>
    <label for="">Jenis Kendaraan</label>
    <select name="jenis_kendaraan" id="" class="form-control" value="{{$d->jenis_kendaraan}}">
      <option name="jenis_kendaraan" value="Sepeda Motor" @if($d->jenis_kendaraan == 'S') selected @endif>Sepeda Motor</option>
      <option name="jenis_kendaraan" value="Mobil" @if($d->jenis_kendaraan == 'M') selected @endif>Mobil</option>
      <option name="jenis_kendaraan" value="Becak" @if($d->jenis_kendaraan == 'B') selected @endif>Becak</option>
    </select>
    <label for="">Plat Kendaraan</label>
    <input type="text" name="nomor_kendaraan" class="form-control"value="{{$d->nomor_kendaraan}}">
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    @endforeach
  </form>
  </div>
</body>
</html>
@endsection
