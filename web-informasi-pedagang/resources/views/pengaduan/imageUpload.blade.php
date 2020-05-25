@extends('layouts.master')

@section('title')
	<title>Request Aduan</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-6">
                    <div class="col-sm-6">
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
                <div class="container">
                    <h1 class="display-4">Upload Kembali Foto Bukti Aduan Anda</h1>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
                <div class="row">
                    <div class="col-md-4">
                        @if ($message = Session::get('success'))
                        {{-- <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div> --}}
                        <img src="images/dataAduan/{{ Session::get('image') }}">
                        @endif
                  
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                  
                        <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                    @csrf
                                    <div>
                                        <input type="file" name="image" class="form-control">                                   
                                    </div>
                            </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                    <button type="submit" class="btn btn-warning"><a href="/">Kembali</a></button>
                                </div>                   
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
