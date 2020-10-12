@extends('admin.layouts.dashboard')

@section('contenido')
<form action="{{ url('clients') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.clients.form')
</form>
@endsection
