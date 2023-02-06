@extends('layout.master')

@section('title', 'Login')

@section('content')

    <div class="container-lg col-lg-6 user_create px-4">

        <div class="form-header text-center mb-5 mt-2 pt-2">
            <h1>Login Form</h1>
            <span>Complete the form below to login to the system</span>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>       
        @endif

        <form method="POST" action="{{ route('authenticate') }}" autocomplete="off">

            @csrf
            
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
                <div class="col-sm-9 offset-md-3 mb-3">
                    <button type="submit" class="btn btn-primary btn-sm mb-1">Login</button>
                    <button type="reset" class="btn btn-danger btn-sm mb-1">Reset</button>
                </div>
            </div>
        </form>

    </div>

@endsection