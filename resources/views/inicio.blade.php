@extends('grid.grid')

@section('contenidoPrincipal') 

<head>
    <title>Hanfit wellnes center. Inicio de sesion</title>

    <style>
      
      .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
      }

    .form-signin .checkbox {
      font-weight: 400;
      }

    .form-signin .form-floating:focus-within {
      z-index: 2;
      }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }

    </style>

  </head>
  <body class="text-center">
    <main class="form-signin">
    <form>
    <h1 class="h3 mb-3 fw-normal">Por favor, inicie sesión</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="Email" name="Email">
      <label for="floatingInput"class="text-black">Dirección de email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="Contraseña" name="Contraseña">
      <label for="floatingPassword"class="text-black">Contraseña</label> 
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuerdame
      </label>
    </div>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="contrasenaolvidada">¿Has olvidado la contraseña?</a>
    </div>
    <div class="form-group">
          <a href="nuevousuario" id="NuevoUsuario">¿Nuevo usuario?</a>
    </div>
    <div class="d-flex justify-content-center" >
      <input type="submit" value= "Iniciar sesión" class="btn btn-primary btn-block btn-lg text-white">
      </div> 
  </form>
    </main>

  </body>
  
@endsection


