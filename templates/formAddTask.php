<?php

function showFormAddTask(){
    echo '<h1>Lista de tareas</h1>
  
    <form class="col-3 m-auto" action="addTask" method="POST">
    
      <legend class="text-center">Agregar Tarea</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de Tarea</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de Tarea</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripción">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
     ';
}