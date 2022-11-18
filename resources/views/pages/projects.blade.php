@extends('layouts.pages.index')

@section('meta.title', 'Page name')

@section('styles')
  <!-- Some styles -->
  <style>
    body {
      color: #3d3a55;
    }
  </style>
@endsection

@section('content')
  <h1 class="md:text-5xl">
    {{ config('app_config.app.app_desc') }}
  </h1>
@endsection

@section('scripts')
  <!-- Some javascript -->
@endsection
