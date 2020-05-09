@extends('layouts.master')
@section('content')
<h1>Hasil Pencarian</h1>

<div class="col-12 mt-5" id="app">
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-sm-8">
                    <div class="card-area">
                        <div class="col-lg-8 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h6>Inang Hutabarat</h6>
                                    <p class="card-text">Jl. Sadar No. 16 Siborongborong</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">No Hp :</li>
                                        <li class="list-group-item">No WhatsApp :</li>
                                    </ul>
                                    <br>
                                    <a href="#" class="btn btn-success">Chat WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <div class="col-lg-12 col-md-12 mt-5">
                    <template>
                        <div>
                            <b-table striped hover :items="items"></b-table>
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
                items: [
                    {  Nama_produk: 'Dickerson', kategori: 'Macdonald' },
                    {  Nama_produk: 'Dickerson', kategori: 'Macdonald' },
                    {   Nama_produk: 'Dickerson', kategori: 'Macdonald' },
                    {   Nama_produk: 'Dickerson', kategori: 'Macdonald' }
                ],
            }
        },
        methods: {
            getUrl() {
                var kode = this.getParameterByName('search')
                axios.get(`/api/searchbykode/${kode}`)
                    .then((res) => {
                        this.data = res.data
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



