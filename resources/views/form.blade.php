<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>REGISTRO</title>

   
    </head>
    <body>
      <h1>REGISTRO</h1>
      <form action="nuevoCliente"  method="POST">
          @csrf
        <div class="form-group">
        <label for="firstName">Nombre:</label><br>
        <input type="text" id="firstName" name="firstName" placeholder="escriba su nombre"><br>
        </div>
        <div class="form-group">
        <label for="lastName">Apellido:</label><br>
        <input type="text" id="lastName" name="lastName" placeholder="solo su primer apellido"><br>
        </div>
        <div>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        </div>
        <input type="submit" value="enviar">
      </form>
    </body>
</html>
