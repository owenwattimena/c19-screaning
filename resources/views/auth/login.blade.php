@extends('layouts.auth')

@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary rounded-0 shadow-lg">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <strong>{{ __('C19') }}</strong>Screaning
                </a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">{{ __('Masuk untuk memulai sesi Anda') }}</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control rounded-0 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text rounded-0">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control rounded-0 @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text rounded-0">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ingat Saya') }}
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block rounded-0">{{ __('Login') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password Anda?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
