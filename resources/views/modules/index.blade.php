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
  <style>
    code[class*="language-"],
    pre[class*="language-"] {
      color: black;
      background: none;
      font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
      font-size: 1em;
      text-align: left;
      white-space: pre;
      word-spacing: normal;
      word-break: normal;
      word-wrap: normal;
      line-height: 1.5;
      tab-size: 4;
      hyphens: none;
    }

    /* Code blocks */
    pre[class*="language-"] {
      position: relative;
      border-left: 10px solid #358ccb;
      box-shadow: -1px 0 0 0 #358ccb, 0 0 0 1px #dfdfdf;
      background-color: #fdfdfd;
      background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, 0.04) 50%);
      background-size: 3em 3em;
      background-origin: content-box;
      background-attachment: local;
      margin: .5em 0;
      padding: 0 1em;
    }

    pre[class*="language-"] > code {
      display: block;
    }

    /* Inline code */
    :not(pre) > code[class*="language-"] {
      position: relative;
      padding: .2em;
      border-radius: 0.3em;
      color: #c92c2c;
      border: 1px solid rgba(0, 0, 0, 0.1);
      display: inline;
      white-space: normal;
      background-color: #fdfdfd;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .token.comment,
    .token.block-comment,
    .token.prolog,
    .token.doctype,
    .token.cdata {
      color: #7D8B99;
    }

    .token.punctuation {
      color: #5F6364;
    }

    .token.property,
    .token.tag,
    .token.boolean,
    .token.number,
    .token.function-name,
    .token.constant,
    .token.symbol,
    .token.deleted {
      color: #c92c2c;
    }

    .token.selector,
    .token.attr-name,
    .token.string,
    .token.char,
    .token.function,
    .token.builtin,
    .token.inserted {
      color: #2f9c0a;
    }

    .token.operator,
    .token.entity,
    .token.url,
    .token.variable {
      color: #a67f59;
      background: rgba(255, 255, 255, 0.5);
    }

    .token.atrule,
    .token.attr-value,
    .token.keyword,
    .token.class-name {
      color: #1990b8;
    }

    .token.regex,
    .token.important {
      color: #e90;
    }

    .language-css .token.string,
    .style .token.string {
      color: #a67f59;
      background: rgba(255, 255, 255, 0.5);
    }

    .token.important {
      font-weight: normal;
    }

    .token.bold {
      font-weight: bold;
    }

    .token.italic {
      font-style: italic;
    }

    .token.entity {
      cursor: help;
    }

    .token.namespace {
      opacity: .7;
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.4.1/prism.min.js"></script>
@endsection
