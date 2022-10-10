@extends('layout')

@section('content')
@section('title', 'Conctacto')

<h1>{{ __('Contact') }}</h1>

@include('partials.session-status')


<form method="POST" action="{{ route('contact') }}">



    @csrf
    <input name="fullname" placeholder="Nombre..." value="{{ old('fullname') }}"><br>

    {!! $errors->first('fullname', '<small>:message</small><br>') !!}


    <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>

    {!! $errors->first('email', '<small>:message</small><br>') !!}


    <input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>

    {!! $errors->first('subject', '<small>:message</small><br>') !!}

    <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>

    {!! $errors->first('content', '<small>:message</small><br>') !!}

    <button>@lang('Send')</button>

@endsection
