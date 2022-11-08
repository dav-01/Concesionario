@extends('layouts')

@section('section')
    <!-- Modals de crear terceros -->


    <div class="modal fade" id="CrearTercero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    <!-- Tabla de Terceros -->

    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="row justify-content-between">
                    <h2 class="d-inline-block col-9">Terceros</h2>
                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3" data-bs-toggle="modal"
                        data-bs-target="#CrearTercero" data-bs-whatever="@mdo">Crear tercero</button>
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
                                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3"
                                        data-bs-toggle="modal" data-bs-target="#EditarTercero" data-bs-whatever="@mdo"><a
                                            href="{{ route('tercero.update', $tercero) }}"></a> <i
                                            class="fa-solid fa-pen-to-square"></i></button>


                                    <button type="button" class="btn bg-danger mb-2 d-inline-block col-3"
                                        data-bs-toggle="modal" data-bs-target="#EliminarTercero" data-bs-whatever="@mdo"><a
                                            href="{{ route('tercero.destroy', $tercero) }}"></a><i
                                            class="fa-solid fa-trash"></i></button>

                                    <div class="modal fade" id="EditarTercero" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar tercero</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">


                                                    <!-- Modals de actualizar terceros -->

                                                    <form method="POST" action="{{ route('tercero.update', $tercero) }}">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="mb-1">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Cedula:</label>
                                                            <input type="text" class="form-control" id="cedula"
                                                                name="cedula" value="{{ $tercero->cedula }}">
                                                        </div>
                                                        <div class="mb-1">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Nombre:</label>
                                                            <input type="text" class="form-control" id="nombre"
                                                                name="nombre" value="{{ $tercero->nombre }}">
                                                        </div>
                                                        <div class="mb-1">
                                                            <label for="message-text"
                                                                class="col-form-label">Apellido:</label>
                                                            <input type="text" class="form-control" id="apellido"
                                                                name="apellido" value="{{ $tercero->apellido }}">
                                                        </div>
                                                        <div class="mb-1">
                                                            <label for="message-text"
                                                                class="col-form-label">Celular:</label>
                                                            <input type="text" class="form-control" id="celular"
                                                                name="celular"value="{{ $tercero->celular }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text"
                                                                class="col-form-label">Correo:</label>
                                                            <input type="text" class="form-control" id="correo"
                                                                name="correo" value="{{ $tercero->correo }}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-primary">Crear
                                                                tercero</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modals de Eliminar terceros -->

                                    <div id="EliminarTercero" class="modal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form method="POST" action="{{ route('tercero.destroy', [$tercero]) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Eliminar tercero </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Esta seguro de eliminar tercero?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-primary">Eliminar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modals de crear vehiculos -->


            <div class="modal fade" id="CrearVehiculo" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Crear Vehiculo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="{{ route('vehiculo.store') }}">
                                @csrf
                                <div class="mb-1">
                                    <label class="col-form-label">Placa:</label>
                                    <input type="text" class="form-control" id="placa" name="placa">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">Vin:</label>
                                    <input type="text" class="form-control" id="vin" name="vin">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">Modelo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">Año:</label>
                                    <input type="text" class="form-control" id="año" name="año">
                                </div>
                                <div class="mb-1">
                                    <label class="col-form-label">Color:</label>
                                    <input type="text" class="form-control" id="color" name="color">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Kilometraje:</label>
                                    <input type="text" class="form-control" id="kilometraje" name="kilometraje">
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label">Asignar Tercero:</label>
                                    <select name="id_tercero" id="">
                                        @foreach ($terceros as $tercero)
                                            <option value="{{ $tercero->id }}">{{ $tercero->nombre }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Crear Vehiculo</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div><br><br>


             <!-- Tabla de visualizacion de vehiculos -->

            <div class="col-5">
                <div class="row justify-content-between">
                    <h2 class="d-inline-block col-9">Vehiculos</h2>
                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3" data-bs-toggle="modal"
                        data-bs-target="#CrearVehiculo" data-bs-whatever="@mdo">Crear tercero</button>
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
                                <td>
                                    <button type="button" class="btn btn-primary mb-2 d-inline-block col-3"
                                        data-bs-toggle="modal" data-bs-target="#EditarVehiculo"
                                        data-bs-whatever="@mdo"><a href="{{ route('vehiculo.update', $vehiculo) }}"></a>
                                        <i class="fa-solid fa-pen-to-square"></i></button>

                                    <button type="button" class="btn bg-danger mb-2 d-inline-block col-3"
                                        data-bs-toggle="modal" data-bs-target="#EliminarVehiculo"
                                        data-bs-whatever="@mdo"><a
                                            href="{{ route('vehiculo.destroy', $vehiculo) }}"></a><i
                                            class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach


                         <!-- Modals de crear actualizar vehiculos -->


                         <div class="modal fade" id="EditarVehiculo" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Editar vehiculo</h5>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal"
                                         aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">

                                     <form method="POST"
                                         action="{{ route('vehiculo.update', $vehiculo) }}">
                                         @method('PUT')
                                         @csrf
                                         <div class="mb-1">
                                             <label class="col-form-label">Placa:</label>
                                             <input type="text" class="form-control" id="placa"
                                                 name="cedula" value="{{ $vehiculo->placa }}">
                                         </div>
                                         <div class="mb-1">
                                             <label class="col-form-label">Vin:</label>
                                             <input type="text" class="form-control" id="vin"
                                                 name="nombre" value="{{ $vehiculo->vin }}">
                                         </div>
                                         <div class="mb-1">
                                             <label class="col-form-label">Modelo:</label>
                                             <input type="text" class="form-control" id="modelo"
                                                 name="apellido" value="{{ $vehiculo->modelo }}">
                                         </div>
                                         <div class="mb-1">
                                             <label class="col-form-label">Año:</label>
                                             <input type="text" class="form-control" id="año"
                                                 name="celular"value="{{ $vehiculo->año }}">
                                         </div>
                                         <div class="mb-3">
                                             <label class="col-form-label">Color:</label>
                                             <input type="text" class="form-control" id="color"
                                                 name="correo" value="{{ $vehiculo->color }}">
                                         </div>
                                         <div class="mb-3">
                                             <label class="col-form-label">Kilometraje:</label>
                                             <input type="text" class="form-control" id="kilometraje"
                                                 name="celular"value="{{ $vehiculo->año }}">
                                         </div>

                                         <div class="mb-3">
                                             <label class="col-form-label">Asignar Tercero:</label>
                                             <select name="id_tercero" id="id_tercero">
                                                 @foreach ($terceros as $tercero)
                                                     <option value="{{ $tercero->id }}">
                                                         {{ $tercero->nombre }}</option>
                                                 @endforeach

                                             </select>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                 data-bs-dismiss="modal">Cerrar</button>
                                             <button type="submit" class="btn btn-primary">Actualizar
                                                 vehiculo</button>
                                         </div>
                                     </form>

                                 </div>



                             </div>
                         </div>
                     </div>

                         <!-- Modals de eliminar vehiculos -->

                        <div id="EliminarVehiculo" class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST"
                                        action="{{ route('vehiculo.destroy', $vehiculo) }}">
                                        @method('delete')
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Eliminar vehiculo </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Esta seguro de eliminar vehiculo?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Eliminar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
