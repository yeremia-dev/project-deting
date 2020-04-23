@extends('layouts.master')
@section('content')
	<h1>Kategori Produk</h1>
    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="header-title">Kategori Produk</div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <h1>Test</h1>
                                    </div>
                                    <div class="col-md-5">
                                        <h4>Cari Berdasarkan</h4><br><br><br>
                                        <p><bold>Lokasi<bold></p>
                                        <form>
                                            <fieldset >
                                            <div class="form-group">
                                                    <label for="Kecamatan">Kabupaten</label>
                                                    <select id="Kecamatan" class="form-control">
                                                        <option>test</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Kecamatan">Kecamatan</label>
                                                    <select id="Kecamatan" class="form-control">
                                                        <option>test</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Kecamatan">Kelurahan/Desa</label>
                                                    <select id="Kecamatan" class="form-control">
                                                        <option>test</option>
                                                    </select>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

