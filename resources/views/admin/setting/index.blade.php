<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Danger Border with Icons</h4>
                    <p class="card-subtitle mb-3">
                        made with bootstrap elements
                    </p>
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-danger" placeholder="Username">
                            <label>
                                <i class="ti ti-user me-2 fs-4 text-danger"></i>
                                <span class="border-start border-danger ps-3">Username</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border border-danger" placeholder="Email">
                            <label>
                                <i class="ti ti-mail me-2 fs-4 text-danger"></i>
                                <span class="border-start border-danger ps-3">Email address</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control border border-danger" placeholder="Password">
                            <label>
                                <i class="ti ti-lock me-2 fs-4 text-danger"></i>
                                <span class="border-start border-danger ps-3">Password</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control border border-danger" placeholder="CPassword">
                            <label>
                                <i class="ti ti-lock me-2 fs-4 text-danger"></i>
                                <span class="border-start border-danger ps-3">Confirm Password</span>
                            </label>
                        </div>

                        <div class="d-md-flex align-items-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="sf6" value="check">
                                <label class="form-check-label" for="sf6">Remember Me</label>
                            </div>
                            <div class="mt-3 mt-md-0 ms-auto">
                                <button type="submit" class="btn btn-danger hstack gap-6">
                                    <i class="ti ti-send me-2 fs-4"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
