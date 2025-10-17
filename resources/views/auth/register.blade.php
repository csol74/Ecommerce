@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <div class="login-header">{{ __('Registro de Usuario') }}</div>

        <div class="logo-section">
            <img src="https://unab.edu.co/wp-content/uploads/2020/03/Img_2368.png" alt="UNAB Logo">
            <h2>Sistema de Gestión Universitaria</h2>
            <h2>Crea tu cuenta para acceder al sistema</h2>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label-custom">{{ __('Nombre completo') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label-custom">{{ __('Correo Electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label-custom">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="form-label-custom">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn-login">
                    {{ __('Registrar cuenta') }}
                </button>

                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="forgot-password">
                        ¿Ya tienes una cuenta? Inicia sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
