<x-app title="Login">
    <div class="container py-5">
        <div class="text-center mb-5">
            <a href="{{ route('home') }}">
                <img src="/storage/assets/logo_2.png" alt="Barbatos" width="180">
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="mb-1">Login</h4>
                            <small class="text-muted">Don't have an account yet? Let's <a href="{{ route('register') }}"
                                    class="text-decoration-none">register</a> first</small>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 rounded-3">
                                {{ __('Login') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
