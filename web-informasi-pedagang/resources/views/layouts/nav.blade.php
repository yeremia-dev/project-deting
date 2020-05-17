<div class="header-area">
    <div class="row align-items-center">
                    <!-- nav and search button -->
        <div class="col-md-10 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
            </div>

        </div>

        <div class="col-md-2 col-sm-8 clearfix">
            @if (Auth::check())
            <form method="POST" action="{{ url('/logout')}}">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn nav-link"
                                                style="background-color: transparent;padding-left: 12px;">Logout
                                        </button>
                                    </form>
            @else
            <a href="{{ url('/login') }}">
                <button type="button" class="btn nav-link"
                                                style="background-color: transparent;padding-left: 12px;">Login
                                        </button></a>
            @endif

        </div>

    </div>
</div>
