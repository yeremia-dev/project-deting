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
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Nomor HP / WA</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jenis Kendaraan</th>
                <th scope="col">Plat Kendaraan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(request,index) in request"
                :key="request.id">
                <td>@{{ index+1 }}</td>
                <td>@{{request.nama_kurir}}</td>
                <td><img :src="request.foto_kurir" class="img-thumbnail" alt="Cinque Terre" width="100"></td>
                <td>@{{request.nomor_telepon}}</td>
                <td>@{{request.jenis_kelamin}}</td>
                <td>@{{request.jenis_kendaraan}}</td>
                <td>@{{request.nomor_kendaraan}}</td>
                <td>@{{request.alamat_kurir}}</td>
                <td><a class="btn btn-primary" :href="'/kurir/view/'+request.id_kurir" role="button">Detail</a></td>
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
