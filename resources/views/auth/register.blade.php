@extends('layouts.header')

@section('content')
<div class="container">
    <div class="rounded-circle">
        <a href="{{ url('/') }}" class="text-decoration-none"><i class="fa-solid fa-arrow-left fa-xl text-dark"></i></a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-header text-center mb-1"><h2>{{ __('REGISTER') }}</h2></div>
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name" class="col-md-4 col-form-label text-sm">{{ __('Nama') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="mara@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group mb-3">
                            <label for="hp" class="col-md-4 col-form-label text-sm">{{ __('Nomor Handphone') }}</label>
                            <input id="hp" type="number" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp') }}" required autocomplete="hp" autofocus placeholder="08xx-xxx-xxx">

                            @error('hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat" class="col-md-4 col-form-label">{{ __('Alamat') }}</label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-sm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group text-center mb-1">
                            <p class="text-dark">Already have an account!<a href="{{ url('login') }}" class="text-decoration-none"> Login</a></p>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
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
@endsection
