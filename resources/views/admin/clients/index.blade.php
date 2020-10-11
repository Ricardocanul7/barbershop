@extends('layouts.dashboard')

@section('contenido')
    <div class="row">
        <div class="col">
            <h1>Clientes</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ url('clients/create') }}" class="btn btn-primary">Agregar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{'Nombre'}}</th>
                    <th scope="col">{{'Apellido'}}</th>
                    <th scope="col">{{'Email'}}</th>
                    <th scope="col">{{'Telefono'}}</th>
                    <th scope="col">{{'Celular'}}</th>
                    <th scope="col">{{'Registro'}}</th>
                    <th scope="col">{{'Acciones'}}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->last_name }}</td>
                            <td>{{ $client->email}}</td>
                            <td>{{ $client->local_phone}}</td>
                            <td>{{ $client->mobile_phone}}</td>
                            <td>{{ $client->created_at}}</td>
                            <td>
                                {{-- <a class="btn btn-info">{{'Detalles'}}</a> --}}
                                <a href=" {{ url('clients/' . $client->id . '/edit') }} " class="btn btn-warning">{{'Editar'}}</a>
                                <form action=" {{ url('clients/' . $client->id) }} " method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro?')">{{'Borrar'}}</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
