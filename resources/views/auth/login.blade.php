@extends('grid.grid')
@section('contenidoPrincipal')
<head>
    <title>Hanfit wellnes center. Inicio de sesion</title>
  </head>
  <body class="text-center">
    <main class="form-signin">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">  <!-- Enlace a la ruta con nombre 'login', en web.php se cargan automaticamente -->
                        @csrf
                         <h1 class="h3 mb-3 fw-normal">Por favor, inicie sesión</h1>
                        <div class="row mb-3">
     
                            <label for="email" class="col-md-4 col-form-label text-md-end">Dirección de email</label>

                            <div class="col-md-6">
                                <!-- Se determina que tambien tiene que darlo como invalido en todo caso y cuando pasa eso-->
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                                                                                                                    <!-- para retener el valor de un caja de texto y compararlo-->
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> <!-- mensaje predefinido para el email, tambien existe uno para password, etc. -->
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> <!-- forma rapida para introducir una cadena json -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            @if (session('warning'))
                                    <div class="alert alert-warning">   <!-- el warning me falla, no me aparece-->
                                        {{ session('warning') }}
                                    </div>
                                @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                                

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
