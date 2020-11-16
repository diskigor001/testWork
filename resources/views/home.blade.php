@extends('layouts.app')

@section('content')

    @if(Auth::user()->role == 'user')
        @include('core.form')
    @else
        @include('core.manager.index')
    @endif

@endsection
