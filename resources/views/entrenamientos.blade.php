@extends('grid.grid')

@section('contenidoPrincipal')

    <h2>Entrenamiento </h2>
    <table class="table bg-dark text-white">
  <thead>
    <tr>
      <th scope="col">Ejercicios</th>
      <th scope="col">Sets</th>
      <th scope="col">Reps</th>
      <th scope="col">RM Histórico</th>
      <th scope="col">Marca</th>
      <th scope="col">Marca cliente</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>
   {{-- @foreach ($ejercicios as $ejercicios)
      <tr>
        <td>{{ $ejercicios->Nombre_Ejercicio }}</td>
        <td>{{ $ejercicios->Sets }}</td>
        <td>{{ $ejercicios->Reps }}</td>
        <td>{{ $ejercicios->RM_Historico }}</td>
        <td>{{ $ejercicios->Marca }}</td>
        <td>{{ $ejercicios->Marca_Cliente }}</td>
        <td>{{ $ejercicios->Observaciones }}</td>
      </tr>
    @endforeach
   --}}
     <tr>
        <td scope="col">Press</td>
        <td scope="col">5</td>
        <td scope="col">8</td>
      </tr>
    <tr>
        <td scope="col">Press</td>
        <td scope="col">5</td>
        <td scope="col">8</td>
    </tr>
    <tr>
        <td scope="col">Press</td>
        <td scope="col">5</td>
        <td scope="col">8</td>
    </tr>
  </tbody>
</table>

@endsection
