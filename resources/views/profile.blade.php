<x-app title="Profile">
    @if (auth()->user()->role == 'ADMIN')
        <x-navbar-admin></x-navbar-admin>
    @else
        <x-navbar :categories='$categories' :cartCount='$cartCount' />
    @endif

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <h4 class="mb-4 text-center">Profile</h4>

                <div class="card card-custom">
                    <div class="card-body p-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" disabled class="form-control" id="name"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" disabled class="form-control" id="email"
                                value="{{ auth()->user()->email }}">
                        </div>
                        @if (auth()->user()->role == 'CUSTOMER')
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" disabled class="form-control" id="gender"
                                    value="{{ auth()->user()->gender == 'male' ? 'Male' : 'Female' }}">
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="text" disabled class="form-control" id="dob"
                                    value="{{ auth()->user()->dob }}">
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" disabled class="form-control" id="country"
                                    value="{{ auth()->user()->country->name }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
