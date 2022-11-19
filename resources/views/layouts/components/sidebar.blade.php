<?php
$menuItems = require __DIR__ . '../../../../database_/sidebar.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>

<div
  class="app__sidebar absolute top-0 left-0 bottom-0 p-2 w-full overflow-y-auto text-gray-700 dark:bg-gray-700 dark:text-white"
>
  {{-- title/logo --}}
  <div class="p-2.5 flex items-center">
      <span class="text-white text-4xl top-4 left-4 cursor-pointer ">
        <i class="bi bi-menu-button px-2 bg-red-600 rounded-md"></i>
      </span>
    <span class="ml-4 font-bold text-2xl uppercase">
      {{ config('app_config.app.app_name') }}
      </span>
  </div>

  {{-- list items --}}
  @foreach($menuItems as $i => $step1)
    @if (is_array($step1['path']))
      {{-- dropdown --}}
      <div class="w-full">
        <button
          id="{{ $step1['label'] }}"
          aria-controls="dropdown-{{ $i }}"
          data-collapse-toggle="dropdown-{{ $i }}"
          type="button"
          class="first-letter:uppercase whitespace-nowrap p-2.5 flex items-center justify-between rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300 font-bold w-full dark:hover:bg-gray-800"
        >
          {{-- data-dropdown-toggle="dropdown-{{ $i }}" --}}
          <span class="flex items-center">
            <i class="{{ $step1['icon'] }}"></i>
            <span class="text-[16px] ml-4"> {{ $step1['label'] }} </span>
          </span>

          <svg width="20" height="20" viewBox="0 0 24 24" class="ml-2">
            <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/>
          </svg>
        </button>
        <div class="relative">
          <div
            id="dropdown-{{ $i }}"
            aria-labelledby="{{ $step1['label'] }}"
            class="hidden min-w-full font-normal divide-y divide-gray-300 dark:divide-gray-600"
          >
            <div class="py-1 text-sm divide-y divide-gray-300 dark:divide-gray-600">
              @foreach ($step1['path'] as $step2 => $key)
                <a
                  href="{{$key['path']}}"
                  target="{{$key['blank'] ? '_blank' : ''}}"
                  rel='noopener noreferrer'
                  class='first-letter:uppercase block whitespace-nowrap py-3 px-4 rounded-md font-bold hover:bg-gray-300 dark:hover:bg-gray-800'
                  aria-current='page'
                >
                  {{--                  <i class="{{ $key['icon'] }}"></i>--}}
                  <span class="ml-4"> {{ $key['label'] }} </span>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="w-full">
        <a
          href="{{ $step1['path'] }}"
          target="{{ $step1['blank'] ? '_blank' : '' }}"
          rel="noopener noreferrer"
          class="first-letter:uppercase whitespace-nowrap p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-800"
          aria-current="page"
        >
          <i class="{{ $step1['icon'] }}"></i>

          <span class="text-[16px] ml-4"> {{ $step1['label'] }} </span>
        </a>
      </div>
    @endif
  @endforeach

  <!--
  <a
    href="/"
    title=""
    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300"
  >

    <span class="text-[15px] ml-4 font-bold">Home</span>
  </a>
  <div class="my-1 h-[1px]"></div>

  {{-- dropdown --}}
  <div
    class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300"
    onclick="dropdown()"
  >
    <i class="bi bi-chat-left-text-fill"></i>
    <div class="flex justify-between w-full items-center">
      <span class="text-[15px] ml-4 font-bold">Modules</span>
      <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
    </div>
  </div>

  {{-- dropdown submenu --}}
  <div
    class="text-left text-sm mt-2 ml-auto w-4/5 font-bold"
    id="submenu"
  >
    <a href="#" title="" class="block p-2 hover:bg-gray-300 rounded-md mt-1">
      1
    </a>
    <a href="#" title="" class="block p-2 hover:bg-gray-300 rounded-md mt-1">
      2
    </a>
    <a href="#" title="" class="block p-2 hover:bg-gray-300 rounded-md mt-1">
      3
    </a>
  </div>
  -->
</div>
