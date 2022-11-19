@extends('layouts.pages.index')

@php($title = 'This is the layout for the pages')

@section('meta.title', $title)

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
    {{ $title }}
  </h1>
@endsection

@section('scripts')
  <!-- Some javascript -->
@endsection
