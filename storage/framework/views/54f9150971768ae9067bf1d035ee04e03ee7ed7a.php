

<?php $__env->startSection('contenidoPrincipal'); ?>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('grid.grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/CoachMoya/resources/views////entrenamientos.blade.php ENDPATH**/ ?>