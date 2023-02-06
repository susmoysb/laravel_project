@extends('layout.master')

@section('title', 'Register')

@section('content')

    <div class="container-lg col-lg-6 user_create px-4">

        <div class="card-header text-center mb-2 mt-2 pt-2">
            <h1>Registration Form</h1>
        </div>

        <form method="POST" action="{{ route('store') }}" autocomplete="off">

            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-3 col-form-label col-form-label-sm">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name"  name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="email" class="col-md-3 col-form-label col-form-label-sm">Email</label>
                <div class="col-md-9">
                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email"  name="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-3 col-form-label col-form-label-sm">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" placeholder="Enter Your Password"  name="password" value="">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password_confirmation" class="col-md-3 col-form-label col-form-label-sm">Confirm Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Your Password"  name="password_confirmation" value="">
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-md-3 col-form-label col-form-label-sm">Phone</label>
                <div class="col-md-9">
                    <input type="number" class="form-control form-control-sm @error('phone') is-invalid @enderror" id="phone" placeholder="Example: 017xxxxxxxx"  name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-1">
                <label for="gender" class="col-md-3 col-form-label col-form-label-sm">Gender</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="Male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="others" value="Others">
                        <label class="form-check-label" for="others">Others</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="present_address" class="col-md-3 col-form-label col-form-label-sm">Present Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm @error('present_address') is-invalid @enderror" id="present_address" placeholder="Enter Your Present Address"  name="present_address" value="{{ old('present_address') }}">
                    @error('present_address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="permanent_address" class="col-md-3 col-form-label col-form-label-sm">Permanent Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm @error('permanent_address') is-invalid @enderror" id="permanent_address" placeholder="Enter Your Permanent Address"  name="permanent_address" value="{{ old('permanent_address') }}">
                    @error('permanent_address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="company" class="col-md-3 col-form-label col-form-label-sm">Company Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm @error('company') is-invalid @enderror" id="company" placeholder="Enter Your Company Name"  name="company" value="{{ old('company') }}">
                    @error('company')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="position" class="col-md-3 col-form-label col-form-label-sm">Position</label>
                <div class="col-md-9">
                    <input type="text" class="form-control form-control-sm @error('position') is-invalid @enderror" id="position" placeholder="Enter Your Position"  name="position" value="{{ old('position') }}">
                    @error('position')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-9 offset-md-3 mb-3">
                    <button type="submit" class="btn btn-primary btn-sm mb-1">Register</button>
                    <button type="reset" class="btn btn-danger btn-sm mb-1">Reset</button>
                </div>
            </div>
        </form>

    </div>

@endsection