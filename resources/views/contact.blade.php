@extends('layout')

@section('title', 'Contact')

@section('content')
<h1>{{ __('Contact')}}</h1>

@include('partials.session-status')
<form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <input name="name" placeholder="Nombre" value="{{ old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="text" name="email" placeholder="Email" value="{{ old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input name="subject" placeholder="Asunto" value="{{ old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        
        <textarea name="content" placeholder="Contenido">{{ old('content')}}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form>
@endsection