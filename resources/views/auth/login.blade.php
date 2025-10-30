@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-wrapper">
        <div class="logo-section">
            <img src="https://unab.edu.co/wp-content/uploads/2020/03/Img_2368.png" alt="UNAB Logo">
            <h2>Sistema de Gestión Universitaria</h2>
        </div>

        <div class="login-header">
            Iniciar Sesión
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label class="form-label-custom">Correo Electrónico</label>
                    <div class="input-with-icon">
                        <input id="email" 
                               type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               name="email" 
                               value="{{ old('email') }}" 
                               placeholder="usuario@unab.edu.co"
                               required 
                               autocomplete="email" 
                               autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label-custom">Contraseña</label>
                    <div class="input-with-icon">
                        <input id="password" 
                               type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" 
                               placeholder="••••••••"
                               required 
                               autocomplete="current-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" 
                               type="checkbox" 
                               name="remember" 
                               id="remember" 
                               {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Recordar mis datos
                        </label>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-login">
                        Ingresar
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a class="forgot-password" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <div class="footer-text">
        Universidad Autónoma de Bucaramanga - UNAB © 2025
    </div>
    <div class="copyright-text">
        © 2024 UNAB Tienda. Todos los derechos reservados.
    </div>
</div>
@endsection