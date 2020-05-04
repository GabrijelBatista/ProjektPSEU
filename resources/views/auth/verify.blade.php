@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potvrdite e-mail adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Poveznica za potvrdu e-mail adrese je poslana.') }}
                        </div>
                    @endif

                    {{ __('Provjerite poštu za potvrdu e-mail adrese.') }}
                    {{ __('Ukoliko niste dobili poveznicu za potvrdu e-mail adrese') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('pritisnite ovdje za ponovno slanje poveznice') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
