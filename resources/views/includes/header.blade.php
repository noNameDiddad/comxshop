<nav class="navbar text-center navbar-expand-md navbar-dark bg-dark row header_fixed_bar">
    <div class="container-fluid row ">
        <a class="navbar-brand col-lg-2" href="/"><img src="{{url('/public/images/Logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-lg-4 offset-lg-2" id="navbarCollapse">
            <form class="d-flex col-lg-12">
                <input class="search" type="search" aria-label="Search">
                <button class="button search_btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="collapse navbar-collapse col-lg-3 offset-lg-1" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item active pl-3">
                    @if (Auth::check())
                        <a class="nav-link col-lg-2" aria-current="page" href="{{ route('auth.logout') }}">Выход</a>
                    @else
                        <a class="nav-link col-lg-2" aria-current="page" href="{{ route('auth.show') }}">
                            <img class="icons" src="{{url('/public/images/login.png')}}" alt="">
                        </a>
                    @endif
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#">
                        <img class="icons" src="{{url('/public/images/cart.png')}}" alt="">
                    </a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#">
                        <img class="icons" src="{{url('/public/images/facebook.png')}}" alt="">
                    </a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#">
                        <img class="icons" src="{{url('/public/images/vk.png')}}" alt="">
                    </a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link col-lg-2" href="#">
                        <img class="icons" src="{{url('/public/images/instagramm.png')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>