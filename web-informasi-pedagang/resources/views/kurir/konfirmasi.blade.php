@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-secondary bg-light">
            <span class="navbar-brand mb-0 h1">Request Informasi Kurir</span>
        </nav>
    </div>
    <br>
    <div class="table-responsive-md">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nama Kurir</th>
                <th scope="col">Alamat Rinci</th>
                <th scope="col">nomor telepon</th>
                <th scope="col">Nomor KTP</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Aksi</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="request in request"
                     :key="request.id">
                <td>@{{request.nama_kurir}}</td>
                <td>@{{request.alamat_kurir}}</td>
                <td>@{{request.nomor_telepon}}</td>
                <td>@{{request.nomor_ktp}}</td>
                <td>@{{request.jenis_kelamin}}</td>
                <td>@{{request.nomor_kendaraan}}</td>
                <td>@{{request.jenis_kendaraan}}</td>
                <td><a class="btn btn-primary" href="#" @click="terima(request.id_kurir)" role="button">Terima</a></td>
                <td><a class="btn btn-danger" href="#"  @click="tolak(request.id_kurir)" role="button">Tolak</a></td>
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
                request :[]
            }
        },
        async mounted() {
            const response = axios.get("/api/kurirRequest/")
                .then(response => {
                    this.request = response.data
                    console.log(response.data)
                })
        },
        methods: {
            terima(value){
                axios.get("/api/kurirTerima/"+value)
                    .then(
                        window.location.href='/kurir/konfirmasi'
                    )
            },
            tolak(value){
                axios.get("/api/kurirTolak/"+value)
                    .then(
                        window.location.href='/kurir/konfirmasi'
                    )
            }
        }
    })
</script>

@endsection
