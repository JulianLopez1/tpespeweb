<?php

function showFormAddTask(){
    echo '<h1>Lista de tareas</h1>
  
    <form class="col-3 m-auto" action="addJugador" method="POST">
    
      <legend class="text-center">Agregar Jugador</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de Jugador</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Club</label>
        <input type="text" name="club" class="form-control" placeholder="Ingrese club">
      </div>
      <div class="mb-3">
      <label class="form-label">representante</label>
      <input type="text" name="representante_id" class="form-control" placeholder="Ingrese representante">
    </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
  <form class="col-3 m-auto" action="showJugador">
  <button type="submit" class="btn btn-primary col-12">Buscar</button>
  </form>
     ';
}