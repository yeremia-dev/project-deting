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
                <input type="text" class="col-sm-11 form-control" v-model="nama_kurir" id="namakurir" placeholder="Nama Kurir"><br>
            </div>
            <div class="form-group">
                <input type="text" v-model="alamat_kurir" class="col-sm-11 form-control" id="formGroupExampleInput"
                       placeholder="Alamat Kurir"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" v-model="nomor_telepon" id="nomorTelepon"
                       placeholder="Nomor Telepon"><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" v-model="nomor_ktp" id="nomorKTP"
                       placeholder="Nomor KTP"><br>
            </div>
            <div>
                <select class="col-sm-11 custom-select" v-model="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <br>
            <br>

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
                <b-button @click="formSubmit" variant="success">Kirim Request</b-button>
            </a>
            <br><br><br><br>
        </div>
        <br>
        <div class="col col-md-4" style="">
            <p>Data Kendaraan</p>
            <div class="form-group">
                <br>
                <input type="text" class="col-sm-11 form-control" v-model="nomor_kendaraan" id="platNomor"
                       placeholder="Nomor Kendaraan"><br>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Jenis Kendaraan : </p>
                </div>
                <div  style="margin-top: -2px" class="col-md-7">
                    <br>
                    <select class="col-sm-11 custom-select" v-model="jenis_kendaraan">
                        <option value="rodaDua">Roda Dua (2)</option>
                        <option value="rodaTiga">Roda Dua (3)</option>
                        <option value="rodaEmpat">Roda Dua (4)</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Foto KTP : </p>
                </div>
                <div class="col-md-7">
                    <input type="file" class="col-sm-11 form-control" v-model="foto_ktp" id="fotoKTP"
                           placeholder="Foto KTP"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Foto STNK : </p>
                </div>
                <div class="col-md-7">
                    <input type="file" class="col-sm-11 form-control" v-model="foto_stnk" id="fotoSTNK"
                           placeholder="foto stnk"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Foto SIM : </p>
                </div>
                <div class="col-md-7">
                    <input type="file" class="col-sm-11 form-control" v-model="foto_SIM" id="fotoSIM"
                           placeholder="foto SIM"><br>
                </div>
            </div>
    </b-form>
</div>
<br>
    <div id="googleMap" style="width:100%;height:380px;"></div>


</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    // variabel global marker
    var marker;

    function taruhMarker(peta, posisiTitik){

        if( marker ){
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
        }
        this.latitude=posisiTitik.lat();
        this.longtitude=posisiTitik.lng();
        console.log("Posisi marker: " + posisiTitik);

    }

    function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });

    }


    // event jendela di-load
    google.maps.event.addDomListener(window, 'load', initialize);


</script>
<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script>
    import axios from 'axios'
    new Vue({
        el: '#app',
        data: function () {
            return {
                test: 'data',
                jenis_kendaraan: '',
                latitude :'',
                longtitude :'',
                nomor_kendaraan:'',
                nama_kurir:'',
                alamat_kurir:'',
                nomor_telepon:'',
                nomor_ktp:'',
                foto_ktp:'',
                foto_stnk:'',
                foto_SIM:'',
                foto_kurir:'',
                jenis_kelamin:'laki-laki',
                status:'1'
            }
        },
        methods: {
            formSubmit(e) {
                alert(this.jenis_kendaraan)
                console.log("test")
                axios.post("API/RequestKurirControllers")
            }
        },
    })
</script>

@endsection
