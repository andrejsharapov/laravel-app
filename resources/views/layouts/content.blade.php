@hasSection('content')
  <div class="grow my-6 md:container md:mx-auto px-4 flex justify-center items-center">
    @yield('content')
  </div>
@endif

@hasSection('module')
  <div class="grid md:flex w-full h-full bg-gray-200">
    <aside class="flex flex-col w-full md:w-1/3 md:min-w-32 shadow-xl">
      <div class="grow h-full p-4 ">
        {{--      @include('layouts.components.sidebar')--}}
      </div>
      @include('layouts.footer')
    </aside>

    <main class="shadow-lg grow min-h-screen p-4 bg-gray-50">
      <h1 class="mb-2 text-2xl md:text-4xl text-gray-900 dark:text-white">
        @yield('title')
      </h1>
      <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
        @yield('caption')
      </p>

      @yield('module')
    </main>
  </div>
@endif
