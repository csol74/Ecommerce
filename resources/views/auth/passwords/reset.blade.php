@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <!-- Título -->
        <div class="login-header">
            {{ __('Restablecer Contraseña') }}
        </div>

        <!-- Logo -->
        <div class="logo-section">
            <img src="https://unab.edu.co/wp-content/uploads/2020/03/Img_2368.png" alt="UNAB Logo">
            <h2>Ingresa tu nueva contraseña para recuperar el acceso</h2>
        </div>

        <!-- Formulario -->
        <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label-custom">{{ __('Correo Electrónico') }}</label>
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $email ?? old('email') }}"
                        required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Nueva contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label-custom">{{ __('Nueva Contraseña') }}</label>
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Confirmación -->
                <div class="mb-4">
                    <label for="password-confirm" class="form-label-custom">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password"
                        class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <!-- Botón -->
                <button type="submit" class="btn-login">
                    {{ __('Restablecer Contraseña') }}
                </button>

                <!-- Enlace al login -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="forgot-password">
                        ¿Recordaste tu contraseña? Inicia sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
