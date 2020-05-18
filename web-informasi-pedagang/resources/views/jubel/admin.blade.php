@extends('layouts.master')
@section('content')
    <h1>Selamat datang {{ \Illuminate\Support\Facades\Auth::user()->name }}</h1>
@endsection
