@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Request Mendaftar Informasi Kurir</span>
        </nav>
    </div>
    <hr>
    <br>

    <b-form @submit="formSubmit" class="row">
        <div class="col col-md-2 ">

        </div>
        <div class="col col-md-5">
            <h6>Masukkan Data Diri</h6><br><br>
            <br><br>
            <p>Data Diri:</p><br>
            <div class="row form-group">
                <div class="col-md-4">
                    <br>
                    <p>Foto Kurir : </p>
                </div>
                <div class="col-md-7" style="margin-left: 25px">
                    <img :src="foto_kurir" class="img-responsive" height="70" width="90">
                    <input type="file" @change="fotoKurirBtn" class="col-sm-11 form-control" id="fotoKTP"
                           placeholder="Foto KTP" required><br>
                </div>
            </div>
            <div class="form-group">
                <br>

                <input type="text" class="col-sm-11 form-control" v-model="nama_kurir" id="namakurir"
                       placeholder="Nama Kurir" required><br>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <br>
                    <p>Provinsi : </p>
                </div>
                <div style="margin-top: -2px" class="col-md-8">
                    <br>
                    <b-col cols="8" col md="5" lg="11" sm="7">
                        <b-select v-on:change="provinsiBtn" v-model="prov" required>
                            <b-select-option v-for="provinsi in provinsi" :key="provinsi.kode"
                                             v-bind:value="provinsi.kode">@{{provinsi.nama}}
                            </b-select-option>
                        </b-select>
                    </b-col>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <br>
                    <p>Kabupaten/kota : </p>
                </div>
                <div style="margin-top: -2px" class="col-md-8">
                    <br>
                    <b-col cols="8" col md="5" lg="11" sm="7">
                        <b-select v-on:change="kabupatenBtn" v-model="kab" required>
                            <b-select-option v-for="kabupaten in kabupaten" :key="kabupaten.kode"
                                             v-bind:value="kabupaten.kode">@{{kabupaten.nama}}
                            </b-select-option>
                        </b-select>
                    </b-col>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <br>
                    <p>Kecamatan : </p>
                </div>
                <div style="margin-top: -2px" class="col-md-8">
                    <br>
                    <b-col cols="8" col md="5" lg="11" sm="7">
                        <b-select v-on:change="kecamatanBtn" v-model="kec" required>
                            <b-select-option v-for="kecamatan in kecamatan" :key="kecamatan.kode"
                                             v-bind:value="kecamatan.kode">@{{kecamatan.nama}}
                            </b-select-option>
                        </b-select>
                    </b-col>
                </div>
                <!--                <input type="text" v-model="alamat_kurir" class="col-sm-11 form-control" id="formGroupExampleInput"-->
                <!--                       placeholder="Alamat Kurir"><br>-->
            </div>
            <div class="row form-group">
                <div class="col-md-4">
                    <br>
                    <p>Kelurahan : </p>
                </div>
                <div style="margin-top: -2px" class="col-md-8">
                    <br>
                    <b-col cols="8" col md="5" lg="11" sm="7">
                        <b-select  v-on:change="kelBtn" v-model="kels" required>
                            <b-select-option v-for="kelurahan in kelurahan" :key="kelurahan.kode"
                                             v-bind:value="kelurahan.kode">@{{kelurahan.nama}}
                            </b-select-option>
                        </b-select>
                    </b-col>
                </div>
                <!--                <input type="text" v-model="alamat_kurir" class="col-sm-11 form-control" id="formGroupExampleInput"-->
                <!--                       placeholder="Alamat Kurir"><br>-->
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" v-model="nomor_telepon" id="nomorTelepon"
                       placeholder="Nomor Telepon" required><br>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-11 form-control" v-model="nomor_ktp" id="nomorKTP"
                       placeholder="Nomor KTP" required><br>
            </div>
            <div>
                <select class="col-sm-11 custom-select" required v-model="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <br>
            <br>
            <br><br><br><br>
        </div>
        <br>
        <div class="col col-md-4" style="margin-top: 3px">
            <br><br><br><br><br>
            <p>Data Kendaraan</p><br>
            <div class="form-group">
                <br>
                <input type="text" class="col-sm-11 form-control" v-model="nomor_kendaraan" id="platNomor"
                       placeholder="Nomor Kendaraan" required><br>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Jenis Kendaraan : </p>
                </div>
                <div style="margin-top: -2px" class="col-md-7">
                    <br>
                    <select class="col-sm-11 custom-select" required v-model="jenis_kendaraan">
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
                    <img :src="image" class="img-responsive" height="70" width="90">
                    <input type="file" @change="ktp" requiredclass="col-sm-11 form-control" v-model="foto_ktp"
                           id="fotoKTP"
                           placeholder="Foto KTP"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Foto STNK : </p>
                </div>
                <div class="col-md-7">
                    <img :src="imageSTNK" class="img-responsive" height="70" width="90">
                    <input type="file" @change="stnk" requiredclass="col-sm-11 form-control" v-model="foto_stnk"
                           id="fotoSTNK"
                           placeholder="Foto STNK"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <br>
                    <p>Foto SIM : </p>
                </div>
                <div class="col-md-7">
                    <img :src="imageSIM" class="img-responsive" height="70" width="90">
                    <input type="file" @change="sim" requiredclass="col-sm-11 form-control" v-model="foto_SIM"
                           id="fotoSIM"
                           placeholder="Foto SIM"><br>
                </div>
            </div>
            <div class="row">

                <div class="container" id="googleMap" style="width:100%;height:380px;"></div>
            </div>

    </b-form>
    <br><br><br>
    <b-button @click="uploadImage" variant="success">Kirim Request</b-button>
