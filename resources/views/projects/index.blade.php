@extends('layout')

@section('content')

@section('title', 'Proyectos')

    <h1>{{ __('Projects') }}</h1>
@auth
    <a href="{{ route('projects.create') }}"><button>Crear un proyecto</button></a>

@endauth
<ul>

    @forelse($projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}"> {{ $project->title }}</a>
        </li>
    @empty

        <li>No hay para mostrar</li>
    @endforelse
    {{ $projects->links() }}

</ul>

@endsection
