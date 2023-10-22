@extends('admin.master.master')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ asset('assets/admin/assets/img/avatars/1.png') }}" alt="user-avatar"
                                    class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                            accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>
                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        {{-- {{dd(Auth::user())}} --}}
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" action="{{ route('admin.SetProfile') }}">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input class="form-control" type="text" id="firstName" name="first_name"
                                            value="{{ Auth::user()->first_name }}" autofocus />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input class="form-control" type="text" name="last_name" id="last_name"
                                            value="{{ Auth::user()->last_name }}" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Phone Number</label>
                                        <input class="form-control" type="text" name="phone" id="lastName"
                                            value="{{ Auth::user()->phone }}" />
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
            @if ($errors->any())
                {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
            @endif
            @if (Session::get('error') && Session::get('error') != null)
                <div style="color:red">{{ Session::get('error') }}</div>
                @php
                    Session::put('error', null);
                @endphp
            @endif
            @if (Session::get('success') && Session::get('success') != null)
                <div style="color:green">{{ Session::get('success') }}</div>
                @php
                    Session::put('success', null);
                @endphp
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Reset Password</h5>
                        <!-- Account -->
                        <hr class="my-0" />
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" action="{{ route('admin.updatePassword') }}">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Old Password</label>
                                        <input class="form-control" type="text" id="firstName" name="current_password"
                                            value="" autofocus />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">New Password</label>
                                        <input class="form-control" type="text" name="new_password" id="last_name"
                                            value="" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">confirm New Password</label>
                                        <input class="form-control" type="text" name="new_password_confirmation"
                                            id="last_name" value="" />
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->


        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
