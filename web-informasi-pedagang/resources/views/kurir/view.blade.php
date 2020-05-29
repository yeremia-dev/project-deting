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
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor HP / WA</th>
                    <th scope="col">Nomor KTP</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Plat Kendaraan</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(kurir,index) in kurir"
                    :key="kurir.id">
                    <th scope="row" >@{{ index+1 }}</th>
                    <td>@{{ kurir.nama_kurir }}</td>
                    <td>@{{ kurir.alamat_kurir }}</td>
                    <td>@{{ kurir.nomor_telepon }}</td>
                    <td>@{{ kurir.nomor_ktp }}</td>
                    <td>@{{ kurir.jenis_kelamin }}</td>
                    <td>@{{ kurir.jenis_kendaraan }}</td>
                    <td>@{{ kurir.nomor_kendaraan }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <br>
        <h6>FOTO</h6>
        <div class="table-responsive-md">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Foto KTP</th>
                    <th scope="col">Foto STNK</th>
                    <th scope="col">Foto SIM</th>
                    <th scope="col">Foto Kurir</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="kurir in kurir"
                    :key="kurir.id">
                    <td><img :src="'/public/'+kurir.foto_ktp" class="img-thumbnail" alt="Cinque Terre" width="110"></td>
                    <td><img :src="'/public/'+kurir.foto_stnk" class="img-thumbnail" alt="Cinque Terre" width="110"></td>
                    <td><img :src="'/public/'+kurir.foto_SIM" class="img-thumbnail" alt="Cinque Terre" width="110"></td>
                    <td><img :src="'/public/'+kurir.foto_kurir" class="img-thumbnail" alt="Cinque Terre" width="110"></td>
                </tr>
                </tbody>
            </table>
            <hr>
            <br>
            <div v-for="kurir in kurir"
                 :key="kurir.id">
                <button type="button" class="btn btn-secondary btn-block" href="#" @click="terima(kurir.id_kurir)" role="button">Terima</button>
                <button type="button" class="border-dark btn btn-light btn-block" href="#" @click="tolak(kurir.id_kurir)" role="button">Tolak</button>
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
                    kurir: []
                }
            },
            async mounted() {
                var id = window.location.href.split('/').pop();
                const response = axios.get("/api/kurir/find/" + id)
                    .then(response => {
                        this.kurir = response.data
                        console.log(response.data)
                    });
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
