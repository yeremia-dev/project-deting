@extends('layouts.master')
@section('content')
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-grey bg-light">
                <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Pedagang</span>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">

                        </div>
                        <!-- /.card-header -->
                        <form action="#">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="pedagang">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Masukkan Data diri :</h6><br>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" v-model="nama"
                                                                   class="bg-light form-control"
                                                                   id="formGroupExampleInput"
                                                                   placeholder="Nama"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" v-model="no_hp"
                                                                   class="bg-light form-control"
                                                                   id="no_hp"
                                                                   placeholder="Nomor Hp"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <input type="text" v-model="no_wa"
                                                                   class="bg-light form-control"
                                                                   id="no_wa"
                                                                   placeholder="Nomor WA(WhatsApp)"><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6>Alamat:</h6><br>
                                                <div class="row">
                                                    <div class="col">
                                                        <select v-model="kabupaten" class="bg-light custom-select">
                                                            <option value="0" selected>Kabupaten</option>
                                                            <option value="1">Toba</option>
                                                            <option value="2">Samosir</option>
                                                            <option value="3">Tapanuli Utara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <select v-model="kecamatan" class="bg-light custom-select">
                                                            <option value="0" selected>Kecamatan</option>
                                                            <option value="1">Toba</option>
                                                            <option value="2">Samosir</option>
                                                            <option value="3">Tapanuli Utara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <select v-model="kelurahan" class="bg-light custom-select">
                                                            <option value="0" selected>Kelurahan</option>
                                                            <option value="1">Toba</option>
                                                            <option value="2">Samosir</option>
                                                            <option value="3">Tapanuli Utara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <textarea id="alamat_rinci" class="bg-light form-control"
                                                                      v-model="alamat_rinci" cols="30" rows="10"
                                                                      placeholder="Alamat Rinci"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="dagangan">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Masukkan Produk Dagangan</h6><br>
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table bg-light">
                                                            <thead class="thead-light">
                                                            <tr>
                                                                <th scope="col">Nama Produk</th>
                                                                <th scope="col">Kategori</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><i>Contoh: <br>Daging Ayam Potong</i></td>
                                                                <td><i>Kategori</i></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr v-for="row in rows">
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="text" v-model="row.nama_produk"
                                                                               class="bg-light form-control"
                                                                               id="formGroupExampleInput"
                                                                               placeholder="Nama Produk"><br>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <select v-model="row.kategori" class="bg-light custom-select">
                                                                        <option value="0" selected>Kabupaten</option>
                                                                        <option value="1">Toba</option>
                                                                        <option value="2">Samosir</option>
                                                                        <option value="3">Tapanuli Utara</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <button @click="deleteRow(row)" class="btn btn-danger">
                                                                        X
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <button @click="addRow" class="btn btn-primary">
                                                                        <span class="fa fa-plus"></span> Tambah Produk
                                                                    </button>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#pedagang"
                                                            data-toggle="tab" hidden>Data Pedagang</a></li>
                                    <li class="nav-item"><a class="nav-link btn-primary" v-show="!selanjutnya"
                                                            v-on:click="selanjutnya=true" href="#dagangan"
                                                            data-toggle="tab">Selanjutnya</a></li>
                                </ul>
                                <center>
                                    <button class="btn btn-md btn-success" v-if="selanjutnya">Kirim Request</button>
                                </center>
                            </div>
                        </form>


                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: function () {
                return {
                    nama: '',
                    alamat_rinci: '',
                    kabupaten: 0,
                    kecamatan: 0,
                    kelurahan: 0,
                    no_hp: '',
                    no_wa: '',
                    foto: '',
                    kode_wilayah: '',
                    selanjutnya: false,
                    rows: [
                        {nama_produk: '', kategori: ''}
                    ]
                }
            },
            methods: {
                formSubmit(e) {
                    alert(this.jenis_kendaraan)
                    axios.get("/kurir/test")
                        .then(response => {
                            alert(response.data)
                        })
                },
                addRow: function () {
                    this.rows.push({nama_produk: '', kategori: ''});
                },
                deleteRow: function (row) {
                    this.rows.$delete(row);
                }
            },
        })
    </script>
@endsection
