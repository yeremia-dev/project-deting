@extends('layouts.master')
@section('content')
<h1>Hasil Pencarian</h1>
<div class="col-12 mt-5" id="app">
    <div class="card">
        <div class="card-body">
            <div class="header-title">

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-area">
                    <div class="col-lg-4 col-md-6 mt-5">
                            <div class="card card-bordered">
                                <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image">
                                <div class="card-body">
                                    <h6>Inang Hutabarat</h6>
                                    <p class="card-text">Jl. Sadar No. 16 Siborongborong</p>                                   
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">No Hp : </li>
                                        <li class="list-group-item">No WhatsApp : </li>
                                    </ul>
                                    <br>
                                    <a href="#" class="btn btn-success">Chat WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@^2.0.0/dist/vue.min.js"></script>
<script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
<script>
    new Vue({
        el: '#app',
        data: function () {
            return {
                test: 'sandy',
            }
        },
        methods: {},
    })
</script>
@endsection