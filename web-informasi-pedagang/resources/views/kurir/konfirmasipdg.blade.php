@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-secondary">
            <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>
        </nav>
    </div>
    <br>

    <div class="table-responsive-md">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Pedagangr</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Nomor WA</th>
                    <th scope="col">Alamat Rinci</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="request in request"
                    :key="request.id">
                    <td>@{{request.nama_pedagang}}</td>
                    <td>@{{request.no_hp}}</td>
                    <td>@{{request.no_wa}}</td>
                    <td>@{{request.alamat_rinci}}</td>
                    <td>
                        <a class="btn secondary" href="#" role="button">View</a>
                    </td>
                    <td><a class="btn btn-primary" href="#" @click="terima(request.id_pedagang)" role="button">Terima</a></td>
                    <td><a class="btn btn-danger" href="#"  @click="tolak(request.id_pedagang)" role="button">Tolak</a></td>
                    <td>Diterima</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        new Vue({
            el: '#app',
            data: function () {
                return {
                    request: []
                }
            },
            async mounted() {
                const response = axios.get("/api/pedagangRequest/")
                    .then(response => {
                        this.request = response.data
                        console.log(response.data)
                    })
            },
            methods: {
                terima(value) {
                    axios.get("/api/pedagangTerima/" + value)
                        .then(
                            window.location.href = '/kurir/konfirmasipdg'
                        )
                },
                tolak(value) {
                    axios.get("/api/pedagangTolak/" + value)
                        .then(
                            window.location.href = '/kurir/konfirmasipdg'
                        )
                }
            }
        })
    </script>
    @endsection
