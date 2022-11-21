@extends('layouts.modules.index')

@php
  if (!empty($_GET['module'])) {
      $module = 'Модуль ' . $_GET['module'] . '. ';
    } else {
      $module = null;
    }
@endphp

@section('meta.title', $module . $title)

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
@section('caption', $module . ' ' . $caption)

<div>
  {!! $content !!}
</div>
@endsection

@section('scripts')
  <!-- Some javascript -->
@endsection
