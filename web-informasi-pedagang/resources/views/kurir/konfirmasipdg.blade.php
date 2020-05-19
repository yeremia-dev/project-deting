@extends('layouts.master')
@section('content')
    <div id="app">
        <div class="container">
            <nav class="navbar navbar-secondary bg-light">
                <span class="navbar-brand mb-0 h1">Request Informasi Pedagang</span>
            </nav>
        </div>
        <br>
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nama Pedagang</th>
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
                    <td>@{{request.nama}}</td>
                    <td>@{{request.no_hp}}</td>
                    <td>@{{request.no_wa}}</td>
                    <td>@{{request.alamat_rinci}}</td>
                    <td>
                        <a :href="'/kurir/viewproduk/'+request.id" class="btn btn-secondary">View</a>
                        {{--                        <a class="btn secondary" href="#" role="button">View</a>--}}
                    </td>
                    <td><a class="btn btn-primary" href="#" @click="terima(request.id)" role="button">Terima</a></td>
                    <td><a class="btn btn-danger" href="#"  @click="tolak(request.id)" role="button">Tolak</a></td>
                    <td v-if="request.status==2">Diterima</td>
                    <td v-if="request.status==1">Menunggu Konfirmasi</td>
                    <td v-if="request.status==0">Ditolak</td>
                </tr>
                </tbody>
            </table>
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
                        .then(response => {
                            console.log(response)
                        })
                    .then(
                        window.location.href = '/kurir/konfirmasipdg'
                    )
                },
                tolak(value) {
                    axios.get("/api/pedagangTolak/" + value)
                        .then(response => {
                            console.log(response)
                        })
                    .then(
                        window.location.href = '/kurir/konfirmasipdg'
                    )
                }
            }
        })
    </script>
@endsection
