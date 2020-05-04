@extends('layouts.app')

@section('content')
<body style="background:gold; background-repeat: no-repeat; background-size: 100%;">
<div class="container" style="margin: 0 auto; border-style:solid; border-color:rosybrown; border-radius: 25px;  width:500px; margin-top: 100px; background-color: teal;">
    <div class="row justify-content-center" style="width:750px; margin:0 auto; text-aling:center; margin-left:20px; margin-top:20px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-bottom:10px; color:white">{{ __('Reset Password') }}</div>

                <div class="card-body" style="width:100%; margin:0 auto; text-aling:center;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pošalji poveznicu za ponovno postavljanje lozinke') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
