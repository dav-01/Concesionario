@extends('layouts')

@section('section')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear tercero</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear tercero</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('tercero.store')}}">
            @csrf
            <div class="mb-1">
                <label for="recipient-name" class="col-form-label">Cedula:</label>
                <input type="text" class="form-control" id="cedula" name="cedula">
              </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="mb-1">
            <label for="message-text" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
          <div class="mb-1">
            <label for="message-text" class="col-form-label">Celular:</label>
            <input type="text" class="form-control" id="celular" name="celular">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Correo:</label>
            <input type="text" class="form-control" id="correo" name="correo">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Crear tercero</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div><br><br>


<div class="container-fluid">
  <div class="row justify-content-between">
  <div class="col-6">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>CEDULA</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>CELULAR</th>
          <th>CORREO</th>
    
        </tr>
      </thead>
      <tbody>
        @foreach ($terceros as $tercero)
        <tr>
          <td>{{$tercero->id}}</td>
          <td>{{$tercero->cedula}}</td>
          <td>{{$tercero->nombre}}</td>
          <td>{{$tercero->apellido}}</td>
          <td>{{$tercero->celular}}</td>
          <td>{{$tercero->correo}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div >

  <div class="col-4">
effeew
  </div>
</div>

</div>







    
@endsection


