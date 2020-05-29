@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Tambah Pedagang</span>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">

                    </div>
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
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="gambar">Foto</label>
                                                        <input type="file" @change="ss"
                                                        class="form-control-file" id="gambar"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6>Alamat:</h6><br>

                                            <div class="row">
                                                <div class="col">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select id="provinsi" class="bg-light custom-select" v-model="provinsi" @change="getKab">
                                                    <option v-for="data in prov" :value="data.kode">@{{ data.nama }}
                                                    </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" v-show="look.kab === true">
                                                <div class="col">
                                                <label for="provinsi">Kabupaten</label>
                                                <select id="kabupaten" class="bg-light custom-select" v-model="kabupaten" @change="getKec">
                                                    <option v-for="data in kab" :value="data.kode">@{{ data.nama
                                                        }}
                                                    </option>
                                                </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" v-show="look.kec === true">
                                                <div class="col">
                                                <label for="kecamatan">Kecamatan</label>
                                                <select id="kecamatan" class="bg-light custom-select" v-model="kecamatan" @change="getKel">
                                                    <option v-for="data in kec" :value="data.kode">@{{ data.nama
                                                        }}
                                                    </option>
                                                </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" v-show="look.kel === true">
                                                <div class="col">
                                                <label for="kelurahan">Kelurahan</label>
                                                <select id="Kelurahan" class="bg-light custom-select" v-model="kelurahan">
                                                    <option v-for="data in kel" :value="data.kode">@{{ data.nama
                                                        }}
                                                    </option>
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
                                                                    <option value="Daging" selected>Daging</option>
                                                                    <option value="Rempah-rempah">Rempah-rempah</option>
                                                                    <option value="Telur">Telur</option>
                                                                    <option value="Sembako">Sembako</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button @click="deleteRow" class="btn btn-primary">
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
                               <button  @click="addProduct" class="btn btn-md btn-success" v-if="selanjutnya">Simpan</button>
                            </center>
                        </div>



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
                no_hp: '',
                no_wa: '',
                foto_pedagang: '',
                kode_wilayah: '',
                selanjutnya: false,
                rows: [
                    {nama_produk: '', kategori: ''}
                ],
                look: {
                    kab: false,
                    kec: false,
                    kel: false
                },
                prov: [],
                provinsi: null,
                kab: [],
                kabupaten: null,
                kec: [],
                kecamatan: null,
                kel: [],
                kelurahan: null,
            }
        },
        methods: {
            ss(e){
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.foto_pedagang = e.target.result;
                };
                reader.readAsDataURL(files[0]);
            },
            getProvinsi() {
                axios.get('/api/getprovinsi')
                    .then((res) => {
                        this.prov = res.data
                    })
            },
            getKab() {
                axios.get(`/api/getkab/${this.provinsi}`)
                    .then((res) => {
                        this.kab = res.data
                        this.look.kab = true
                        this.look.kec = false
                        this.kecamatan = null
                        this.look.kel = false
                        this.kelurahan = null
                    })
            },
            getKec() {
                axios.get(`/api/getkec/${this.kabupaten}`)
                    .then((res) => {
                        this.kec = res.data
                        this.look.kec = true
                        this.look.kel = false
                        this.kelurahan = null
                    })
            },
            getKel() {
                axios.get(`/api/getkel/${this.kecamatan}`)
                    .then((res) => {
                        this.kel = res.data
                        this.look.kel = true
                    })
            },
            addRow: function () {
                this.rows.push({nama_produk: '', kategori: ''});
            },
            deleteRow: function () {
                this.rows.pop();
            },

            addProduct: function() {
            	axios
            		.post("/pedagang/store", {
            			myData: this.rows,
                        nama: this.nama,
                        noHp : this.no_hp,
                        noWA : this.no_wa,
                        foto_pedagang  : this.foto_pedagang,
                        alamat : this.kelurahan,
                        alamatRinci : this.alamat_rinci
            		})
            		.then(() => {
            			window.location.href = '/pedagangs/listPedagang';
            		})
            		.catch(er => {
            			console.log(er);
            		});
            }
        },
        created() {
            this.getProvinsi()
        }
    })
</script>
@endsection
