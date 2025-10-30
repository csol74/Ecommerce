@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <!-- Encabezado -->
        <div class="login-header">
            {{ __('Confirmar Contraseña') }}
        </div>

        <!-- Logo y descripción -->
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <h2>Por favor confirma tu contraseña antes de continuar</h2>
        </div>

        <!-- Formulario -->
        <div class="card-body">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Campo de contraseña -->
                <div class="mb-4">
                    <label for="password" class="form-label-custom">{{ __('Contraseña') }}</label>
                    <div class="input-with-icon">
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Botón principal -->
                <button type="submit" class="btn-login">
                    {{ __('Confirmar Contraseña') }}
                </button>

                <!-- Enlace opcional -->
                @if (Route::has('password.request'))
                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}" class="forgot-password">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
