@php
  $menuItems = require __DIR__ . '../../../../database_/sidebar.php';
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

<div
  class="w-full h-full overflow-x-hidden overflow-y-auto text-gray-700 dark:text-white"
>
  {{-- title/logo --}}
  <div class="flex items-center">
    <a
      href="/modules"
      title="Modules"
      class="text-white text-3xl w-12 h-12 bg-red-600 rounded-md grid place-content-center"
    >
      <i class="bi bi-menu-button"></i>
    </a>
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
          class="first-letter:uppercase whitespace-nowrap p-2.5 flex items-center justify-between rounded-md px-4 duration-300 cursor-pointer hover:text-white hover:bg-red-600 font-bold w-full"
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
                  href="{{ $key['path'] }}"
                  target="{{ $key['blank'] ? '_blank' : '' }}"
                  rel='noopener noreferrer'
                  class='truncate first-letter:uppercase block whitespace-nowrap py-3 px-4 rounded-md font-bold hover:text-white hover:bg-red-600'
                  aria-current="page"
                  title="{{ $key['label'] }}"
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
          class="first-letter:uppercase whitespace-nowrap p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 font-bold hover:text-white hover:bg-red-600"
          aria-current="page"
          title="{{ $step1['label'] }}"
        >
          <i class="{{ $step1['icon'] }}"></i>

          <span class="text-[16px] ml-4"> {{ $step1['label'] }} </span>
        </a>
      </div>
    @endif
  @endforeach
</div>

