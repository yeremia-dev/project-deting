@extends('layouts.master')
@section('content')
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-grey bg-secondary">
                <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>
            </nav>
        </div>
        <br>
        <h6>Profil</h6>
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pedagang</th>
                    <th scope="col">Alamat Rinci</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Nomor WA</th>
                    <th scope="col">Kecamatan</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                    <th scope="row" >@{{ pedagang.id }}</th>
                    <td>@{{ pedagang.nama }}</td>
                    <td>@{{ pedagang.alamat_rinci }}</td>
                    <td>@{{ pedagang.no_hp }}</td>
                    <td>@{{ pedagang.no_wa }}</td>
                    <td>@{{ pedagang.alamat }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <h6>Produk</h6>
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="produk in produk"
                    :key="produk.id">
                    <th scope="row">1</th>
                    <td>@{{ produk.nama_produk }}</td>
                    <td>@{{ produk.kategori }}</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <br>
            <div>
                <button type="button" class="btn btn-secondary btn-block" href="#" @click="terima" role="button">Terima</button>
                <button type="button" class="border-dark btn btn-light btn-block" href="#" @click="tolak" role="button">Tolak</button>
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
                    pedagang: [],
                    produk: []
                }
            },
            async mounted() {
                var id = window.location.href.split('/').pop();
                const response = axios.get("/api/pedagang/find/" + id)
                    .then(response => {
                        this.pedagang = response.data
                        console.log(response.data)
                    });
                const response2 = axios.get("/api/pedagang/find/produk/" + id)
                    .then(response => {
                        this.produk = response.data
                        console.log(response.data)
                    });
            },
            methods: {
                terima() {
                    var id = window.location.href.split('/').pop();
                    axios.get("/api/pedagangTerima/" + id)
                        .then(
                            window.location.href = '/kurir/konfirmasipdg/'
                        )
                },
                tolak() {
                    var id = window.location.href.split('/').pop();
                    axios.get("/api/pedagangTolak/" + id)
                        .then(
                            window.location.href = '/kurir/konfirmasipdg'
                        )
                }
            }
        })
    </script>
@endsection
