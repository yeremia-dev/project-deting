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
<h4>Profil</h4>
<hr>
@if(session('sukses'))
  <div class="alert alert-success" role="alert">
      {{session('sukses')}}
  </div>
@endif
<table class="table table-hover ">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th>
    <th scope="col">Foto</th>
    <th scope="col">Nomor HP/WA</th>
    <th scope="col">Jenis Kelamin</th>
    <th scope="col">Jenis Kendaraan</th>
    <th scope="col">Plat Kendaraan</th>
    <th scope="col">Alamat</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
@foreach($kurir as $k)
  <tr>
    <th scope="row">1</th>
    <td>{{$k->nama_kurir}}</td>
    <td>{{$k->foto_kurir}}</td>
    <td>{{$k->nomor_telepon}}</td>
    <td>{{$k->jenis_kelamin}}</td>
    <td>{{$k->jenis_kendaraan}}</td>
    <td>{{$k->nomor_kendaraan}}</td>
    <td>{{$k->alamat_kurir}}</td>
    <!-- data-toggle="modal" data-target="#editModal" -->
    <td>
      <a href="/dataKurir/{{$k->id_kurir}}/edit" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i>Edit</a>
      <a href="/dataKurir/hapus/{{$k->id_kurir}}"class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i>Delete</a>
    </td>
  </tr>
  @endforeach


  <!-- start edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    
    <div class="modal-body">
    @include('modalForm.editKurir')
  </div>
</div>
</div> 
<!-- end edit modal -->
</tbody>
</table>
</body>
</html>
@endsection