</div>
<br>

</div>

<script src="http://maps.googleapis.com/maps/api/js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                test: 'data',
                jenis_kendaraan: '',
                latitude: '',
                longtitude: '',
                nomor_kendaraan: '',
                nama_kurir: '',
                alamat_kurir: '',
                nomor_telepon: '',
                nomor_ktp: '',
                foto_ktp: '',
                foto_stnk: '',
                foto_SIM: '',
                foto_kurir: '',
                jenis_kelamin: 'laki-laki',
                status: '1',
                provinsi: [],
                kabupaten: [],
                kecamatan: [],
                kelurahan: [],
                prov: '',
                kab: '',
                kec: '',
                kels: '',
                image: '',
                imageSTNK: '',
                imageSIM: '',
                alamat_rinci: ''
            }
        }, async mounted() {
            const response = axios.get("/api/kurirs/provinsi")
                .then(response => {
                    this.provinsi = response.data
                    console.log(response.data)
                })

            console.log("asd")
        },
        methods: {
            formSubmit(e) {
                axios.get("/api/kurirs/provinsi")
                    .then(response => {
                        console.log(response.data)
                    })
            },
            test() {
                console.log(this.prov)
            },
            provinsiBtn() {
                const responses = axios.get("/api/kurir/test/prov/" + this.prov)
                    .then(response => {
                        this.kabupaten = response.data
                        console.log(response.data)
                    })

                // alert(this.prov)
            },
            kabupatenBtn() {
                const responses = axios.get("/api/kurir/test/kab/" + this.kab)
                    .then(response => {
                        this.kecamatan = response.data
                        console.log(response.data)
                    })

                // alert(this.prov)
            },
            kecamatanBtn() {
                const responses = axios.get("/api/kurirs/find/kel/" + this.kec)
                    .then(response => {
                        this.kelurahan = response.data
                        console.log(response.data)
                    })
                // alert(this.prov)
            },
            kelBtn(){
            },
            ktp(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            },
            sim(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.imageSIM = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            },
            stnk(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.imageSTNK = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            },
            fotoKurirBtn(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.foto_kurir = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            },
            uploadImage() {
                if (!lat) {
                    alert("Lokasi Map Harus di isi")
                } else if (this.jenis_kendaraan == '') {
                    alert("Jenis Kendaraan Harus di isi");
                    return false
                } else if (this.nomor_kendaraan == '') {
                    alert("Nomor Kendaraan Harus Di isi");
                    return false
                } else if (this.nomor_telepon == '') {
                    alert("Data Nomor Telepon Harus Di isi");
                    return false
                } else if (this.nama_kurir == '') {
                    alert("Data Nama kurir Harus Di isi");
                    return false
                } else if (this.prov == '') {
                    alert("Data Provinsi Harus Di isi");
                    return false
                } else if (this.kab == '') {
                    alert("Data Kabupaten Harus Di isi");
                    return false
                } else if (this.kec == '') {
                    alert("Data Kecamatan Harus Di isi");
                    return false
                } else if (this.nomor_ktp == '') {
                    alert("Data Nomor KTP Harus Di isi");
                    return false
                } else if (this.foto_ktp == '') {
                    alert("Data Foto KTP Harus Di isi");
                    return false
                } else if (this.foto_stnk == '') {
                    alert("Data foto stnk Harus Di isi");
                    return false
                } else if (this.foto_sim == '') {
                    alert("Data foto sim Harus Di isi");
                    return false
                } else if (this.foto_kurir == '') {
                    alert("Data foto kurir Harus Di isi");
                    return false
                } else if (this.foto_jenis_kelamin == '') {
                    alert("Data jenis kelamin harus Di isi");
                    return false
                } else {
                    let kode = 'KTP-' + this.nama_kurir + "-" + this.nomor_kendaraan;
                    // alert(this.image)
                    axios.post('/api/upload/' + kode, {image: this.image}).then(response => {
                        console.log(response);
                    });
                    let kodeSim = 'SIM-' + this.nama_kurir + "-" + this.nomor_kendaraan;
                    axios.post('/api/upload/sim/' + kodeSim, {image: this.imageSIM}).then(response => {
                        console.log(response);
                    });
                    let kodeSTNK = 'STNK-' + this.nama_kurir + "-" + this.nomor_kendaraan;
                    axios.post('/api/upload/stnk/' + kodeSTNK, {image: this.imageSTNK}).then(response => {
                        console.log(response);
                    });
                    let kodeKurir = '' + this.nama_kurir + "-" + this.nomor_kendaraan;
                    axios.post('/api/upload/kurir/' + kodeKurir, {image: this.foto_kurir}).then(response => {
                        console.log(response);
                    });
                    axios.post('/api/insert', {
                        jenis_kendaraan: this.jenis_kendaraan,
                        latitude: lat,
                        longtitude: long,
                        nomor_kendaraan: this.nomor_kendaraan,
                        nama_kurir: this.nama_kurir,
                        alamat_kurir: this.kels,
                        nomor_telepon: this.nomor_telepon,
                        nomor_ktp: this.nomor_ktp,
                        foto_ktp: kode + '.png',
                        foto_stnk: kodeSTNK + '.png',
                        foto_SIM: kodeSim + '.png',
                        foto_kurir: 'kurir' + kodeKurir + '.png',
                        jenis_kelamin: this.jenis_kelamin,
                        status: "request"
                    }).then(
                        window.location.href = ""
                    )
                }
            }
        },
    })
    // variabel global marker
    var marker;
    var lat;
    var long;

    function taruhMarker(peta, posisiTitik) {
        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
        }
        lat = posisiTitik.lat();
        long = posisiTitik.lng();
        this.latitude = posisiTitik.lat();
        this.longtitude = posisiTitik.lng();
        console.log("Posisi marker: " + this.latitude + this.longtitude);

    }

    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-8.5830695, 116.3202515),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function (event) {
            taruhMarker(this, event.latLng);
        });

    }

    // event jendela di-load
    google.maps.event.addDomListener(window, 'load', initialize);


</script>
@endsection
