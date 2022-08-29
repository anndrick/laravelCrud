@extends('layouts.login')
@section('title', 'Registro')

@section('content')
    <form action="/edit/{{$profile->id}}" method = "POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre: </label>
            <input type="text" name="name" placeholder="name" class="form-control" value="{{$profile->name}}">
            <label class="form-label">Apellido: </label>
            <input type="text" name="lastName" placeholder="lastName" class="form-control" value="{{$profile->lastName}}">
            {{-- <label class="form-label">Correo electrónico: </label>
            <input type="text" name="email" placeholder="email" class="form-control">
            <label class="form-label">Contrasña: </label>
            <input type="text" name="password" placeholder="password" class="form-control">
            <label class="form-label">Foto de perfil: </label>
            <input type="text" name="profilePic" placeholder="profilePic" class="form-control"> --}}
            <label class="form-label">Editar descripción: </label>
            <input type="text" name="description" placeholder="description" class="form-control" value="{{$profile->description}}">
            <button type="submit" class="btn btn-primary">Actualizar </button>
            <a href="/admin" class="btn btn-primary">Cancelar </a>
        </div>
    </form>
@endsection
