<div class="sidebar-menu">
        <div class="sidebar-header">
            <h2 style="color: white; text-align: center">BUY FROM HOME</h2>
        </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            @if(!Auth::check())
                            <li>
                                <a href="#">Pedagang</a>
                                <ul class="collapse">
                                    <li><a href="/">Informasi Pedagang</a></li>
                                    <li><a href="{{ url('kurir/requestp') }}">Request Mendaftar Pedagang</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Kurir</a>
                                <ul class="collapse">
                                    <li><a href="{{ url('user/kurir') }}">Informasi Kurir</a></li>
                                    <li><a href="{{ url('kurir/request') }}">Request Mendaftar Informasi Kurir</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Aduan</a>
                                <ul class="collapse">
                                <li><a href="{{ url('pengaduan') }}">Informasi Aduan</a></li>
                                <li><a href="{{ url('pengaduan/aduan') }}">Request Aduan</a></li>
                                </ul>
                            </li>
                            @else
                                <li>
                                    <a href="#">Pedagang</a>
                                    <ul class="collapse">
{{--                                        <li><a href="{{ asset('/pedagangs/index') }}">Informasi Pedagang</a></li>--}}
                                        <li><a href="{{ asset('/pedagangs/listPedagang') }}">List Pedagang</a></li>
                                        <li><a href="{{ asset('/pedagangs/tambahPedagang') }}">Tambah Pedagang</a></li>
{{--                                        <li><a href="{{ asset('/pedagangs/editPedagang') }}">Edit Pedagang</a></li>--}}
                                        <li><a href="{{ url('kurir/konfirmasipdg') }}">Request Informasi Pedagang</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kurir</a>
                                    <ul class="collapse">
                                        <li><a href="{{ url('listKurir') }}">List Kurir</a></li>
                                        <li><a href="{{ url('dataKurir') }}">Tambah Kurir</a></li>
{{--                                        <li><a href="{{ url('/mago') }}">Edit Kurir</a></li>--}}
                                        <li><a href="{{ url('kurir/konfirmasi') }}">Request Informasi Kurir</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('admin/listaduan') }}">Aduan</a>
                                </li>
                                @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
