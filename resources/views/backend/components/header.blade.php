<nav class="navbar px-0 shadow-sm bg-white">
    <div class="container-fluid pl-10">

        <a href="#" class="nav-link align-middle px-0">
            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"> <img class="nav-logo d-sm-inline  mx-2"  src="{{asset('images/logo-dark.png')}}" alt="logo"/></span>
        </a>
        <div class="float-right h-auto d-flex">
                <h6>Hello, {{ auth()->user()->name }}</h6>
                    <a href="{{ route('logout') }}" class="nav-link align-middle px-0"> <i class="bi bi-power" style="font-size:18px"></i>
                </a>
        </div>

    </div>
</nav>
