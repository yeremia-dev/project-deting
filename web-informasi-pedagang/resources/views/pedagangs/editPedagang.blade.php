@extends('layouts.master')
@section('content')
<div id="app">
    <div class="container">
        <nav class="navbar navbar-grey bg-light">
            <span class="navbar-brand mb-0 h1">Edit Informasi Pedagang</span>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">

                    </div>
                    <form method="POST"  action="{{ url('/pedagang/updateInfo', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="pedagang">
                                    <div class="row">
                                        <div class="col">
                                            <h6>Update Data diri :</h6><br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text"
                                                                name="nama_pedagang" 
                                                               class="bg-light form-control"
                                                               id="formGroupExampleInput"
                                                               placeholder="Nama" value="{{ $data->nama }}"><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text"
                                                                name="no_hp" 
                                                               class="bg-light form-control"
                                                               id="no_hp"
                                                               placeholder="Nomor Hp" value="{{ $data->no_hp }}"><br>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text"
                                                                name="no_wa" 
                                                               class="bg-light form-control"
                                                               id="no_wa" value="{{ $data->no_wa }}"
                                                               placeholder="Nomor WA(WhatsApp)" ><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="gambar"> Ganti Foto</label>
                                                        <input type="file" name="gambar" 
                                                        class="form-control-file" id="gambar"/>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <h6>Alamat:</h6><br>
                                       
                                          
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                            <textarea id="alamat_rinci" class="bg-light form-control"
                                                                    name="alamat_rinci" 
                                                                     cols="30" rows="10"
                                                                      placeholder="Alamat Rinci" value=""> {{ $data->alamat_rinci }} </textarea>
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
                                                                    <option value="a" selected>a</option>
                                                                    <option value="b">b</option>
                                                                    <option value="c">c</option>
                                                                    <option value="d">d Utara</option>
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
                            <!-- <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#pedagang"
                                                        data-toggle="tab" hidden>Data Pedagang</a></li>
                                <li class="nav-item"><a class="nav-link btn-primary" v-show="!selanjutnya"
                                                        v-on:click="selanjutnya=true" href="#dagangan"
                                                        data-toggle="tab">Selanjutnya</a></li>
                            </ul> -->
                            <center>
                               <button  type="submit" class="btn btn-md btn-success" >update</button>
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
</script>
@endsection