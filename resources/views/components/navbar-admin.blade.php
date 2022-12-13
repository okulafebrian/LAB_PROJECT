<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/assets/logo_2.png" alt="barbartos" width="150" class="d-inline-block align-text-center">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item d-lg-none d-block">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item d-lg-none d-block">
                    <a href="{{ route('logout') }}" type="button" class="nav-link"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

        <div class="dropdown d-lg-block d-none">
            <a class="d-flex align-items-center text-decoration-none" role="button" data-bs-toggle="dropdown">
                <h4 class="mb-0 me-2"><i class="bi bi-person-circle"></i></h4>
                {{ explode(' ', trim(auth()->user()->name))[0] }}
            </a>

            <ul class="dropdown-menu dropdown-menu-lg-end p-1 border-0 shadow-sm rounded-3">
                <li><a class="dropdown-item p-2 rounded-3" href="{{ route('profile') }}">Profile</a></li>
                <li>
                    <a href="{{ route('logout') }}" type="button" class="dropdown-item p-2 rounded-3"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
