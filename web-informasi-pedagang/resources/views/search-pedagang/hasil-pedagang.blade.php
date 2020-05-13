@extends('layouts.master')
@section('content')
<h1>Hasil Pencarian</h1>

<div class="col-12 mt-5" id="app">
    <div class="card">
        <div class="card-body">
            <div class="row" v-for="data in datas">
                <div class="col-sm-8">
                    <div class="card-area">
                        <div class="col-lg-8 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" :src="data.pedagang.foto_pedagang" alt="image">
                                <div class="card-body">
                                    <h6>@{{ data.pedagang.nama_pedagang }}</h6>
                                    <p class="card-text">@{{ data.pedagang.alamat_rinci }}</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">No Hp : @{{ data.pedagang.no_hp }}</li>
                                        <li class="list-group-item">No WhatsApp : @{{ data.pedagang.no_wa }}</li>
                                    </ul>
                                    <br>
                                    <button @click="chatWA(data.pedagang.no_wa)" class="btn btn-success">Chat
                                        WhatsApp
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-lg-12 col-md-12 mt-5">
                        <template>
                            <div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Kategori</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="prod in data.dagangan">
                                        <td>@{{ prod.nama_produk }}</td>
                                        <td>@{{ prod.kategori }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#app',
        data() {
            return {
                items: [],
                datas: [],
            }
        },
        methods: {
            chatWA(i) {
                window.location.href = `https://wa.me/${i}`
            },
            getUrl() {
                var kode = this.getParameterByName('search')
                var produk = this.getParameterByName('produk')
                axios.get(`/api/searchbykode/${kode}/${produk}`)
                    .then((res) => {
                        console.log(res.data)
                        this.datas = res.data
                    })
            },
            getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }
        },

        created() {
            this.getUrl();
        }
    })

</script>

@endsection



