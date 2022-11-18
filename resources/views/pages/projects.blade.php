@extends('layouts.welcome')

@section('meta.title', 'My projects')

@section('styles')
    <!-- Some styles -->
    <style>
        body {
            color: #3d3a55;
        }
    </style>
@endsection

@section('appbar')
    @extends('layouts/components/appbar')
@endsection

@section('content')
    <h1 class="md:text-5xl">
        projects
    </h1>
@endsection

@section('styles')
    <!-- Some javascript -->
@endsection
