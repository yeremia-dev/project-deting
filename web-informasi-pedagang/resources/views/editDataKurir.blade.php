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
    <input type="text" class="form-control" value="{{$d->nama_kurir}}">
    <label for="">Alamat</label>
    <textarea name="" id="" cols="30" class="form-control"rows="3">{{$d->alamat_kurir}}</textarea>
    <label for="">Nomor Telepon</label>
    <input type="text" class="form-control"value="{{$d->nomor_telepon}}">
    <label for="">Jenis Kelamin</label>
    <select name="" id="" class="form-control">
      <option value="">Laki-Laki</option>
      <option value="">Perempuan</option>
    </select>
    <label for="">Jenis Kendaraan</label>
    <select name="" id="" class="form-control" value="{{$d->jenis_kendaraan}}">
      <option value="">Sepeda Motor</option>
      <option value="">Mobil</option>
      <option value="">Becak</option>
    </select>
    <label for="">Plat Kendaraan</label>
    <input type="text" class="form-control"value="{{$d->nomor_kendaraan}}">
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    {!!csrf_field()!!} 
    @endforeach
  </form>
  </div>
</body>
</html>
@endsection
