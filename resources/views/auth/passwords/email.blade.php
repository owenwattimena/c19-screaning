@extends('layouts.auth')

@section('content')
<div class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary rounded-0">
            <div class="card-header text-center">{{ __('Atur Ulang Kata Sandi') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="login-box-msg">Anda lupa kata sandi Anda? Di sini Anda dapat dengan mudah mengambil kata sandi baru.</p>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-0" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text rounded-0">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-3 mb-0">
                        <button type="submit" class="btn btn-primary w-100 rounded-0">
                            {{ __('Kirim Tautan Setel Ulang Kata Sandi') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
