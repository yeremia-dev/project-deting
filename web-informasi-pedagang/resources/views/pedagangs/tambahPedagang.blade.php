@extends('layouts.master')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
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
                                            <br>
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
                                                                <button @click="deleteRow(row)" class="btn btn-primary">
                                                                    <span class="fa fa-plus"></span> hapus Produk
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
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>-->
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                nama: '',
                alamat_rinci: '',
                provinsi : [],
                prov:'',
                kabupaten: [],
                kab:'',
                kecamatan: [],
                kec: '',
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
        async mounted() {
            const response = axios.get("/api/kurirs/provinsi")
                .then(response => {
                    this.provinsi = response.data
                    console.log(response.data)
                })

            console.log("asd")
        },
        methods: {
            formSubmit(e) {
                alert(this.jenis_kendaraan)
                axios.get("/kurir/test")
                    .then(response => {
                        alert(response.data)
                    })
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
                console.log(this.kec)
                // alert(this.prov)
            },
            test(){
                console.log(this.no_hp)
                console.log(this.no_wa)
                console.log(this.kec)
                console.log(this.alamat_rinci)
                alert(this.nama)
            },
            save(){
                alert("sukses")
            },
            submit(){
                console.log(this.rows[0])
                alert(this.rows[0])
            },
            addRow: function () {
                this.rows.push({nama_produk: '', kategori: ''});
            },
            deleteRow: function (row) {
                this.rows.$remove(row);
            },
        },
    })
</script>
@endsection
