@extends('layouts.modules.index')

@section('meta.title', $title)

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

  <div>
    {{ $content  }}
  </div>
@endsection

@section('scripts')
  <!-- Some javascript -->
@endsection
