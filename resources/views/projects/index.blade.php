@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>
    @auth
    <a href="{{route('projects.create')}}">Crear proyecto</a>
    @endauth

@include('partials.session-status')
    <ul>
        @forelse ($projects as $element)
    <li><a href="{{ route('projects.show', $element)}}">{{ $element->title }}</a></li>
        @empty
            <li>No hay elementos para mostrar</li>
        @endforelse
        {{$projects->links()}}
    </ul>
@endsection