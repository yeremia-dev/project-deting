@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Aduan</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Daftar Pengadu </h4>
              @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>Nama Pengadu</th>
                    <th>Email Pengadu</th>
                    <th>Nomor Hp</th>
                    <th>Lokasi</th>
                    <th>Isi</th>
                    <th>Bukti</th>
                    <th>DELETE</th>
                  </thead>
                  <tbody>
                    @foreach ($viewaduan as $row)
                    <tr>
                      <td>{{ $row->nama_pengadu }}</td>
                      <td>{{ $row->email_pengadu }}</td>
                      <td>{{ $row->nomor_telepon }}</td>
                      <td>{{ $row->lokasi }}</td>
                      <td>{{ $row->isi }}</td>
                      <td>{{ $row->foto_buktiAduan }}</td>
                      <td>
                        <form action="/role-delete/{{ $row->id_aduan }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field("DELETE") }}
                          <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection



@section('scripts')

@endsection


