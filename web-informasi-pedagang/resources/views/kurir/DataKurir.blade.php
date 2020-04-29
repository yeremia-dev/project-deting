<?php
@extends('layouts.master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script type="module">
    import Vue from 'https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.esm.browser.js'
</script>
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
