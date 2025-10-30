@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <!-- Encabezado -->
        <div class="login-header">
            {{ __('Recuperar Contraseña') }}
        </div>

        <!-- Logo -->
        <div class="logo-section">
            <img src="https://unab.edu.co/wp-content/uploads/2020/03/Img_2368.png" alt="UNAB Logo">
            <h2>Ingresa tu correo para recibir el enlace de restablecimiento</h2>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Campo de correo -->
                <div class="mb-4">
                    <label for="email" class="form-label-custom">{{ __('Correo Electrónico') }}</label>
                    <div class="input-with-icon">
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Botón -->
                <button type="submit" class="btn-login">
                    {{ __('Enviar enlace de restablecimiento') }}
                </button>

                <!-- Enlace de regreso -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="forgot-password">
                        Volver al inicio de sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
