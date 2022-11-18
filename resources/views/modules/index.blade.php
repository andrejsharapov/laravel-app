@extends('layouts.modules.index')

@section('meta.title', 'Module')

@section('styles')
  <!-- Some styles -->
  <style>
    body {
      color: #3d3a55;
    }
  </style>
@endsection

@section('module')
  @section('title', $title)
  @section('caption', $caption)

  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate debitis earum enim et iure laboriosam
    libero nemo obcaecati quas recusandae, repellendus reprehenderit? Alias aut explicabo incidunt natus, quia
    rerum?
  </p>
@endsection

@section('scripts')
  <!-- Some javascript -->
@endsection
