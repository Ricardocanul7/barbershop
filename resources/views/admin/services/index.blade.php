@extends('admin.layouts.dashboard')

@section('contenido')

<div class="row">
    <div class="col">
        <h1>Servicios</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="{{ url('admin/clients/create') }}" class="btn btn-primary">Agregar</a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Duración</th>
                <th scope="col">Precio</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope="row"> {{$loop->iteration}} </th>
                        <td> {{ $service->name }} </td>
                        <td> {{ $service->description }} </td>
                        <td> {{ $service->duration }} </td>
                        <td> {{ $service->price }} </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>


@endsection
