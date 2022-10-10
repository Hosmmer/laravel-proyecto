@extends('layout')

@section('content')

@section('title', 'Editar Proyecto')

<h1>{{ __('EditNewProject') }}</h1>

 
    @include('partials.validation-errors')


<form method="POST" action="{{ route('projects.update', $project) }}">
    @method('PATCH')
    @include('projects._form',['btnText'=> 'Actualizar'])

</form>

@endsection
