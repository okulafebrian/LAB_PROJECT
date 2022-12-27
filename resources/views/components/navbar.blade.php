<nav class="navbar navbar-expand-lg shadow-sm py-3 bg-white sticky-top">
    <div class="container gap-3">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/assets/logo_2.png" alt="barbartos" width="150" class="d-inline-block align-text-center">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="d-lg-none d-block w-100" role="search" action="{{ route('search.user') }}">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search on Barbatos" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-4 mb-lg-0 mb-2">
                <li class="nav-item dropdown">
                    <a class="nav-link" type="button" data-bs-toggle="dropdown">Category</a>

                    <ul class="dropdown-menu overflow-auto p-1 pe-3 border-0 shadow-sm rounded-3" role="menu"
                        style="max-height: 60vh">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item p-2 rounded-3" href="{{ route('categories.show', $category) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @if (auth()->check())
                    @if (auth()->user()->role == 'ADMIN')
                        <li class="nav-item d-lg-none d-block">
                            <a class="nav-link" target="_blank" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item d-lg-none d-block">
                            <a class="nav-link" href="{{ route('carts.index') }}">Cart</a>
                        </li>
                        <li class="nav-item d-lg-none d-block">
                            <a class="nav-link" href="{{ route('purchases.index') }}">History</a>
                        </li>
                    @endif
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
                @endif
            </ul>

            <form class="d-lg-block me-4 d-none w-100" role="search" action="{{ route('search.user') }}">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search on Barbatos" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            @if (auth()->check() && auth()->user()->role == 'CUSTOMER')
                <a href="{{ route('carts.index') }}"
                    class="btn btn-cart rounded-3 position-relative d-lg-block d-none">
                    <i class="bi bi-cart-fill text-muted"></i>
                    @if ($cartCount > 0)
                        <span
                            class="position-absolute top-25 start-100 translate-middle p-1 m-auto bg-danger border border-light border-2 text-light rounded-circle"
                            style="width: 1.5rem; height: 1.5rem; font-size: xx-small;">
                            <b>{{ $cartCount }}</b>
                        </span>
                    @endif
                </a>

                <div class="mx-3 d-lg-block d-none" style="border-left: 2px solid #DEE2E6; height: 2rem"></div>
            @endif

            @if (auth()->check())
                <div class="dropdown d-lg-block d-none">
                    <a class="d-flex align-items-center text-decoration-none" role="button" data-bs-toggle="dropdown">
                        <h4 class="mb-0 me-2"><i class="bi bi-person-circle"></i></h4>
                        {{ explode(' ', trim(auth()->user()->name))[0] }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg-end p-1 border-0 shadow-sm rounded-3">
                        @if (auth()->user()->role == 'ADMIN')
                            <li>
                                <a class="dropdown-item p-2 rounded-3" target="_blank"
                                    href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item p-2 rounded-3" href="{{ route('purchases.index') }}">
                                    History
                                </a>
                            </li>
                        @endif
                        <li><a class="dropdown-item p-2 rounded-3" href="{{ route('profile') }}">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" type="button" class="dropdown-item p-2 rounded-3"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <div class="d-flex flex-lg-row flex-column gap-2">
                    <a href="{{ route('login') }}"
                        class="btn btn-outline-primary rounded-3 text-lg-center text-start">Login</a>
                    <a href="{{ route('register') }}"
                        class="btn btn-primary rounded-3 text-lg-center text-start">Register</a>
                </div>
            @endif
        </div>
    </div>
</nav>
