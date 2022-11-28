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
  <link rel="stylesheet" href="css/prism.coy.css">
@endsection

@section('module')
@section('title', $title)
@section('caption', $module . ' ' . $caption)

<div>
  {!! $content !!}
{{--  {{ content }}--}}
</div>

@endsection

@section('scripts')
  <script src="js/prism.min.js"></script>
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>--}}
@endsection
