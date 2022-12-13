<x-app title="Register">
    <div class="container py-5">
        <div class="text-center mb-5">
            <a href="{{ route('home') }}">
                <img src="/storage/assets/logo_2.png" alt="Barbatos" width="180">
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="mb-1">Register Now</h4>
                            <small class="text-muted">Already have a Barbatos account? <a href="{{ route('login') }}"
                                    class="text-decoration-none">Login</a></small>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>

                                <div class="col-md">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label">{{ __('Gender') }}</label>

                                <div class="col-md">
                                    <fieldset>
                                        <input type="radio" class="btn-check" id="male" name="gender"
                                            value="male" required>
                                        <label for="male"
                                            class="btn btn-outline-primary px-3 rounded-pill">Male</label>

                                        <input type="radio" class="btn-check" id="female" name="gender"
                                            value="female">
                                        <label for="female"
                                            class="btn btn-outline-primary px-3 rounded-pill">Female</label>
                                    </fieldset>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dob" class="col-md-4 col-form-label">{{ __('Date of Birth') }}</label>

                                <div class="col-md">
                                    <input id="dob" type="date"
                                        class="form-control @error('dob') is-invalid @enderror" name="dob"
                                        value="{{ old('dob') }}" required autocomplete="dob" autofocus>

                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="country" class="col-md-4 col-form-label">{{ __('Country') }}</label>

                                <div class="col-md">
                                    <select class="form-select" name="country_id">
                                        <option selected disabled>Choose a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                                <div class="col-md">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                                <div class="col-md">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                                <div class="col-md">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md offset-md-4 text-end">
                                    <button type="submit" class="btn btn-primary px-5">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
