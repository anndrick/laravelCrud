@extends('layouts.content')

@section('title', 'Inicio')

@section('content')
    @foreach ($profile as $profile)
        <div class="m-5 align-self-center" style="width: 50rem;">
            <div  class="mb-3 rounded-3" style="background-color: rgb(229, 234, 238); rounded">
                <div class="card " >
                    <div class="card-body">
                        <div class="d-flex text-center mb-3">
                            <img style="max-height: 60px; max-width: 60px; rounded" src="https://scontent.fcvj1-1.fna.fbcdn.net/v/t39.30808-6/301877568_1295196264642068_1570272535178190237_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5cd70e&_nc_eui2=AeED8vWMAWrSeXYqRurnhuJFyUWfYGhpFwbJRZ9gaGkXBsGQD7Om1DQAWUXXJQkbKsC_v6EBJmMgY4TqIA3gvXl5&_nc_ohc=eBieyRPlVpIAX92IHyb&_nc_ht=scontent.fcvj1-1.fna&oh=00_AT-FLLVOfihyauB1DjGDg3QbVyHLOP3FLBg0ut_Ak1fD-Q&oe=630F0B08" class="card-img-top rounded-circle" alt="...">
                            <h5 class="ms-3 card-title col-auto me-auto align-self-center">{{ $profile->name }}   {{ $profile->lastName }}</h5>
                        </div>
                    <p class="card-text">{{ $profile->description}}</p>
                    <form action="/delete/{{$profile->id}}" method="POST">
                        <a class="btn btn-info" href="/edit/{{$profile->id}}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection