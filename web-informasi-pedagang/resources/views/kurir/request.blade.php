@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Pedagang</span>
        </nav>
    </div>
    <hr>
    <br>
    <h6>Masukkan Data Diri</h6>
    <b-form @submit="formSubmit" class="row">
        <div class="col col-md-3 ">
            <br>
            <img class="imagePedagang" src="assets/images/author/avatar.jpg" alt="logo">
            <input type="file">
        </div>
        <div class="col col-md-5">
            <div class="form-group">
                <p>Data Diri:</p><br>
                <input type="text" class="col-sm-11 form-control" id="formGroupExampleInput" placeholder="Nama"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" id="formGroupExampleInput"
                       placeholder="Nomor HP"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" id="formGroupExampleInput"
                       placeholder="Nomor WA"><br>
            </div>
            <div>
                <select class="col-sm-11 custom-select">
                    <option selected>Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" id="formGroupExampleInput"
                       placeholder="Jenis Kendaraan"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11  form-control" id="formGroupExampleInput"
                       placeholder="Plat Kendaraan"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11  form-control" id="formGroupExampleInput"
                       placeholder="Status"><br>
            </div>
            <br>
            <a href="#">
                <b-button variant="success">Kirim Request</b-button>
            </a>
        </div>

        <div class="col col-md-4">
            <div>
                <p>Alamat:</p><br>
                <select class="col-sm-6 custom-select ">
                    <option selected>Kabupaten</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3">Tapanuli Utara</option>
                </select>
            </div>
            <br>
            <div>
                <select class="col-sm-6 custom-select ">
                    <option selected>Kecamatan</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3">Tapanuli Utara</option>
                </select>
            </div>
            <br>
            <div>
                <select class="col-sm-6 custom-select ">
                    <option selected class="form-control">Kelurahan</option>
                    <option value="1">Toba</option>
                    <option value="2">Samosir</option>
                    <option value="3" class="form-control">Tapanuli Utara</option>
                    <br>
                </select><br><br>
            </div>
    </b-form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                test: 'data',
            }
        },
        methods: {
            formSubmit(e) {

            }
        },
    })
</script>

@endsection
