@extends('layout')

@section('title', 'Project|' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
@auth
    <a href="{{ route('projects.edit', $project) }}"><button>Editar</button></a>


    <form method="POST" action="{{ route('projects.destroy', $project) }}">

        @csrf @method('DELETE')

        <button>Eliminar</button>

    </form>
@endauth
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
    <a href="/portafolio">Volver a proyectos</a>
@endsection
