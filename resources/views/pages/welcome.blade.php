@extends('layouts.welcome')

@section('meta.title', 'Welcome page')

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
    {{ config('app_config.app.app_name') }}
  </h1>
@endsection

@section('styles')
  <!-- Some javascript -->
@endsection
