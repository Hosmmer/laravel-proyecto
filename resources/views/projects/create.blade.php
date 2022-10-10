@extends('layout')

@section('content')

@section('title', 'Crear Proyecto')

<h1>{{ __('CreateNewProject') }}</h1>


    @include('partials.validation-errors')



<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    @include('projects._form', ['btnText' => 'Guardar'])

</form>

@endsection
