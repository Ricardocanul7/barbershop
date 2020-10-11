@extends('layouts.dashboard')

@section('contenido')
<form action="{{ url('clients' . $client->id . '/edit') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.clients.form', ['method' => 'edit'])
</form>
@endsection
