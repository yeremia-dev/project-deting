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
@php $no = 1; @endphp
@foreach($kurir as $k)
  <tr>
    <th scope="row">{{$no++}}</th>
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
      <!-- <a href="/dataKurir/hapus/{{$k->id_kurir}}" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i>Delete</a> -->
      <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action','/dataKurir/hapus/{{$k->id_kurir}}')" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash"></i>Delete</a>
    </td>
  </tr>
  @endforeach
        <div class="modal fade" id="modalDelete">
              <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              <h5 class="modal-title">Yakin akan menghapus data ini?</h5>
                          </div>
                          <div class="modal-footer">
                              <form id="formDelete" action="" method="get">
                                <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                <button class="btn btn-danger" type="submit">Hapus</button>
                              </form>
                          </div>
                    </div>
              </div>
        </div>

</tbody>
</table>
</body>
</html>
@endsection
