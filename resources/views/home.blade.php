@extends('layouts')

@section('section')
    <div class="modal fade" id="Crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear tercero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('tercero.store') }}">
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


    <div class="modal fade" id="Editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar tercero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="">
                        @method('PUT')
                        @csrf
                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label">Cedula:</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" value="">
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
    </div>

    <div class="container-fluid">



        <div class="row justify-content-between">
            <div class="col-6">
                <div class="row justify-content-between">
                    <h2 class="d-inline-block col-9">Terceros</h2>
                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3" data-bs-toggle="modal"
                        data-bs-target="#Crear" data-bs-whatever="@mdo">Crear tercero</button>


                </div>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($terceros as $tercero)
                            <tr>
                                <td>{{ $tercero->id }}</td>
                                <td>{{ $tercero->cedula }}</td>
                                <td>{{ $tercero->nombre }}</td>
                                <td>{{ $tercero->apellido }}</td>
                                <td>{{ $tercero->celular }}</td>
                                <td>{{ $tercero->correo }}</td>
                                <td>
                                    {{-- <button type="button" class="btn btn-primary mb-2 d-inline-block col-3"
                                        data-bs-toggle="modal" data-bs-target="#Editar" data-bs-whatever="@mdo"><a
                                            href="{{ route('tercero.edit', $tercero) }}"></a> Editar</button> --}}
                                    <a class="btn btn-warning" style="display: inline-block"
                                        href="{{ route('tercero.edit', $tercero) }}">Editar
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-5">
                <div class="row justify-content-between">
                    <h2 class="d-inline-block col-9">Vehiculos</h2>
                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear tercero</button>
                </div>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Placa</th>
                            <th>Vin</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Color</th>
                            <th>Kilometraje</th>
                            <th>Tercero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehiculos as $vehiculo)
                            <tr>
                                <td>{{ $vehiculo->id }}</td>
                                <td>{{ $vehiculo->placa }}</td>
                                <td>{{ $vehiculo->vin }}</td>
                                <td>{{ $vehiculo->modelo }}</td>
                                <td>{{ $vehiculo->año }}</td>
                                <td>{{ $vehiculo->color }}</td>
                                <td>{{ $vehiculo->kilometraje }}</td>
                                <td>{{ $vehiculo->terceros->nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
