@extends('layouts.login')
@section('title', 'Registro')
{{-- @section('header', 'Regístrate, es gratis y lo será siempre :)') --}}

@section('content')
    <form action="/register" method = "POST">
        @csrf
        <div class="m-3" style="width: 50rem;">
            <label class="form-label">Nombre: </label>
            <input type="text" name="name" placeholder="Tu nombre" class="form-control">
            <label class="form-label">Apellido: </label>
            <input type="text" name="lastName" placeholder="Tu apellido" class="form-control">
            {{-- <label class="form-label">Correo electrónico: </label>
            <input type="text" name="email" placeholder="email" class="form-control">
            <label class="form-label">Contrasña: </label>
            <input type="text" name="password" placeholder="password" class="form-control">
            <label class="form-label">Foto de perfil: </label>
            <input type="text" name="profilePic" placeholder="profilePic" class="form-control"> --}}
            <label class="form-label">¿Qué quieres compartir? </label>
            <input type="text" name="description" placeholder="Cuéntanos algo" class="form-control">
            <button type="submit" class="btn btn-primary mt-3 mb-5">Subir </button>
        </div>
    </form>
@endsection
