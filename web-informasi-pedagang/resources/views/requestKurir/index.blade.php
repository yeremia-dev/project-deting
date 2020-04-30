@extends('layouts.master')
@section('content')
<script type="module">
    import Vue from 'https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.esm.browser.js'
</script>

<h1>Selamat Datang di halaman Request Daftar Kurir</h1>
<hr>
<div>
    <form action="test" enctype="multipart/form-data">
        <input type="text" class="form-control" id="nama" placeholder="nama kurir">
        <br>
        <input type="text" class="form-control" id="nomor" placeholder="nomor plat kendaraan ">
        <br>
        <select name="jenis" id="jenis" class="form-control">
            <option value="motor">Motor</option>
            <option value="mobil">Mobil</option>
        </select>
        <br>
        <input type="text" class="form-control" id="alamat" placeholder="Alamat ">
        <br>
        <input type="submit" class="btn btn-success" >
        <br>
    </form>
</div>
@endsection

new Vue({
template: '<div>test</div>'
})

// this does not
new Vue({
render (h) {
return h('div', this.hi)
}
})module.exports = {
// ...
resolve: {
alias: {
'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
}
}
}
