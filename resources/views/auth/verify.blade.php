@extends('layouts.app-verify')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu direccion de E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificacion fue enviado a tu direccion de E-mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor revisa tu E-mail para verificar tu cuenta.') }}
                    {{ __('Si no recibiste el mensaje') }}, <a href="{{ route('verification.resend') }}">{{ __('haz click aqui para enviar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
